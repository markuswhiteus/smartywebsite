<?php
require ('./smartyHeader.php');

$title = 'TheBurningHat';
$header = 'TheBurningHat';
$link1 = 'Home';
$link2 = 'About Us';
$link3 = 'Staff';
$link4 = 'Games';
$link5 = 'Contact';
$header2 = 'Welcome';
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