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
}

$title = 'TheBurningHat';
$header = 'Register';
$link1 = 'Home';
$link2 = 'About Us';
$link3 = 'Staff';
$link4 = 'Games';
$link5 = 'Contact';
$header2 = 'Change Username';


$smarty->assign('title',$title);
$smarty->assign('header',$header);
$smarty->assign('link1',$link1);
$smarty->assign('link2',$link2);
$smarty->assign('link3',$link3);
$smarty->assign('link4',$link4);
$smarty->assign('link5',$link5);
$smarty->assign('header2',$header2);


if (isset($_POST['changename'])) {
  if (isset($_POST['newusername'])){
    $newusername = mysqli_real_escape_string($conn, $_POST['newusername']);
    }
    $query = $conn->query("SELECT * FROM users WHERE Username = '{$newusername}'");
    $check = $query->fetch_assoc();
    if ($check != 0){
      die("That username already exists! Try another!");
    }
    if (!ctype_alnum($newusername)) {
      die("Username contains special characters only letters and numbers are allowed!");
    }
    if (strlen($newusername) > 20){
    die("Username must not contain more than 20 chatacters");
    }
    $conn->query("UPDATE `users` SET `Username`='{$newusername}' WHERE `ID`='{$UID}'");
    die("You may now log in with your new username"); 
    
  }


$smarty->display('modify.tpl');
?>