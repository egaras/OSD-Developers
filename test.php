<?php
/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/4/17
 * Time: 5:51 PM
 */
require 'vendor/autoload.php';
require 'core/bootstrap.php';
die(var_dump($db->select('userstatus',['*'],['"1"'=>'1'],'AND')));