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

    <ul>
        <p class="H1l">Npc`s in you`re party</p>
        {foreach from=$party key=id item=i}
            <li>{$i.name}</li>
        {/foreach}
    </ul>

    <h1> A door .... on lock? </h1>
    <p> <strong> Knock Shakes the door </strong><br>
        On lock what now wallk around and look for a way up. <br>
        Maby a key so i can unlock this</p>
    <img src="img/DoorGrave.png">
    <ul>
        <li><a href="AgianStreet.php"> Go back ^.^ please </a></li>
        {if isset($smarty.session.KeyGY)}
        <li><a href="GraveYard.php"> Go on ... Please </a></li>
        {else}
        <li><a href="Meme.php">Nothing here Folk </a> </li>
        {/if}
    </ul>
    <ul>
        {foreach from=$inventory key=id item=i}
            <li> {$i.player_id} {$i.item_id} {$i.space} {$i.quantity} </li>
        {/foreach}
    </ul>

</div>
</body>
</html>