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
    'header2' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566467f303c496_21070717',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566467f303c496_21070717')) {
function content_566467f303c496_21070717 ($_smarty_tpl) {
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
					<li><a href="index.php" >Home</a></li>
					<li><a href="about.php" >About Us</a></li>
					<li><a href="staff.php" >Staff</a></li>
					<li><a href="games.php" >Games</a><li>
					<li><a href="contact.php" >Contact</a></li>
				</ul>
			</div>
		</div>
		<div class="content">
      <h3>The Burning Hat</h3>
			<p>A small indie company based in Nottingham, UK. We were founded in 2013 by Dale Phillips and Mark White soon after brining in a third member Dylan Cowling. All three were brought together by a shared love of video games and with the hopes of bringing more games to those who enjoy them.</p>
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>