<?php
/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/4/17
 * Time: 5:39 PM
 */
//require 'vendor/autoload.php';
session_start();
App::bind('config', require $_SERVER['DOCUMENT_ROOT']."/OSD-Developers/config.php");

App::bind('database', new QueryBuilder(
    Connection::open(App::get('config')['database'])
));
$db = App::get('database');

function isLoggedIn(){
  if(isset($_SESSION['userId'])){
      return true;
  }
  return false;
}

function isAdmin(){
  if($user->roleid == 0){
    return true;
  }
  return false;
}
