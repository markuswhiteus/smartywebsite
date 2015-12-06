<?php
require ('./smartyHeader.php');

$title = 'TheBurningHat';
$header = 'About Us';
$link1 = 'Home';
$link2 = 'About Us';
$link3 = 'Staff';
$link4 = 'Games';
$link5 = 'Contact';
$header2 = 'The Burning Hat';
$content ='A small indie company based in Nottingham, UK. We were founded in 2013 by Dale Phillips and Mark White soon after brining in a third member Dylan Cowling. All three were brought together by a shared love of video games and with the hopes of bringing more games to those who enjoy them.';


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