<?php
/*%%SmartyHeaderCode:1002376625566a2a754d5683_19344316%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e81070950b0831f9e51f3fd20e97032ab4e6fc2' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/search.tpl',
      1 => 1449606271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1002376625566a2a754d5683_19344316',
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
    'nouser' => 0,
    'th1' => 0,
    'th2' => 0,
    'th3' => 0,
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566a2a75599f67_14023294',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566a2a75599f67_14023294')) {
function content_566a2a75599f67_14023294 ($_smarty_tpl) {
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
				<h1 id="header">Search Users</h1>
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
			<form action='' method='post'>
              <label><span>Username:</span> <input type='text' name='searchusername'></label>
              <input type='submit' value='Search' name='search'>              
      </form>
      <p></p>
      <table class= "center">
        <tr>
          <th>Username</th>
          <th>User ID</th>
          <th>Fullname</th>
        </tr> 
                  <tr>
            <td>Markus</td>
            <td>9</td>
            <td>123</td>
          </tr>
                  <tr>
            <td>Mark12</td>
            <td>11</td>
            <td>Mark White</td>
          </tr>
              </table>
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>