<?php
/*%%SmartyHeaderCode:18306058965665985949e082_38005125%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd5aa951fb191c4217b3a99e3e7df2fe565f3910' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/staff.tpl',
      1 => 1449424476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18306058965665985949e082_38005125',
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
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5665985957d612_06469178',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5665985957d612_06469178')) {
function content_5665985957d612_06469178 ($_smarty_tpl) {
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
				<h1 id="header">Our Staff</h1>
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
      <h3>Staff List</h3>
      <table class= "center">
        <tr>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Position</th>
        </tr>
                  <tr>
            <td>Mark</td>
            <td>White</td>
            <td>Creative Director</td>
          </tr>
                  <tr>
            <td>Dale</td>
            <td>Phillips</td>
            <td>Lead Designer</td>
          </tr>
                  <tr>
            <td>Dylan</td>
            <td>Cowling</td>
            <td>Asset Designer</td>
          </tr>
                  <tr>
            <td>Joe</td>
            <td>Smith</td>
            <td>Programmer </td>
          </tr>
                  <tr>
            <td>Tony</td>
            <td>Blue</td>
            <td>Programmer</td>
          </tr>
                  <tr>
            <td>Bruce</td>
            <td>Wayne</td>
            <td>Batman</td>
          </tr>
                  <tr>
            <td>David</td>
            <td>Lamin</td>
            <td>FPS Consultant</td>
          </tr>
                  <tr>
            <td>Ejay</td>
            <td>The Really Real</td>
            <td>Coffee Maker</td>
          </tr>
              </table>
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>