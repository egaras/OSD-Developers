<?php
require '../vendor/autoload.php';
require '../core/bootstrap.php';
if(isLoggedIn()){
  $user = new User();
  $user->id = $_SESSION['userId'];
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
}
$threads = Thread::getOrderedThreadsByForumId($forum->id);
$forum->threads = $threads;
foreach ($threads as $thread){
    $thread->username = $thread->getOwnerUsername();
    $thread->avatar = $thread->getOwnerPic();
    $thread->replies = count($db->select('replies',['threadid'=>$thread->id]));
}

require '../views/forums.php';
?>
