<?php
/*%%SmartyHeaderCode:1448574468566591a50df505_88011280%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '213083e8c2d1a18bd17f9c79b98397d6090087fc' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/register.tpl',
      1 => 1449437885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1448574468566591a50df505_88011280',
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
  'unifunc' => 'content_566591a51540c7_49874946',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566591a51540c7_49874946')) {
function content_566591a51540c7_49874946 ($_smarty_tpl) {
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
				<h1 id="header">Register</h1>
			</div>
			<div class="navbar" id="navtext">
				<ul>
					<li><a href="index.php" >Home</a></li>
					<li><a href="about.php" >About Us</a></li>
					<li><a href="staff.php" >Staff</a></li>
					<li><a href="games.php" >Games</a><li>
					<li><a href="contact.php" >Contact</a></li>
				</ul>
			</div>
		</div>
		<div class="content">
			<form action='' method='post'>
        <label>Username: <input type='text' name='username'> </label>
        <label>Password: <input type='password' name='password'> </label>
        <label>Name: <input type='text' name='name'> </label>
        <input type='submit' value='Register' name='register'>   
      </form>
      <a href="login.php" >Login!</a
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>