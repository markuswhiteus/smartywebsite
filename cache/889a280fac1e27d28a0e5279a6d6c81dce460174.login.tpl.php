<?php
/*%%SmartyHeaderCode:427596368566592477707e8_77499473%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '889a280fac1e27d28a0e5279a6d6c81dce460174' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/login.tpl',
      1 => 1449438468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '427596368566592477707e8_77499473',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'header' => 0,
    'link1' => 0,
    'link2' => 0,
    'link3' => 0,
    'link4' => 0,
    'link5' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566592477c97b3_53514811',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566592477c97b3_53514811')) {
function content_566592477c97b3_53514811 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
	   <title>TheBurningHat</title>
	   <link rel="stylesheet" type="text/css" href="cheese.css"/>
    </head>
    <body>
        <div class="hbg">
			<div class="hbg2">
				<div id="logo"><a href="index.php"> <img  src="./res/newlogo.png" alt="TheBurningHat"/></a></div>
				<h1 id="header">Login</h1>
			</div>
			<div class="navbar" id="navtext">
				<ul>
					<li><a href="index.php" >Home</a></li>
					<li><a href="about.php" >About Us</a></li>
					<li><a href="staff.php" >Staff</a></li>
					<li><a href="games.php" >Games</a><li>
					<li><a href="contact.php" >Login</a></li>
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