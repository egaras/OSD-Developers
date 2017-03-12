<?php
require '../vendor/autoload.php';
require '../core/bootstrap.php';
if(isLoggedIn()){
  $user = new User();
  $user->id = $_SESSION['userid'];
  $user = $user->loadById();
}
if(!isset($_GET['forumid'])){
    header("location: home.php");
    exit;
}
if(isset($_GET['forumid'])){
    $forum = new Forum();
    $forum->id = $_GET['forumid'];
    $forum = $forum->loadById();
    if(!$forum->id){
        header("location: home.php");
        exit;
    }
    $forum->addView();
}
$threads = Thread::getOrderedThreadsByForumId($forum->id,'postdate',"DESC",$limit='ALL');
$forum->threads = $threads;
foreach ($threads as $thread){
    $thread->username = $thread->getOwnerUsername();
    $thread->avatar = $thread->getOwnerPic();
    $thread->replies = Reply::countRepliesByThreadId($thread->id);
}

require '../views/forums.php';
?>
