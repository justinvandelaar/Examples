<!DOCTYPE HTML>
<html>
<head>
    <title> {$pagetitle} </title>
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

    <h1> My name is John </h1>
    <p id="Bio"></p>
    <p id="NPC"></p>
    <p id="Quest"></p>
    <button type="button" onclick="Clickme(this.id)" id="Player1"> Have you seen anything strange lastly ??</button> <br>
    <button type="button" onclick="Clickme(this.id)" id="Player2"> I am in need of items can you help me??</button> <br>
    <button type="button" onclick="Clickme(this.id)" id="Player3"> Do you need help with something </button>
    <div id="AddBtn"></div>
    <ul>
        <li><a href="Street.php"> Go back </a></li>
    </ul>

    {if $smarty.cookies.Quest1 == true}
        <script type="text/javascript">
            var NpcName = "John";
            document.getElementById('Quest').innerHTML = NpcName + ": Here is a power swicht <br>" +
                    "Use it to start the carrier <br>" +
                    "There is a navy base not far away go to it maby you can find something there <br>" +
                    "I hope you scusseed greetings " + NpcName;
        </script>
        {else}
        <script type="text/javascript">
            var NpcName = "John";
            document.getElementById('Quest').innerHTML = NpcName + ": Go look for the items dumbass"
            alert("You stared the quest Healing");
        </script>
    {/if}
    <ul>
        {foreach from=$inventory key=id item=i}
            <li> {$i.player_id} {$i.item_id} {$i.space} {$i.quantity} </li>
        {/foreach}
    </ul>

</div>
</body>

<script type="text/javascript" src="https://rawgit.com/CodeOtter/thusspokenpc/master/index.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="inc/bootbox.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="inc/Npc1.js"></script>


<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script type="text/javascript" src="inc/Test.js"></script> -->
</html>