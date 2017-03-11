<?php
require '../vendor/autoload.php';
require '../core/bootstrap.php';

if(!isLoggedIn()){
  header("location: home.php");
  exit;
}
$user = new User();
$user->id = $_SESSION['userid'];
$user = $user->loadById();

require '../views/profile.php';
?>
