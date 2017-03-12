<?php
/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/11/17
 * Time: 2:01 PM
 */
require '../vendor/autoload.php';
require '../core/bootstrap.php';

if(!isAdmin())
    header('Location: home.php');
if(isLoggedIn()){
    $user = new User();
    $user->id = $_SESSION['userid'];
    $user = $user->loadById();
}
$sections = Section::getSections();
foreach ($sections as $section){
    $section->forums = Forum::getForumsBySectionId($section->id);
    foreach ($section->forums as $forum) {
        $forum->threads = Thread::getOrderedThreadsByForumId($forum->id);
        foreach ($forum->threads as $thread){

            $thread->username = $thread->getOwnerUsername();
            $thread->replies = Reply::countRepliesByThreadId($thread->id);
        }
    }
}
$users = User::getAllUsersJoin();
<<<<<<< HEAD
$content=$_GET['content'];
=======
>>>>>>> 0f4ab524dc929606f1734f32c7c3b4fb5e6e1605

require '../views/admin.php';
