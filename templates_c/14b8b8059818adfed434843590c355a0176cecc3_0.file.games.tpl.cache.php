<?php /* Smarty version 3.1.27, created on 2015-12-07 22:47:39
         compiled from "/home/stud/1/1428269/public_html/templates/games.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:109820089956660c8baf9d42_97677969%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14b8b8059818adfed434843590c355a0176cecc3' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/games.tpl',
      1 => 1449509924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109820089956660c8baf9d42_97677969',
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
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56660c8bb3acc1_32982221',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56660c8bb3acc1_32982221')) {
function content_56660c8bb3acc1_32982221 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '109820089956660c8baf9d42_97677969';
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
      <img src="./res/Title.png" id="gamelogo" alt="OmnipotenceLogo"/>
			<p><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>