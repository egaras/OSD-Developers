<?php
/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/7/17
 * Time: 3:56 PM
 */
require '../vendor/autoload.php';
require '../core/bootstrap.php';
if(isLoggedIn()){
  $user = new User();
  $user->id = $_SESSION['userid'];
  $user = $user->loadById();
}
$sections = Section::getSections();
foreach ($sections as $section){
    $forums = Forum::getForumsBySectionId($section->id);
    $section->forums = $forums;
    foreach ($forums as $forum) {
        $threads = Thread::getOrderedThreadsByForumId($forum->id);
        $forum->threads = $threads;
        foreach ($threads as $thread){
            $thread->username = $thread->getOwnerUsername();
            $thread->replies = Reply::countRepliesByThreadId($thread->id);
        }
    }
}

require '../views/home.php';
