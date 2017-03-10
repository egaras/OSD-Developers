<?php
/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/7/17
 * Time: 3:56 PM
 */
require '../vendor/autoload.php';
require '../core/bootstrap.php';

if(!isLoggedIn()){
  header("location: home.php");
  exit;
}
$user = new User();
$user->id = $_SESSION['userId'];
$user = $user->loadById();

require '../views/profile.php';
?>
