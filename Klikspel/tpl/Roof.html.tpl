<!DOCTYPE HTML>
<html>
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

    <h1> Station roof </h1>
    <p> There you standing looking over the village <br>
        but you see a chopper flying around. <br>
        You`re thinking did they know i am here </p>
    <img src="img/RoofPS.png">
    <ul>
        <li><a href="Police.php"> Go back inside  </a></li>
        {if isset($smarty.session.flare)}
            <li><a href="#"> Call the chopper</a></li>
            {else}
            <li><a href="#"> Nothing Here </a> </li>
        {/if}
        <li><a href="KeyBK.php"> a Key??  </a></li>
    </ul>

    <ul>
        {foreach from=$inventory key=id item=i}
            <li> {$i.player_id} {$i.item_id} {$i.space} {$i.quantity} </li>
        {/foreach}
    </ul>

</div>
</body>
</html>