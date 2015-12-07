<?php
/*%%SmartyHeaderCode:14364752045665ca08647b16_02520823%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '091f44184b97f8be67a978b568438503cedf52b6' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/delete.tpl',
      1 => 1449507728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14364752045665ca08647b16_02520823',
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
  'unifunc' => 'content_5665ca086a3882_57368607',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5665ca086a3882_57368607')) {
function content_5665ca086a3882_57368607 ($_smarty_tpl) {
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
      <h3>Delete Account</h3>
			<form action='' method='post'>
              <input type='submit' value='Delete Account' name='delete'>
      </form>
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>