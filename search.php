<?php
require ('./smartyHeader.php');
include 'connect.php';

$data = null;
$nouser = null;
$th1 = null;
$th2 = null;
$th3 = null;
$title = 'TheBurningHat';
$header = 'Search Users';
$link1 = 'Home';
$link2 = 'About Us';
$link3 = 'Staff';
$link4 = 'Games';


if (isset($_SESSION["loggedin"]) == true){
    $link5 = 'My Profile';
    $url = 'profile.php';
    
  }
  else{
    $link5 = 'Login';
    $url = 'login.php';
  }
  
if (isset($_POST['search'])) {
  if (isset($_POST['searchusername'])){
  
    $searchuser = mysqli_real_escape_string($conn, $_POST['searchusername']);
    $query ="SELECT * FROM users WHERE Username= '$searchuser'";
    $result = $conn->query($query);
    
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $data [] = $row; }
    $th1 = 'Username';
    $th2 = 'User ID';
    $th3 = 'Fullname';
      }
  else{
  $nouser="No user found!";
  }
    $conn->close();
    }
}


$smarty->assign('title',$title);
$smarty->assign('header',$header);
$smarty->assign('link1',$link1);
$smarty->assign('link2',$link2);
$smarty->assign('link3',$link3);
$smarty->assign('link4',$link4);
$smarty->assign('link5',$link5);
$smarty->assign('url',$url);
$smarty->assign('data',$data);
$smarty->assign('nouser',$nouser);
$smarty->assign('th1',$th1);
$smarty->assign('th2',$th2);
$smarty->assign('th3',$th3);


$smarty->display('search.tpl');
?>