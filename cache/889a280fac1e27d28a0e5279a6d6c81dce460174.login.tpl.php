<?php
/*%%SmartyHeaderCode:213426550356649ff5511584_24758737%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '889a280fac1e27d28a0e5279a6d6c81dce460174' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/login.tpl',
      1 => 1449431025,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213426550356649ff5511584_24758737',
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
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56649ff5580210_47875293',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56649ff5580210_47875293')) {
function content_56649ff5580210_47875293 ($_smarty_tpl) {
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
				<h1 id="header">Login</h1>
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
      <h3>
Notice: Undefined index: header2 in /home/stud/1/1428269/public_html/templates_c/889a280fac1e27d28a0e5279a6d6c81dce460174_0.file.login.tpl.cache.php on line 69

Notice: Trying to get property of non-object in /home/stud/1/1428269/public_html/templates_c/889a280fac1e27d28a0e5279a6d6c81dce460174_0.file.login.tpl.cache.php on line 69
</h3>
			<form action='' method='post'>
        <table>
          <tr>
            <td>
              <b>Username:<b>
            </td>
            <td>
              <input type='text' name='username'>
            </td>
          </tr>
          <tr>
            <td>
              <b>Password:</b>
            </td>
            <td>
            <td>
              <input type='password' name='password'>
            </td>
          </tr>
          <tr>
            <td>
              <input type='submit' value='Login' name='login'>
            </td>
          </tr>            
        </table>
      </form>
      <a href="register.php" >Register!</a
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>