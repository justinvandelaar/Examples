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
        <li>Current level: <strong>{$level}</strong></li>
        <li>Experience: <strong>{$experience}</strong></li>
        <li>Experience needed until level <strong>{$level+1}: {$exp_remaining}</strong></li>
    </ul>

    <ul>
        <p class="H1l">Npc`s in your party</p>
        {foreach from=$party key=id item=i}
            <li>{$i.name}</li>
        {/foreach}
    </ul>

    <h1> Roof of the electro store </h1>
    <p>  As you standing lookng over the city you`re thinking wat can i do here </p>

    <img src="img/RoofEl.png">
    <ul>
        <li><a href="BackE.php"> Go down in the shop </a> </li>
        {if isset($smarty.session.antenne) AND isset($smarty.session.recvier) AND isset($smarty.session.versterker)}
        <li><a href="Message.php"> Build the Antenne </a> </li>
        {else}
        <li><a href="Meme.php"> Nothing Here to see </a> </li>
        {/if}
        {if isset($smarty.session.Chop_Three)}
            <li><a href="Chopper.php"> Use the chopper </a></li>
        {/if}
        <li><a href="KeyPS.php"> a key 0.0?? </a> </li>
    </ul>

    <ul>
        {foreach from=$inventory key=id item=i}
            <li> {$i.player_id} {$i.item_id} {$i.space} {$i.quantity} </li>
        {/foreach}
    </ul>

</div>
</body>
</html>