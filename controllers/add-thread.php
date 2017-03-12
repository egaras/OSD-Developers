<?php
/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/11/17
 * Time: 5:16 PM
 */

require '../vendor/autoload.php';
require '../core/bootstrap.php';
if(!isLoggedIn()){
    header("location: home.php");
    exit;
}
if(!isset($_GET['forum-id'])){
    header("location: home.php");
    exit;
}
if(isset($_GET['forum-id'])){
    $forum_id=$_GET['forum-id'];
    $forum = new Forum();
    $forum->id = $forum_id;
    $forum = $forum->loadById();
    if(!$forum->id){
        header("location: home.php");
        exit;
    }
}
@$thread_id=$_GET['thread-id'];
if(isset($_GET['thread-id'])){
    $thread = new Thread();
    $thread->id = $_GET['thread-id'];
    $thread = $thread->loadById();
    if(!$thread->id){
        header("location: home.php");
        exit;
    }
}
require '../views/add-thread.php';
