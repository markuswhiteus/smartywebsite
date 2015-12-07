<?php
require ('./smartyHeader.php');
include 'connect.php';

if (isset($_SESSION["loggedin"]) == true){
  $link5 = 'My Profile';
  $url = 'profile.php';
  $username = $_SESSION["username"];
  $header2 = 'Welcome ' . $username;
}
else{
  $link5 = 'Login';
  $url = 'login.php';
  header("Location:login.php");
}


$sql = "SELECT Username, ID, Fullname FROM users WHERE Username = '{$username}'";
$result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      $ID = $row['ID'];
      $fullname = $row['Fullname'];}
    $conn->close();  

$title = 'TheBurningHat ';
$header = 'TheBurningHat';
$link1 = 'Home';
$link2 = 'About Us';
$link3 = 'Staff';
$link4 = 'Games';



$smarty->assign('title',$title);
$smarty->assign('header',$header);
$smarty->assign('link1',$link1);
$smarty->assign('link2',$link2);
$smarty->assign('link3',$link3);
$smarty->assign('link4',$link4);
$smarty->assign('link5',$link5);
$smarty->assign('header2',$header2);
$smarty->assign('url',$url);
$smarty->assign('username',$username);
$smarty->assign('ID',$ID);
$smarty->assign('Fullname',$fullname);





$smarty->display('profile.tpl');
?>





