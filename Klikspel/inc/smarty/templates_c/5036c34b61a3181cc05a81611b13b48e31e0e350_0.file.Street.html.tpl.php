<?php
/* Smarty version 3.1.29, created on 2017-01-12 14:36:07
  from "C:\wamp64\www\Examplecode\Klikspel\tpl\Street.html.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5877864789a908_28206643',
  'file_dependency' => 
  array (
    '5036c34b61a3181cc05a81611b13b48e31e0e350' => 
    array (
      0 => 'C:\\wamp64\\www\\Examplecode\\Klikspel\\tpl\\Street.html.tpl',
      1 => 1484228164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5877864789a908_28206643 ($_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
    <title> <?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 </title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="css/timeTo.css" type="text/css" rel="stylesheet"/>
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
    </ul>

    <div id="counter-1"></div>
    <h1> The city </h1>
    <p> And there you`re standing on the middle of the street. <br>
        You look down to the right and see nothing. To the left you see almost a bridge.<br>
        And futher on you see the garage and a store.<br> Which way wil you go.. <br>
    you see someone standing and think should i talk to him</p>
    <img src="img/street.png">
    <ul>
        <li><a href="Outside.php"> Go back to look for something </a></li>
        <li><a href="Deadend.php"> To The right </a></li>
        <li><a href="Nbridge.php"> TO the left towards the bridge </a></li>
        <li><a href="AgianStreet.php"> Go on ....</a></li>
        <?php if (isset($_SESSION['PageNpc'])) {?>
        <?php if ($_SESSION['PageNpc'] >= 1) {?>
            <li><a href="#"> You have compleeted the quest and john is gone</a> </li>
            <?php } else { ?>
        <li><a href="NPC1.php"> Go talk to John </a></li>
        <?php }?>
        <?php } else { ?>
            <li><a href="NPC1.php"> Go talk to John </a></li>
        <?php }?>
    </ul>
    <ul>
        <?php
$_from = $_smarty_tpl->tpl_vars['inventory']->value;
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
            <li> <?php echo $_smarty_tpl->tpl_vars['i']->value['player_id'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['item_id'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['space'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['quantity'];?>
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

</div>
</body>

<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>window.jQuery || document.write('<?php echo '<script'; ?>
 src="JS/jquery.min.js"><\/script>')<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="JS/jquery.time-to.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
        $('#counter-1').timeTo(new Date('Sun Mar 26 2017 09:00:00 GMT+0100 (West-Europa (standaardtijd))'));
<?php echo '</script'; ?>
>
</html><?php }
}
