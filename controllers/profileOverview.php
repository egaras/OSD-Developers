<?php
require '../vendor/autoload.php';
require '../core/bootstrap.php';

if(!isLoggedIn()){
  header("location: home.php");
  exit;
}
$user = new User();
$user->id = $_SESSION['userId'];
$user = $user->loadById();

require '../views/profileOverview.php';
?>
