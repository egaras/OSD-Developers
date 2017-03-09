<?php
/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/7/17
 * Time: 3:56 PM
 */
require '../vendor/autoload.php';
require '../core/bootstrap.php';

session_start();
$_SESSION['userId'] = 1; //admin
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

require '../views/profile.php';
