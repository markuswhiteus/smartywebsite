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
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5664666805d971_31417634',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5664666805d971_31417634')) {
function content_5664666805d971_31417634 ($_smarty_tpl) {
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
				<div id="logo"><a href="index.html"> <img  src="./res/newlogo.png" alt="TheBurningHat"/></a></div>
				<h1 id="header">About Us</h1>
			</div>
			<div class="navbar" id="navtext">
				<ul>
					<li><a href="index.html" >Home</a></li>
					<li><a href="about.html" >About Us</a></li>
					<li><a href="staff.php" >Staff</a></li>
					<li><a href="games.html" >Games</a><li>
					<li><a href="contact.html" >Contact</a></li>
				</ul>
			</div>
		</div>
		<div class="content">
			<p>A small indie company based in Nottingham, UK. We were founded in 2013 by Dale Phillips and Mark White soon after brining in a third member Dylan Cowling. All three were brought together by a shared love of video game</p>
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>