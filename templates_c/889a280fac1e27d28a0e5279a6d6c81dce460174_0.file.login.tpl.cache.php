<?php /* Smarty version 3.1.27, created on 2015-12-06 20:52:05
         compiled from "/home/stud/1/1428269/public_html/templates/login.tpl" */ ?>
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
  'unifunc' => 'content_56649ff555c9c4_08744344',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56649ff555c9c4_08744344')) {
function content_56649ff555c9c4_08744344 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '213426550356649ff5511584_24758737';
?>
<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
	   <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	   <link rel="stylesheet" type="text/css" href="cheese.css"/>
    </head>
    <body>
        <div class="hbg">
			<div class="hbg2">
				<div id="logo"><a href="index.php"> <img  src="./res/newlogo.png" alt="TheBurningHat"/></a></div>
				<h1 id="header"><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h1>
			</div>
			<div class="navbar" id="navtext">
				<ul>
					<li><a href="index.php" ><?php echo $_smarty_tpl->tpl_vars['link1']->value;?>
</a></li>
					<li><a href="about.php" ><?php echo $_smarty_tpl->tpl_vars['link2']->value;?>
</a></li>
					<li><a href="staff.php" ><?php echo $_smarty_tpl->tpl_vars['link3']->value;?>
</a></li>
					<li><a href="games.php" ><?php echo $_smarty_tpl->tpl_vars['link4']->value;?>
</a><li>
					<li><a href="contact.php" ><?php echo $_smarty_tpl->tpl_vars['link5']->value;?>
</a></li>
				</ul>
			</div>
		</div>
		<div class="content">
      <h3><?php echo $_smarty_tpl->tpl_vars['header2']->value;?>
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