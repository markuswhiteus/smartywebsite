<?php
require ('./smartyHeader.php');

$title = 'TheBurningHat';
$header = 'Our Games';
$link1 = 'Home';
$link2 = 'About Us';
$link3 = 'Staff';
$link4 = 'Games';
$link5 = 'Contact';
$content ="Ever wanted to play god? In our latest project you will be able to do just that, being in charge of your own village. Advance them through the ages bring justice to their enemies!<br> Will you be a loving god and shower your followers in good fortune or lead with fear bringing plague and famine to all that wrong you!</p> <h3>You decide!";


$smarty->assign('title',$title);
$smarty->assign('header',$header);
$smarty->assign('link1',$link1);
$smarty->assign('link2',$link2);
$smarty->assign('link3',$link3);
$smarty->assign('link4',$link4);
$smarty->assign('link5',$link5);
$smarty->assign('content',$content);


$smarty->display('games.tpl');
?>