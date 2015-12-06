<?php
require ('./smartyHeader.php');
include 'connect.php';

$title = 'TheBurningHat';
$header = 'Our Staff';
$link1 = 'Home';
$link2 = 'About Us';
$link3 = 'Staff';
$link4 = 'Games';
$link5 = 'Contact';
$header2 = 'Staff List';


$sql = "SELECT Forename, Surname, Position FROM Staff";
$result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $data [] = $row; }
      }
    $conn->close();


$smarty->assign('title',$title);
$smarty->assign('header',$header);
$smarty->assign('link1',$link1);
$smarty->assign('link2',$link2);
$smarty->assign('link3',$link3);
$smarty->assign('link4',$link4);
$smarty->assign('link5',$link5);
$smarty->assign('header2',$header2);
$smarty->assign('data',$data);


$smarty->display('staff.tpl');
?>