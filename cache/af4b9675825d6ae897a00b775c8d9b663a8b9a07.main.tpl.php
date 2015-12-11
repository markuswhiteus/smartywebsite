<?php
/*%%SmartyHeaderCode:1067713895566a36f30985d3_20561335%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af4b9675825d6ae897a00b775c8d9b663a8b9a07' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/main.tpl',
      1 => 1449801364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1067713895566a36f30985d3_20561335',
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
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566a36f30faca9_47669950',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566a36f30faca9_47669950')) {
function content_566a36f30faca9_47669950 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
	   <title>TheBurningHat </title>
	   <link rel="stylesheet" type="text/css" href="cheese.css"/>
    </head>
    <body>
        <div class="hbg">
			<div class="hbg2">
				<div id="logo"><a href="index.php"> <img  src="./res/newlogo.png" alt="TheBurningHat"/></a></div>
				<h1 id="header">TheBurningHat</h1>
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
      <h3>Welcome Markus</h3>
			<p>Welcome to the home page of TheBurningHat, We are a small indie game development company. Don't forget to check the site often for all the latest news and updates from our latest projects!</p>
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>