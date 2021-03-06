<?php
session_start();
global $space;
global $count;
$space = 50;
$count = 1;
require_once ('inc/loadsmarty.php');
require_once ('inc/DBconnection.php');
include_once ('inc/playerstats.php');
include_once ('inc/Monster.php');
include_once ('inc/ItemStats.php');
include_once ('inc/WeaponStat.php');

$query = sprintf("SELECT id FROM player WHERE UPPER(username) = UPPER('%s')",
    mysqli_real_escape_string($mysqli, $_SESSION['username']));
$result = mysqli_query($mysqli, $query);
list($value) = mysqli_fetch_row($result);
$userID = $value;

$pagetitle = "Mine game";

$inventory = array();
$query = sprintf("SELECT * FROM inventory WHERE player_id = '%s'",
    mysqli_real_escape_string($mysqli, $userID));
$result = mysqli_query($mysqli, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $item_query = sprintf("SELECT name FROM items WHERE id = '%s'",
        mysqli_real_escape_string($mysqli, $row['item_id']));
    $item_result = mysqli_query($mysqli, $item_query);
    list($row['name']) = mysqli_fetch_row($item_result);
    array_push($inventory, $row);
}

if(isset($_POST['amount'])) {
    $amount = $_POST['amount'];
    $gold = getStat('gc',$userID);
    $needed = getStat('maxhp',$userID) - getStat('curhp',$userID);
    if($amount > $needed || $amount == '') {
        $amount = $needed;
    }
    if($amount > $gold) {
        $amount = $gold;
    }
    if($amount < $needed) {
        $amount = 0;
        $smarty->assign('info', 'Dont put a negative number');
    }
    if (!is_integer($amount)) {
        $amount =  0;
        $smarty->assign('Mehhhhhh', 'You dind`t put a number in');
    }
    setStat('gc',$userID,getStat('gc',$userID) - $amount);
    setStat('curhp',$userID,getStat('curhp',$userID) + $amount);
    $smarty->assign('healed',$amount);
}

if(isset($_POST['potion-id'])) {
    $potionID = $_POST['potion-id'];
    $Quantity = $_POST['Quantity'];

    $query9 = sprintf("SELECT name FROM items WHERE id IN(SELECT $potionID FROM Inventory)",
        mysqli_real_escape_string($mysqli, $potionID));
    $result20 = mysqli_query($mysqli, $query9);
    $potion = mysqli_fetch_assoc($result20);

    $query = sprintf("SELECT price FROM items WHERE id = %s",mysqli_real_escape_string($mysqli, $potionID));
    $result = mysqli_query($mysqli, $query);
    list($cost) = mysqli_fetch_row($result);
    $gold = getStat('gc',$userID);
    if($gold > $cost) {
        $query = sprintf("SELECT item_id FROM Inventory WHERE item_id = '%s'",
            mysqli_real_escape_string($mysqli, $potionID));
        $result = mysqli_query($mysqli, $query);
        mysqli_fetch_row($result);
        if ($result->num_rows > 0) {
            if ($Quantity == 0) {
                $sql = "UPDATE Inventory SET quantity = quantity + 1 WHERE item_id=$potionID";
                mysqli_query($mysqli, $sql);
                setStat('gc', $userID, ($gold - $cost));
                $smarty->assign('message', '1 more ' . $potion['name'] . ' added!');
                $smarty->assign('Nope', 'No number has filled in');
            }
            else {
                $LOL = $cost * $Quantity;
                if ($Quantity < 0) {
                    $smarty->assign('Damm', 'A Negative number has been filed in');
                }
                elseif ($LOL >= $gold) {
                    $smarty->assign('NoNo', 'Not enough coins to buy');
                } else {
                    $sql = "UPDATE Inventory SET quantity = quantity + $Quantity WHERE item_id=$potionID";
                    mysqli_query($mysqli, $sql);
                    setStat('gc', $userID, ($gold - $LOL));
                    $smarty->assign('message', $Quantity . ' more ' .  $potion['name'] . '  added!');
                    var_dump($sql);
                    var_dump($Quantity);
                    var_dump($potion['name']);
                    var_dump($Quantity);
                }
                /*
                    else {
                    $sql = "UPDATE Inventory SET quantity = quantity + $Quantity WHERE item_id=$potionID";
                    mysqli_query($mysqli, $sql);
                    setStat('gc', $userID, ($gold - $LOL));
                    $smarty->assign('message', $Quantity . ' more ' .  $potion['name'] . '  added!');
                }
                 */
            }
        }
         else {
             foreach ($inventory as $Ok) {
                 $Ok = $space;
                 $space--;
             }
             if ($Quantity == '') {
                 $sql = "INSERT INTO Inventory(player_id, item_id, space, quantity) VALUES ($userID, '$potionID', '$space', 1)";
                 mysqli_query($mysqli, $sql);
                 setStat('gc', $userID, ($gold - $cost));
                 $smarty->assign('message', 'You Bought that ' .$potion['name'] . ' !');
             }
             else {
                 $LOL = $cost * $Quantity;
                 if ($Quantity < 0) {
                     $smarty->assign('Damm', 'A Negative number has been filed in');
                 }
                 elseif ($LOL >= $gold) {
                     $smarty->assign('NoNo', 'Not enough coins to buy');
                 }
                 else {
                     $sql = "INSERT INTO Inventory(player_id, item_id, space, quantity) VALUES ($userID, '$potionID', '$space', $Quantity)";
                     mysqli_query($mysqli, $sql);
                     setStat('gc', $userID, ($gold - $LOL));
                     $smarty->assign('message', 'You Bought ' . $Quantity . ' of ' . $potion['name'] . ' ! ');
                 }
             }
         }
    }
    else {
        $smarty->assign('error','You cannot afford that ' . $potion['name'] . ' !');
    }
}
$query = "SELECT DISTINCT(id), name, price FROM items WHERE type = 'Potion' ORDER BY RAND() LIMIT 10;";
$result = mysqli_query($mysqli, $query);
$Potion = array();
while($row = mysqli_fetch_assoc($result)) {
    array_push($Potion,$row);
}

$party = array();
$query1 = sprintf("SELECT name FROM npc WHERE id IN(SELECT npc_id FROM party_members WHERE party_id=(
    SELECT id FROM party WHERE player_id=
    (SELECT id FROM player WHERE username = '%s')))",
    mysqli_real_escape_string($mysqli, $_SESSION['username']));;
$result1 = mysqli_query($mysqli, $query1);
if ($result1 == false) {}
else {
    while ($row = mysqli_fetch_assoc($result1))
    array_push($party, $row);
}

$smarty->assign('level',getStat('lvl',$userID));
$smarty->assign('experience',getStat('exp',$userID));
$smarty->assign('exp_remaining',getStat('exp_rem',$userID));
$smarty->assign('party', $party);
$smarty->assign('curhp',getStat('curhp',$userID));
$smarty->assign('maxhp',getStat('maxhp',$userID));
$smarty->assign('gold',getStat('gc',$userID));
$smarty->assign('potion',$Potion);
$smarty->assign('inventory', $inventory);
$smarty->assign('attack',getStat('atk',$userID));
$smarty->assign('magic',getStat('mdef',$userID));
$smarty->assign('defence',getStat('def',$userID));
$smarty->assign('gold',getStat('gc',$userID));
$smarty->assign('inbank',getStat('bankgc',$userID));
$smarty->assign('currentHP',getStat('curhp',$userID));
$smarty->assign('maximumHP',getStat('maxhp',$userID));
$smarty->assign('pagetitle', $pagetitle);
$smarty->display("tpl/Potion.html.tpl");