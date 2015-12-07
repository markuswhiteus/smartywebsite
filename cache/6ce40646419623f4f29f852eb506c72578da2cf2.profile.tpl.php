<?php
/*%%SmartyHeaderCode:5254146185665a60b0ac938_12446394%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ce40646419623f4f29f852eb506c72578da2cf2' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/profile.tpl',
      1 => 1449500628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5254146185665a60b0ac938_12446394',
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
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5665a60b1369d5_44411378',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5665a60b1369d5_44411378')) {
function content_5665a60b1369d5_44411378 ($_smarty_tpl) {
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
      <table>
        <tr>
          <th>Your Details</th>
        </tr>
        <tr>
          <th>Username</th>
          <th>User Id</th>
          <th>Fullname</th>
        </tr>
        
Notice: Undefined index: data in /home/stud/1/1428269/public_html/templates_c/6ce40646419623f4f29f852eb506c72578da2cf2_0.file.profile.tpl.cache.php on line 85

Notice: Trying to get property of non-object in /home/stud/1/1428269/public_html/templates_c/6ce40646419623f4f29f852eb506c72578da2cf2_0.file.profile.tpl.cache.php on line 85
      </table>
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>