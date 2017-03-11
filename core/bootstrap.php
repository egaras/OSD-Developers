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
    return isset($_SESSION['userid']);
}

function isAdmin(){
    return $_SESSION['userrole'] == 1;
}
