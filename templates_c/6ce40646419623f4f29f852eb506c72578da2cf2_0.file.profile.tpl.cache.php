<?php /* Smarty version 3.1.27, created on 2015-12-11 02:37:28
         compiled from "/home/stud/1/1428269/public_html/templates/profile.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2142500783566a36e84fde24_65434999%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ce40646419623f4f29f852eb506c72578da2cf2' => 
    array (
      0 => '/home/stud/1/1428269/public_html/templates/profile.tpl',
      1 => 1449510916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2142500783566a36e84fde24_65434999',
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
  'unifunc' => 'content_566a36e853e755_24645747',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566a36e853e755_24645747')) {
function content_566a36e853e755_24645747 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2142500783566a36e84fde24_65434999';
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
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['link5']->value;?>
</a></li>
				</ul>
			</div>
		</div>
		<div class="content">
      <h3><?php echo $_smarty_tpl->tpl_vars['header2']->value;?>
</h3>
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
            <td><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['Fullname']->value;?>
</td>
          </tr>
      </table>
      <ul id="profile">
        <a href="login.php">Logout</a>
        <a href="modify.php">Change Username</a>
        <a href="delete.php">Delete Account</a>
        <a href="search.php">Search Users</a>
       </ul>
		</div>
		<div id="bottombar" > </div>
    </body>
</html><?php }
}
?>