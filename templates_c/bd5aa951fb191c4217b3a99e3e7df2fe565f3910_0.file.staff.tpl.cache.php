<?php /* Smarty version 3.1.27, created on 2015-12-08 16:35:25
         compiled from "/home/stud/1/1428269/public_html/templates/staff.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:470544031566706cd72c1d8_16644136%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd5aa951fb191c4217b3a99e3e7df2fe565f3910' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/staff.tpl',
      1 => 1449510185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '470544031566706cd72c1d8_16644136',
  'variables' => 
  array (
    'title' => 0,
    'header' => 0,
    'link1' => 0,
    'link2' => 0,
    'link3' => 0,
    'link4' => 0,
    'url' => 0,
    'link5' => 0,
    'header2' => 0,
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566706cd793c47_01871428',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566706cd793c47_01871428')) {
function content_566706cd793c47_01871428 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '470544031566706cd72c1d8_16644136';
?>
<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
	   <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	   <link rel="stylesheet" type="text/css" href="cheese.css"/>
    </head>
    <body>
        <div class="hbg">
			<div class="hbg2">
				<div id="logo"><a href="index.php"> <img  src="./res/newlogo.png" alt="TheBurningHat"/></a></div>
				<h1 id="header"><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h1>
			</div>
			<div class="navbar" id="navtext">
				<ul>
					<li><a href="index.php" ><?php echo $_smarty_tpl->tpl_vars['link1']->value;?>
</a></li>
					<li><a href="about.php" ><?php echo $_smarty_tpl->tpl_vars['link2']->value;?>
</a></li>
					<li><a href="staff.php" ><?php echo $_smarty_tpl->tpl_vars['link3']->value;?>
</a></li>
					<li><a href="games.php" ><?php echo $_smarty_tpl->tpl_vars['link4']->value;?>
</a><li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['link5']->value;?>
</a></li>
				</ul>
			</div>
		</div>
		<div class="content">
      <h3><?php echo $_smarty_tpl->tpl_vars['header2']->value;?>
</h3>
      <table class= "center">
        <tr>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Position</th>
        </tr>
        <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['Forename'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['Surname'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['Position'];?>
</td>
          </tr>
        <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
      </table>
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>