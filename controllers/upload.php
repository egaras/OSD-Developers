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

$targetDir = "../assets/profilePics/";
$targetName = time().basename($_FILES["myImage"]["name"]);
$targetFile = $targetDir.$targetName;
$uploadOk = 1;

if(move_uploaded_file($_FILES["myImage"]["tmp_name"], $targetFile)){
  $user->avatar = $targetName;
  $user->update();
}
header("location: ../controllers/profileOverview.php");
 ?>
