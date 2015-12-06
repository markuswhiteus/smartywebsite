<?php /* Smarty version 3.1.27, created on 2015-12-06 16:46:31
         compiled from "/home/stud/1/1428269/public_html/templates/test.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:71751310756646667f3fda3_21619655%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f44f57febab81624034ac841687f15dbc61a562' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/test.tpl',
      1 => 1449420390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71751310756646667f3fda3_21619655',
  'variables' => 
  array (
    'title' => 0,
    'header' => 0,
    'link1' => 0,
    'link2' => 0,
    'link3' => 0,
    'link4' => 0,
    'link5' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5664666803da47_16904732',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5664666803da47_16904732')) {
function content_5664666803da47_16904732 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '71751310756646667f3fda3_21619655';
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
				<div id="logo"><a href="index.html"> <img  src="./res/newlogo.png" alt="TheBurningHat"/></a></div>
				<h1 id="header"><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h1>
			</div>
			<div class="navbar" id="navtext">
				<ul>
					<li><a href="index.html" ><?php echo $_smarty_tpl->tpl_vars['link1']->value;?>
</a></li>
					<li><a href="about.html" ><?php echo $_smarty_tpl->tpl_vars['link2']->value;?>
</a></li>
					<li><a href="staff.php" ><?php echo $_smarty_tpl->tpl_vars['link3']->value;?>
</a></li>
					<li><a href="games.html" ><?php echo $_smarty_tpl->tpl_vars['link4']->value;?>
</a><li>
					<li><a href="contact.html" ><?php echo $_smarty_tpl->tpl_vars['link5']->value;?>
</a></li>
				</ul>
			</div>
		</div>
		<div class="content">
			<p><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>