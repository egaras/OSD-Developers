<?php
/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/4/17
 * Time: 5:51 PM
 */
require 'vendor/autoload.php';
require 'core/bootstrap.php';
$u = User::selectUser('username','yass');
die(var_dump($u));
