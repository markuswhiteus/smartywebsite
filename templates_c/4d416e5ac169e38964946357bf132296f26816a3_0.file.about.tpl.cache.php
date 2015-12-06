<?php /* Smarty version 3.1.27, created on 2015-12-06 16:53:06
         compiled from "/home/stud/1/1428269/public_html/templates/about.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:101571854566467f2f0ffa0_33887816%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d416e5ac169e38964946357bf132296f26816a3' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/about.tpl',
      1 => 1449420780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101571854566467f2f0ffa0_33887816',
  'variables' => 
  array (
    'title' => 0,
    'header' => 0,
    'link1' => 0,
    'link2' => 0,
    'link3' => 0,
    'link4' => 0,
    'link5' => 0,
    'header2' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566467f300a8a5_58743804',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566467f300a8a5_58743804')) {
function content_566467f300a8a5_58743804 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '101571854566467f2f0ffa0_33887816';
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
					<li><a href="index.php" ><?php echo $_smarty_tpl->tpl_vars['link1']->value;?>
</a></li>
					<li><a href="about.php" ><?php echo $_smarty_tpl->tpl_vars['link2']->value;?>
</a></li>
					<li><a href="staff.php" ><?php echo $_smarty_tpl->tpl_vars['link3']->value;?>
</a></li>
					<li><a href="games.php" ><?php echo $_smarty_tpl->tpl_vars['link4']->value;?>
</a><li>
					<li><a href="contact.php" ><?php echo $_smarty_tpl->tpl_vars['link5']->value;?>
</a></li>
				</ul>
			</div>
		</div>
		<div class="content">
      <h3><?php echo $_smarty_tpl->tpl_vars['header2']->value;?>
</h3>
			<p><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>