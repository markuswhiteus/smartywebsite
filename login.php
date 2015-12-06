<?php
require ('./smartyHeader.php');
include 'connect.php';

$title = 'TheBurningHat';
$header = 'Login';
$link1 = 'Home';
$link2 = 'About Us';
$link3 = 'Staff';
$link4 = 'Games';
$link5 = 'Contact';


$smarty->assign('title',$title);
$smarty->assign('header',$header);
$smarty->assign('link1',$link1);
$smarty->assign('link2',$link2);
$smarty->assign('link3',$link3);
$smarty->assign('link4',$link4);
$smarty->assign('link5',$link5);


if (isset($_POST['login'])) {
  if (isset($_POST['username']) && isset($_POST['password'])){
  
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, hash("sha512",$_POST['password']));
    $query = $conn->query("SELECT * FROM users WHERE Username = '{$username}'") or die(mysqli_error($conn));
    $user = $query->fetch_assoc();
    if ($user == 0){
      die("That user does not exisit.");
      }
    if ($user['Password'] != $password){
      die("Incorrect password!") ;
      }
    $salt = hash("sha512", rand() . rand(). rand()); 
    setcookie("c_user", hash("sha512", $username), time() + 24 * 60 * 60, "/");
    setcookie("c_salt", $salt, time() + 24 * 60 * 60, "/");
    $userID = $user['ID'];
    $conn->query("UPDATE `users` SET `Salt`='{$salt}' WHERE `ID`='{$userID}'");
    die("You are now logged in as $username!");
    }
  }

$smarty->display('login.tpl');
?>