<?php
/*%%SmartyHeaderCode:6254419905665c79707fc20_29370311%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14b8b8059818adfed434843590c355a0176cecc3' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/games.tpl',
      1 => 1449509924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6254419905665c79707fc20_29370311',
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
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5665c79710eca1_17864937',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5665c79710eca1_17864937')) {
function content_5665c79710eca1_17864937 ($_smarty_tpl) {
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
				<h1 id="header">Our Games</h1>
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
      <img src="./res/Title.png" id="gamelogo" alt="OmnipotenceLogo"/>
			<p>Ever wanted to play god? In our latest project you will be able to do just that, being in charge of your own village. Advance them through the ages bring justice to their enemies!<br> Will you be a loving god and shower your followers in good fortune or lead with fear bringing plague and famine to all that wrong you!</p> <h3>You decide!</p>
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>