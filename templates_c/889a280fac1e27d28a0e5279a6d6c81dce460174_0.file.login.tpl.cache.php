<?php /* Smarty version 3.1.27, created on 2015-12-11 02:37:38
         compiled from "/home/stud/1/1428269/public_html/templates/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1210488720566a36f2d0f267_64392896%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '889a280fac1e27d28a0e5279a6d6c81dce460174' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/login.tpl',
      1 => 1449509775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1210488720566a36f2d0f267_64392896',
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
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566a36f2d4a459_12600245',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566a36f2d4a459_12600245')) {
function content_566a36f2d4a459_12600245 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1210488720566a36f2d0f267_64392896';
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
			<form action='' method='post'>
              <label><span>Username:</span> <input type='text' name='username'></label>
              <label>Password: <input type='password' name='password'></label>
              <input type='submit' value='Login' name='login'>
      </form>
      <a href="register.php" >Register!</a
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>