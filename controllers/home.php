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

$sections = $db->select('sections',['*'],["1"=>"1"],"AND","Section");
foreach ($sections as $section){
    $forums = $db->select('forums',['*'],['sectionid'=>$section->id],"AND","Forum");
    $section->forums = $forums;
    foreach ($forums as $forum){
        $threads = $db->select('threads',['*'],['forumid'=>$forum->id],"AND","Thread");
        $forum->threads = $threads;
        foreach ($threads as $thread){
            $thread->replies = count($db->select('replies',['threadid'=>$thread->id]));
            $thread->username = $db->select('users',['username'],['id'=>$thread->userid])[0]->username;
        }
    }
}
require '../views/home.php';
