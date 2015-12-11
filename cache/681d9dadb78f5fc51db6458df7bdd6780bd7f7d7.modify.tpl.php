<?php
/*%%SmartyHeaderCode:138334409456698f534043d5_56853087%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '681d9dadb78f5fc51db6458df7bdd6780bd7f7d7' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/modify.tpl',
      1 => 1449506958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138334409456698f534043d5_56853087',
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
    'url' => 0,
    'link5' => 0,
    'header2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56698f53464b51_58443852',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56698f53464b51_58443852')) {
function content_56698f53464b51_58443852 ($_smarty_tpl) {
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
					<li><a href="profile.php" >My Profile</a></li>
				</ul>
			</div>
		</div>
		<div class="content">
      <h3>Change Username</h3>
			<form action='' method='post'>
              <label><span>New Username:</span> <input type='text' name='newusername'></label>
              <input type='submit' value='Change Username' name='changename'>
      </form>
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>