<?php
/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/4/17
 * Time: 5:51 PM
 */
require 'vendor/autoload.php';
require 'core/bootstrap.php';
//$u = Thread::getThreadsByUserId(1);
//die(var_dump($u));
//$user = new User();
//$user->username = "ehabgamal";
//$user->reg_date = date("Y-m-d H:i:s");
//var_dump($user);
//die();
//die(var_dump($db->select('users',['*'],['"1"'=>'1'],'AND')));

//echo bin2hex(random_bytes(64)).'<br>';
//die(hash('sha256',uniqid('ehab')));

var_dump($_SESSION);
die();
var_dump($db->select('sections',['*'],['name'=>'testsec','id'=>"7"]," OR "));
die();
