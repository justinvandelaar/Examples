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

    <h1> A 0.0 Car Yes </h1>
    <p> Can it ride <br>
    or is this thing broken </p>
    <img src="img/Car.png">
    <ul>
        <li><a href="Garage.php"> Go back to the garage </a></li>
        {if isset($smarty.session.jerrycan)}
        <li><a href="lake.php"> Go to the lake and load the boat </a></li>
        {else}
        <li><a href="Garage.php"> Go look for the jerrycan</a> </li>
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