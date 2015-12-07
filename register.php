<?php
require ('./smartyHeader.php');
include 'connect.php';

if (isset($_SESSION["loggedin"]) == true){
    header("Location: index.php");
    
  }

$title = 'TheBurningHat';
$header = 'Register';
$link1 = 'Home';
$link2 = 'About Us';
$link3 = 'Staff';
$link4 = 'Games';
$link5 = 'Login';
$url = 'login.php';


$smarty->assign('title',$title);
$smarty->assign('header',$header);
$smarty->assign('link1',$link1);
$smarty->assign('link2',$link2);
$smarty->assign('link3',$link3);
$smarty->assign('link4',$link4);
$smarty->assign('link5',$link5);
$smarty->assign('url',$url);


if (isset($_POST['register'])) {
  if (isset($_POST['username']) && isset($_POST['password'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, hash("sha512", $_POST['password']));
    $name = '';
    if (isset($_POST['name'])){
      $name = mysqli_real_escape_string($conn, stripslashes($_POST['name']));
    }
    $query = $conn->query("SELECT * FROM users WHERE Username = '{$username}'");
    $check = $query->fetch_assoc();
    if ($check != 0){
      die("That username already exists! Try another!   <a href='register.php'>Back</a>");
    }
    if (!ctype_alnum($username)) {
      die("Username contains special characters only letters and numbers are allowed!   <a href='register.php'>Back</a>");
    }
    if (strlen($username) > 20){
    die("Username must not contain more than 20 chatacters   <a href='register.php'>Back</a>");
    }
    $salt = hash("sha512", rand() . rand() . rand());
    $conn->query("INSERT INTO `users` (Username, Password, Fullname, Salt) VALUES ('{$username}', '{$password}', '{$name}', '{$salt}')");
    setcookie("c_user", hash("sha512", $username), time() + 24 * 60 * 60, "/");
    setcookie("c_salt", $salt, time() + 24 * 60 * 60, "/");
    die("Account Created!   <a href='login.php'>Login!</a>"); 
    
  }
}


$smarty->display('register.tpl');
?>