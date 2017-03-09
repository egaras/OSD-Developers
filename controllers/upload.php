<?php
require '../vendor/autoload.php';
require '../core/bootstrap.php';
////////////////////////////
session_start();
if(isset($_SESSION['userId'])){
    $userId = $_SESSION['userId'];
    $loged_in = true;
}
else{
    $loged_in = false;
}
$user = new User();
$user->id = $userId;
$user = $user->loadById();
/////////////////////////////

$targetDir = "../assets/profilePics/";
$targetName = time().basename($_FILES["myImage"]["name"]);
$targetFile = $targetDir.$targetName;
$uploadOk = 1;

if(move_uploaded_file($_FILES["myImage"]["tmp_name"], $targetFile)){
  $user->avatar = $targetName;
  $user->update();
}
header("location: ../controllers/profile.php");
 ?>
