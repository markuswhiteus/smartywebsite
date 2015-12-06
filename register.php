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


if ($_POST['register']) {
  if ($_POST['username'] && $_POST['password']){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, hash("sha512", $_POST['password']));
    $name = '';
    if ($_POST['name']){
      $name = mysqli_real_escape_string($conn, stripslashes($_POST['name']));
    }
    $query = $conn->query("SELECT * FROM users WHERE Username = '{$username}'");
    $check = $query->fetch_assoc();
    if ($check != 0){
      die("That username already exists! Try another!");
    }
    if (!ctype_alnum($username)) {
      die("Username contains special characters only letters and numbers are allowed!");
    }
    if (strlen($username) > 20){
    die("Username must not contain more than 20 chatacters");
    }
    $salt = hash("sha512", rand() . rand() . rand());
    $conn->query("INSERT INTO `users` (Username, Password, Fullname, Salt) VALUES ('{$username}', '{$password}', '{$name}', '{$salt}')") or die(mysqli_error($conn));
    setcookie("c_user", hash("sha512", $username), time() + 24 * 60 * 60, "/");
    setcookie("c_salt", $salt, time() + 24 * 60 * 60, "/");
    die($username. $password. $name. $salt); 
    
  }
}


$smarty->display('register.tpl');
?>