<?php
require ('./smartyHeader.php');

session_start();
if (isset($_SESSION["loggedin"]) == true){
  $link5 = 'Logout';
  $username = isset($_Session["username"]);
  $header2 = 'Welcome ' . $username;
}
else{
  $link5 = 'Login';
  $header2 = 'Welcome';
}
  

$title = 'TheBurningHat ';
$header = 'TheBurningHat';
$link1 = 'Home';
$link2 = 'About Us';
$link3 = 'Staff';
$link4 = 'Games';
$link6 = 'Logout';

$content ="Welcome to the home page of TheBurningHat, We are a small indie game development company. Don't forget to check the site often for all the latest news and updates from our latest projects!";


$smarty->assign('title',$title);
$smarty->assign('header',$header);
$smarty->assign('link1',$link1);
$smarty->assign('link2',$link2);
$smarty->assign('link3',$link3);
$smarty->assign('link4',$link4);
$smarty->assign('link5',$link5);
$smarty->assign('header2',$header2);
$smarty->assign('content',$content);


$smarty->display('main.tpl');
?>