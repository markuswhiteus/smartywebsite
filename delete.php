<?php
require ('./smartyHeader.php');
include 'connect.php';

if (isset($_SESSION["loggedin"]) == true){
    $link5 = 'My Profile';
    $url = 'profile.php';
    $username = $_SESSION["username"];
    $UID = $_SESSION["UID"];
    
  }
  else{
    $link5 = 'Login';
    $url = 'login.php';
    $username = '';
    $UID = '' ;
    header("Location:login.php");
}

$title = 'TheBurningHat';
$header = 'Register';
$link1 = 'Home';
$link2 = 'About Us';
$link3 = 'Staff';
$link4 = 'Games';
$header2 = 'Delete Account';


$smarty->assign('title',$title);
$smarty->assign('header',$header);
$smarty->assign('link1',$link1);
$smarty->assign('link2',$link2);
$smarty->assign('link3',$link3);
$smarty->assign('link4',$link4);
$smarty->assign('link5',$link5);
$smarty->assign('url',$url);
$smarty->assign('header2',$header2);


if (isset($_POST['delete'])) {
    $conn->query("DELETE FROM `users` WHERE `ID`='{$UID}'");
    session_destroy();
    die("Account Deleted   <a href='index.php'>Home</a>");    
  }


$smarty->display('delete.tpl');
?>