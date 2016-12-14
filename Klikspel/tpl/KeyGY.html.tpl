<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title> {$pagetitle} </title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<div class="plaatje">

    <ul>
        <li>Attack: <strong>{$attack}</strong></li>
        <li>Defence: <strong>{$defence}</strong></li>
        <li>Magic: <strong>{$magic}</strong></li>
        <li>Gold in hand: <strong>{$gold}</strong></li>
        <li>Current HP: <strong>{$currentHP}/{$maximumHP}</strong>
        <li>Gold Inbank: <strong>{$inbank}</strong></li>
    </ul>

    <h1> Key?? </h1>

    <p>  A key but for what <br>
        <strong> the bank </strong> <br>
        <strong> The station? </strong> or even <br>
        <b> the graveyard </b> </p>

    <img src="img/KeyGY.png">
    <ul>
        <li><a href="Vault.php"> GO back for something else</a> </li>
    </ul>

    <ul>
        {foreach from=$inventory key=id item=i}
            <li> {$i.player_id} {$i.item_id} {$i.space} {$i.quantity} </li>
        {/foreach}
    </ul>

</div>
</body>
</html>