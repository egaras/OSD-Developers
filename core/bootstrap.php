<?php
/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/4/17
 * Time: 5:39 PM
 */
//require 'vendor/autoload.php';
session_start();
App::bind('config', require $_SERVER['DOCUMENT_ROOT']."/config.php");

App::bind('database', new QueryBuilder(
    Connection::open(App::get('config')['database'])
));
$db = App::get('database');

function isLoggedIn(){
    if(isset($_SESSION['userid'])){
        $res = $GLOBALS['db']->select('users',['*'],['id'=>$_SESSION['userid']]);
        return count($res)==1 && $res[0]->status==1;
    }
    return false;
}

function isAdmin(){
    if(isLoggedIn()){
        $res = $GLOBALS['db']->select('users',['*'],['id'=>$_SESSION['userid']]);
        return $res[0]->roleid==1;
    }
    return false;
}
