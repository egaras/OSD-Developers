<?php
require '../vendor/autoload.php';
require '../core/bootstrap.php';
if(isLoggedIn()){
  $user = new User();
  $user->id = $_SESSION['userid'];
  $user = $user->loadById();
}
if(!isset($_GET['threadid'])){
    header("location: home.php");
    exit;
}
if(isset($_GET['threadid'])){
    $thread = new Thread();
    $thread->id = $_GET['threadid'];
    $thread = $thread->loadById();
    if(!$thread->id){
        header("location: home.php");
        exit;
    }
}
$forum = new Forum();
$forum->id = $thread->forumid;
$forum = $forum->loadById();

$threadUser = new User();
$threadUser->id = $thread->userid;
$threadUser = $threadUser->loadById();
$replies = Reply::getOrderedRepliesByThreadId($thread->id);
$thread->replies = $replies;
foreach ($replies as $reply){
    $replyUser = new User();
    $replyUser->id = $reply->userid;
    $replyUser = $replyUser->loadById();
    $reply->avatar = $replyUser->avatar;
    $reply->userFullname = $replyUser->getFullname();
}

require '../views/thread.php';
?>
