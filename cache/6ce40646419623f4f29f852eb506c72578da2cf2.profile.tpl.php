<?php
/*%%SmartyHeaderCode:15931919045665ae930fdf94_35743907%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ce40646419623f4f29f852eb506c72578da2cf2' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/profile.tpl',
      1 => 1449504401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15931919045665ae930fdf94_35743907',
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
    'username' => 0,
    'ID' => 0,
    'Fullname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5665ae931f7c42_23131803',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5665ae931f7c42_23131803')) {
function content_5665ae931f7c42_23131803 ($_smarty_tpl) {
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
      <h3>Welcome Admin</h3>
      <table class="center">
        <tr>
          <th colspan="3">Your Details</th>
        </tr>
        <tr>
          <th>Username</th>
          <th>User Id</th>
          <th>Fullname</th>
        </tr>
          <tr>
            <td>Admin</td>
            <td>2</td>
            <td>Mark White</td>
          </tr>
      </table>
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>