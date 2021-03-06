<?php
/* Smarty version 3.1.29, created on 2017-01-30 12:28:29
  from "C:\wamp64\www\Examplecode\Klikspel\tpl\Monster.html.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_588f235db15ca6_08878957',
  'file_dependency' => 
  array (
    '9edacefcb03fec5e3932add07fcc6040364d0bfb' => 
    array (
      0 => 'C:\\wamp64\\www\\Examplecode\\Klikspel\\tpl\\Monster.html.tpl',
      1 => 1485775707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_588f235db15ca6_08878957 ($_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
    <title> The <?php echo $_smarty_tpl->tpl_vars['area']->value;?>
 </title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<div class="plaatje">

    <ul>
        <li>Attack: <strong><?php echo $_smarty_tpl->tpl_vars['attack']->value;?>
</strong></li>
        <li>Defence: <strong><?php echo $_smarty_tpl->tpl_vars['defence']->value;?>
</strong></li>
        <li>Magic: <strong><?php echo $_smarty_tpl->tpl_vars['magic']->value;?>
</strong></li>
        <li>Gold in hand: <strong><?php echo $_smarty_tpl->tpl_vars['gold']->value;?>
</strong></li>
        <li>Current HP: <strong><?php echo $_smarty_tpl->tpl_vars['currentHP']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['maximumHP']->value;?>
</strong>
        <li>Gold Inbank: <strong><?php echo $_smarty_tpl->tpl_vars['inbank']->value;?>
</strong></li>
        <li>Current level: <strong><?php echo $_smarty_tpl->tpl_vars['level']->value;?>
</strong></li>
        <li>Experience: <strong><?php echo $_smarty_tpl->tpl_vars['experience']->value;?>
</strong></li>
        <li>Experience needed until level <strong><?php echo $_smarty_tpl->tpl_vars['level']->value+1;?>
: <?php echo $_smarty_tpl->tpl_vars['exp_remaining']->value;?>
</strong></li>
    </ul>

    <ul>
        <p class="H1l">Npc`s in your party</p>
        <?php
$_from = $_smarty_tpl->tpl_vars['party']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_0_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$__foreach_i_0_saved_key = isset($_smarty_tpl->tpl_vars['id']) ? $_smarty_tpl->tpl_vars['id'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_i_0_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
            <li><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</li>
        <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_0_saved_local_item;
}
if ($__foreach_i_0_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_0_saved_item;
}
if ($__foreach_i_0_saved_key) {
$_smarty_tpl->tpl_vars['id'] = $__foreach_i_0_saved_key;
}
?>
    </ul>

    <h1> You've encountered a <strong><?php echo $_smarty_tpl->tpl_vars['monster']->value;?>
! </strong> </h1>
        <?php if ($_smarty_tpl->tpl_vars['combat']->value == '') {?>
            <form action='Monster.php' method='post'>
                <input type='submit' name='action' value='Attack' /> or
                <input type='submit' name='action' value='Run Away' />
                <input type='hidden' name='monster' value='<?php echo $_smarty_tpl->tpl_vars['monster']->value;?>
' />
            </form>
        <?php } else { ?>
            <ul>
                <?php
$_from = $_smarty_tpl->tpl_vars['combat']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_1_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$__foreach_i_1_saved_key = isset($_smarty_tpl->tpl_vars['id']) ? $_smarty_tpl->tpl_vars['id'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_i_1_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
                    <li><strong><?php echo $_smarty_tpl->tpl_vars['i']->value['attacker'];?>
</strong> attacks <strong><?php echo $_smarty_tpl->tpl_vars['i']->value['defender'];?>
</strong> for <?php echo $_smarty_tpl->tpl_vars['i']->value['damage'];?>
 damage!</li>
                <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_1_saved_local_item;
}
if ($__foreach_i_1_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_1_saved_item;
}
if ($__foreach_i_1_saved_key) {
$_smarty_tpl->tpl_vars['id'] = $__foreach_i_1_saved_key;
}
?>
            </ul>
            <?php if (isset($_smarty_tpl->tpl_vars['won']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['won']->value == 1) {?>
                    <p>You found a <strong><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</strong>!</p>
                    <p>You killed <strong><?php echo $_POST['monster'];?>
</strong>! You gained <strong><?php echo $_smarty_tpl->tpl_vars['gold1']->value;?>
</strong> gold,
                        and <strong><?php echo $_smarty_tpl->tpl_vars['exp']->value;?>
</strong> experience.</p>
                    <?php if (isset($_smarty_tpl->tpl_vars['level_up']->value)) {?>
                    <?php if ($_smarty_tpl->tpl_vars['level_up']->value == 1) {?>
                        <p><strong>You gained a level!</strong></p>
                        <form action="Monster.php" method="post">
                            <ul>
                             <p>Which stat do you want to increase?</p>
                            <li> <p class="H1l"> Attack </p> </li>
                            <li> <input type="radio" name="Attack" value="Attack"></li>
                            <li> <p class="H1l"> Defense </p>  </li>
                            <li> <input type="radio" name="Defense" value="Defense"></li>
                            <li>  <p class="H1l"> MaxHP </p> </li>
                            <li> <input type="radio" name="MaxHP" value="MaxHP"></li>
                            <input type="submit" value="submit" name="submit">
                                </ul>
                        </form>
                    <?php }?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['area_id']->value == 1) {?>
                    <p><a href='lake.php'>Go to the lake</a></p>
                    <p><a href="Sand.php">Go  to some sand -.- </a> </p>
                    <?php } elseif ($_smarty_tpl->tpl_vars['area_id']->value == 2) {?>
                        <p><a href="OBank.php"> Go to the bank </a></p>
                        <p><a href="Nstation.php"> Poilice stations are good ? </a></p>
                     <?php } elseif ($_smarty_tpl->tpl_vars['area_id']->value == 4) {?>
                        <p><a href="CaveLH.php"> Go futher in the cave </a></p>
                        <p><a href="CaveY.php"> Go to the yard  in the cave </a></p>
                        <?php } elseif ($_smarty_tpl->tpl_vars['area_id']->value == 5) {?>
                        <p><a href="PrisonBlockB.php"> Go on to block b</a></p>
                        <p><a href="PrisonHallKichten.php"> Go to the kichten</a></p>
                    <?php } elseif ($_smarty_tpl->tpl_vars['area_id']->value == 6) {?>
                        <p><a href="TownYard.php"> Go to the city </a></p>
                        <p><a href="TownCave.php"> Go back to the cave</a></p>
                     <?php } else { ?>
                        <p><a href="Deck.php"> Go on the boat if you dare </a></p>
                        <p><a href="Nship.php"> Go to you`re boat </a></p>
                    <?php }?>
                <?php }?>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['lost']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['lost']->value == 1) {?>
                    <p>You were killed by <strong><?php echo $_POST['monster'];?>
</strong>.</p>
                    <p><a href='index.php'>Game over</a></p>
                <?php }?>
            <?php }?>
        <?php }?>

    <?php echo $_smarty_tpl->tpl_vars['img']->value;?>

    <ul>
        <?php
$_from = $_smarty_tpl->tpl_vars['inventory']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_2_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$__foreach_i_2_saved_key = isset($_smarty_tpl->tpl_vars['id']) ? $_smarty_tpl->tpl_vars['id'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_i_2_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
            <li> <?php echo $_smarty_tpl->tpl_vars['i']->value['player_id'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['item_id'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['space'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['quantity'];?>
 </li>
        <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_2_saved_local_item;
}
if ($__foreach_i_2_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_2_saved_item;
}
if ($__foreach_i_2_saved_key) {
$_smarty_tpl->tpl_vars['id'] = $__foreach_i_2_saved_key;
}
?>
    </ul>



    <?php if (isset($_smarty_tpl->tpl_vars['IncDef']->value)) {?>
        <p style="color: blue"> <?php echo $_smarty_tpl->tpl_vars['IncDef']->value;?>
 </p>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['IncAtk']->value)) {?>
        <p style="color: blue"> <?php echo $_smarty_tpl->tpl_vars['IncAtk']->value;?>
 </p>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['IncHP']->value)) {?>
        <p style="color: blue"> <?php echo $_smarty_tpl->tpl_vars['IncHP']->value;?>
 </p>
    <?php }?>
</div>
</body>
</html><?php }
}
