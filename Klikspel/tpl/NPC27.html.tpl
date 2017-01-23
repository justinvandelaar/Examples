<!DOCTYPE HTML>
<html>
<head>
    <title> {$pagetitle} </title>
    <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body class="test">
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

    <h1> Well i am Corine </h1>
    <p id="Bio"></p>
    <p id="NPC"></p>
    <p id="Quest"></p>
    <p id="Quest1"></p>
    <img src="img/Npcs/Npc27.png">
    <!--
    <button type="button" onclick="Clickme(this.id)" id="Player1"> Have you seen anything strange lastly ??</button> <br>
    <button type="button" onclick="Clickme(this.id)" id="Player2"> I am in need of items can you help me??</button> <br>
    <button type="button" onclick="Clickme(this.id)" id="Player3"> Do you need help with something </button>
    <div id="AddBtn"></div>
    -->

    <div id = "dialog-2" title = "Dialouge">
        <p id="Story">Corine: So what is the problem </p>
    </div>
    <button id = "opener-2"> Hi there </button>

    <ul>
        <li><a href="SchoolClass1.php"> Go back  </a></li>
    </ul>

    <ul>
        {foreach from=$inventory key=id item=i}
            <li> {$i.player_id} {$i.item_id} {$i.space} {$i.quantity} </li>
        {/foreach}
    </ul>

    {if isset($smarty.cookies.Quest27)}
        {if $smarty.cookies.Quest27 == true}
            <script type="text/javascript">
                var NpcName = "Corine";
                document.getElementById('Quest').innerHTML = NpcName + " Well thanks a lot <br>" +
                        "if you excuse me i need to do my job";
            </script>
        {/if}
    {/if}

</div>
</body>

<script type="text/javascript" src="https://rawgit.com/CodeOtter/thusspokenpc/master/index.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="inc/bootbox.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="JS/NPC/Npc27.js"></script>
</html>