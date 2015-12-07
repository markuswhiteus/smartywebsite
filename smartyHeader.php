<?php
require_once ('./smarty/libs/Smarty.class.php');

$smarty = new Smarty;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$smarty->template_dir = './templates';
$smarty->compile_dir = './templates_c';
$smarty->force_compile = true;

session_start();
function loggedin(){
  if (isset($_SESSION["loggedin"]) == true){
    $link5 = 'My Profile';
    $url = 'profile.php';
    $username = $_SESSION["username"];
    
  }
  else{
    $link5 = 'Login';
    $url = 'login.php';
    $header2 = 'Welcome';
    $username = '';
  }
}
?>