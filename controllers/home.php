<?php
/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/7/17
 * Time: 3:56 PM
 */
require '../vendor/autoload.php';
require '../core/bootstrap.php';

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
