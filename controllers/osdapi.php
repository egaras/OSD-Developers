<?php
/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/8/17
 * Time: 3:36 AM
 */
require '../vendor/autoload.php';
require '../core/bootstrap.php';

$isAdmin = true;

$response = array('success'=>false);

if (isset($_POST['action'])){
    switch ($_POST['action']){
        case 'login':
            $response = userLogin();
            break;
        case 'addUser':
            $response = addUser();
            break;
        case 'getUser':
            $response = getUserData();
            break;
        case 'updateUser':
            $response = updateUser();
            break;
        case 'deleteUser':
            $response = deleteUser();
            break;
        case 'addSection':
            $response = addSection();
            break;
        case 'updateSection':
            $response = updateSection();
            break;
        case 'deleteSection':
            $response = deleteSection();
            break;
        case 'toggleSectionLock':
            $response = toggleSectionLock();
            break;
        case 'addForum':
            $response = addForum();
            break;
        case 'updateForum':
            $response =updateForum();
            break;
        case 'getforumData':
            $response=getforumData();
            break;
        case 'deleteForum':
            $response = deleteForum();
            break;
        case 'toggleForumLock':
            $response = toggleForumLock();
            break;
        case 'incrementForumViews':
            $response = incrementForumViews();
            break;
        case 'addThread':
            $response = addThread();
            break;
        case 'updateThread':
            $response =updateThread();
            break;
        case 'deleteThread':
            $response = deleteThread();
            break;
        case 'toggleThreadLock':
            $response = toggleThreadLock();
            break;
        case 'toggleThreadPin':
            $response = toggleThreadPin();
            break;
        case 'incrementThreadViews':
            $response = incrementThreadViews();
            break;
        case 'addReply':
            $response = addReply();
            break;
        case 'updateReply':
            $response = updateReply();
            break;
        case 'deleteReply':
            $response = deleteReply();
            break;
    }
}
echo json_encode($response);

function userLogin(){
    $response = [];
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $user = $GLOBALS['db']->select('users', ['*'], ['username' => $_POST['username']], 'AND');
        if (count($user) > 0) {
            if (!password_verify($_POST['password'], $user[0]->password))
                $response["errors"]["password"] = "Invalid password";
            else{
                $_SESSION['username'] = $user[0]->username;
                $_SESSION['userid'] = $user[0]->id;
                $_SESSION['userrole'] = $user[0]->roleid;
            }
        }else
            $response["errors"]["username"] = "Invalid username";
    }else{
        $response["errors"]["username"] = "Empty username";
        $response["errors"]["password"] = "Empty password";
    }
    $response["success"] = count(@$response["errors"]) ? false : true;
    return $response;
}
function getUserData(){
    $response = [];
    if(isset($_POST['userid'])) {
        $user = $GLOBALS['db']->select('users', ['*'], ['id' => $_POST['userid']], 'AND');
        if (count($user) > 0) {
            $response['data'] = $user[0];
        }else
            $response["errors"]["userid"] = "Invalid userid";
    }else
        $response["errors"]["userid"] = "Empty userid";
    $response["success"] = count(@$response["errors"]) ? false : true;
    return $response;
}
function addUser(){
    $response = [];

    if(empty($_POST['fname']))
        $response["errors"]["fname"] = "Empty first name not allowd!";
    if(empty($_POST['lname']))
        $response["errors"]["lname"] = "Empty last name not allowd!";
    if(empty($_POST['email']))
        $response["errors"]["email"] = "Empty email not allowd!";
    else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        $response["errors"]["email"] = "Invalid email address!";
    if(empty($_POST['username']))
        $response["errors"]["username"] = "Empty username not allowd!";
    if(empty($_POST['gender']))
        $response["errors"]["gender"] = "Empty gender not allowd!";
    if(empty($_POST['password']))
        $response["errors"]["password"] = "Empty password not allowd!";
    else if(empty($_POST['rpassword']))
        $response["errors"]["rpassword"] = "Empty rpassword not allowd!";
    else if($_POST['password'] != $_POST['rpassword'])
        $response["errors"]["password"] = "Password does not match the confirmation!";

    if(count(@$response["errors"])==0){
        $user = $GLOBALS['db']->select('users',['*'],["username"=>$_POST['username'],"email"=>$_POST['email']],"OR ");
        if(count($user) != 0){
            if($user[0]->username == $_POST['username'])
                $response["errors"]["username"] = "Username already existed!";
            if($user[0]->email == $_POST['email'])
                $response["errors"]["email"] = "Email already existed!";
        }else{
            $user = new User();
            $user->fname = $_POST['fname'];
            $user->lname = $_POST['lname'];
            $user->email = $_POST['email'];
            $user->username = $_POST['username'];
            $user->password = password_hash($_POST['password'],PASSWORD_BCRYPT);
            $user->gender = $_POST['gender'];
            if($user->gender == "m")
                $user->avatar = "defaultmale.png";
            else
                $user->avatar = "defaultfemale.png";
            $user->regdate = date("Y-m-d H:i:s");
            $user->roleid = $GLOBALS['db']->select('roles',['*'],['role'=>"User"])[0]->id;
            $user->status = $GLOBALS['db']->select('userstatus',['*'],['name'=>"Pending"])[0]->id;
            $user->insert();
        }
    }
    $response["success"] = count(@$response["errors"]) ? false : true;
    return $response;
}
function updateUser(){
    $response = [];
    $user = new User();
    if(!empty($_POST['username'])){
        $user->username = $_POST['username'];
        $user = $user->loadByUsername();
    }else if(!empty($_POST['userid'])){
        $user->userid = $_POST['userid'];
        $user = $user->loadById();
    }else
        $response["errors"]["username"] = "Please specify username!";
    if(!empty($_POST['fname']))
        $user->fname = $_POST['fname'];
    if(!empty($_POST['lname']))
        $user->lname = $_POST['lname'];
    if(!empty($_POST['status']))
        $user->status = $_POST['status'];
    if(!empty($_POST['roleid']))
        $user->roleid = $_POST['roleid'];
    if(!empty($_POST['avatar']))
        $user->avatar = $_POST['avatar'];
    if(!empty($_POST['gender'])){
        if($_POST['gender'] != 'm' || $_POST['gender'] != 'f')
            $response["errors"]["gender"] = "Invalid gender!";
        else
            $user->gender = $_POST['gender'];
    }
    if(!empty($_POST['password'])){
        if(!empty($_POST['rpassword'])){
            //$values['password'] = $_POST['password'];
            if($_POST['password'] == $_POST['rpassword']){
                $user->password = password_hash($_POST['password'],PASSWORD_BCRYPT);
            }else
                $response["errors"]["rpassword"] = "Confirm password does not match!";
        }else
            $response["errors"]["password"] = "Empty password not allowd!!";
    }

    if(count(@$response["errors"])==0){
        if(count($GLOBALS['db']->select('users',['*'],["username"=>$_POST['username']])) == 0){
            $response["errors"]["username"] = "Username does not exist!";
        }else{
            $user->update();
        }
    }
    $response["success"] = count(@$response["errors"]) ? false : true;
    return $response;
}
function deleteUser(){
    $response = [];
    $user = new User();
    if(empty($_POST['username']))
        $response["errors"]["username"] = "Please specify username!";
    if(count(@$response["errors"])==0){
        if(count($GLOBALS['db']->select('users',['*'],["username"=>$_POST['username']])) == 0){
            $response["errors"]["username"] = "Username does not exist!";
        }else{
            $user->id = $_POST['userid'];
            $user->delete();
        }
    }
    $response["success"] = count(@$response["errors"]) ? false : true;
    return $response;
}

function addSection(){
    $response = [];
    if(empty($_POST['sectionname']))
        $response["errors"]["sectionname"] = "Empty section name not allowd!";
    else if(count($GLOBALS['db']->select('sections',['*'],['name'=>$_POST['sectionname']]))!=0)
        $response["errors"]["sectionname"] = "Section name already exist!";
    if(empty($_POST['sectiondesc']))
        $response["errors"]["sectiondesc"] = "Empty section description not allowd!";
    if(count(@$response["errors"])==0){
        $section = new Section();
        $section->name = $_POST['sectionname'];
        $section->desc = $_POST['sectiondesc'];
        $section->locked = 0;
        $section->createDate = date("Y-m-d H:i:s");
        $section->insert();
    }
    $response["success"] = count(@$response["errors"]) ? false : true;
    return $response;
}
function updateSection(){
    $response = [];
    $section = new Section();
    if(!empty($_POST['sectionid'])){
        if(count($GLOBALS['db']->select('sections',['*'],['id'=>$_POST['sectionid']]))==0)
            $response["errors"]["sectionname"] = "Section does not exist!";
        else if(count($GLOBALS['db']->select('sections',['*'],['name'=>$_POST['sectionname'],'id'=>$_POST['sectionid']]," OR "))>1)
            $response["errors"]["sectionname"] = "Section name already exist!";
        else{
            $section->id = $_POST['sectionid'];
            $section = $section->loadById();
        }
    }else
        $response["errors"]["sectionid"] = "Please specify section id!";
    if(!empty($_POST['sectionname']))
        $section->name = $_POST['sectionname'];
    if(!empty($_POST['sectiondesc']))
        $section->desc = $_POST['sectiondesc'];
    if(count(@$response["errors"])==0){
        $section->update();
    }
    $response["success"] = count(@$response["errors"]) ? false : true;
    return $response;
}
function deleteSection(){
    $response = [];
    $section = new Section();
    if(!empty($_POST['sectionid'])){
        if(count($GLOBALS['db']->select('sections',['*'],['id'=>$_POST['sectionid']]))==0)
            $response["errors"]["sectionid"] = "Section does not exist!";
        else{
            $section->id = $_POST['sectionid'];
            $section->delete();
        }
    }else
        $response["errors"]["sectionid"] = "Please specify section id!";
    $response["success"] = count(@$response["errors"]) ? false : true;
    return $response;
}
function toggleSectionLock(){
    $response = [];
    $section = new Section();
    if(!empty($_POST['sectionid'])){
        if(count($GLOBALS['db']->select('sections',['*'],['id'=>$_POST['sectionid']]))==0)
            $response["errors"]["sectionid"] = "Section does not exist!";
        else{
            $section->id = $_POST['sectionid'];
            $section->toggleLock();
        }
    }else
        $response["errors"]["sectionid"] = "Please specify section id!";
    $response["success"] = count(@$response["errors"]) ? false : true;
    return $response;
}

function addForum(){
    $response = [];
    if(empty($_POST['forumname']))
        $response["errors"]["forumname"] = "Empty forum name not allowd!";
    else if(empty($_POST['sectionid']))
        $response["errors"]["sectionid"] = "Empty section id not allowd!";
    else if(count($GLOBALS['db']->select('forums',['*'],['name'=>$_POST['forumname'],'sectionid'=>$_POST['sectionid']]," AND "))!=0)
        $response["errors"]["forumname"] = "Forum name already existed!";
    if(empty($_POST['forumdesc']))
        $response["errors"]["forumdesc"] = "Empty forum description not allowd!";
    if(count(@$response["errors"])==0){
        $forum = new Forum();
        $forum->name = $_POST['forumname'];
        $forum->desc = $_POST['forumdesc'];
        $forum->sectionid = $_POST['sectionid'];
        $forum->locked = 0;
        $forum->views = 0;
        $forum->createdate = date("Y-m-d H:i:s");
        $forum->insert();
    }
    $response["success"] = count(@$response["errors"]) ? false : true;
    return $response;
}
function updateForum(){
    $response = [];
    $forum = new Forum();
    if(!empty($_POST['forumid'])){
        if(count($GLOBALS['db']->select('forums',['*'],['id'=>$_POST['forumid']]))==0)
            $response["errors"]["sectionname"] = "Forum does not exist!";
        else{
            $forum->id = $_POST['forumid'];
            $forum = $forum->loadById();
        }
    }else
        $response["errors"]["sectionid"] = "Please specify forum id!";
    if(!empty($_POST['forumname']))
        $forum->name = $_POST['forumname'];
    if(!empty($_POST['forumdesc']))
        $forum->desc = $_POST['forumdesc'];
    if(!empty($_POST['sectionid']))
        $forum->sectionid = $_POST['sectionid'];
    if(count(@$response["errors"])==0){
        $forum->update();
    }
    $response["success"] = count(@$response["errors"]) ? false : true;
    return $response;
}
function deleteForum(){
    $response = [];
    $forum = new Forum();
    if(!empty($_POST['forumid'])){
        if(count($GLOBALS['db']->select('forums',['*'],['id'=>$_POST['forumid']]))==0)
            $response["errors"]["forumid"] = "Forum does not exist!";
        else{
            $forum->id = $_POST['forumid'];
            $forum->delete();
        }
    }else
        $response["errors"]["forumid"] = "Please specify forum id!";
    $response["success"] = count(@$response["errors"]) ? false : true;
    return $response;
}
function getforumData(){
    $response = [];
    if(isset($_POST['forumid'])) {
        $forum = $GLOBALS['db']->select('forums', ['*'], ['id' => $_POST['forumid']], 'AND');
        if (count($forum) > 0) {
            $response['data'] = $forum[0];
        }else
            $response["errors"]["forumid"] = "Invalid forumid";
    }else
        $response["errors"]["forumid"] = "Empty forumid";
    $response["success"] = count(@$response["errors"]) ? false : true;
    return $response;
}
function toggleForumLock(){
    $response = [];
    $forum = new Forum();
    if(!empty($_POST['forumid'])){
        if(count($GLOBALS['db']->select('forums',['*'],['id'=>$_POST['forumid']]))==0)
            $response["errors"]["forumid"] = "Forum does not exist!";
        else{
            $forum->id = $_POST['forumid'];
            $forum->toggleLock();
        }
    }else
        $response["errors"]["forumid"] = "Please specify forum id!";
    $response["success"] = count(@$response["errors"]) ? false : true;
    return $response;
}
function incrementForumViews(){
    $response = [];
    $forum = new Forum();
    if(!empty($_POST['forumid'])){
        if(count($GLOBALS['db']->select('forums',['*'],['id'=>$_POST['forumid']]))==0)
            $response["errors"]["forumid"] = "Forum does not exist!";
        else{
            $forum->id = $_POST['forumid'];
            $forum->addView();
        }
    }else
        $response["errors"]["forumid"] = "Please specify forum id!";
    $response["success"] = count(@$response["errors"]) ? false : true;
    return $response;
}

function addThread(){
    $response = [];
    if(empty($_POST['threadtitle']))
        $response["errors"]["threadtitle"] = "Empty thread title not allowd!";
    if(empty($_POST['threadcontent']))
        $response["errors"]["threadcontent"] = "Empty thread content not allowd!";
    if(empty($_POST['forumid']))
        $response["errors"]["forumid"] = "Empty forum id not allowd!";
    if(count(@$response["errors"])==0){
        $thread = new Thread();
        $thread->userid = $_SESSION['userid'];
        $thread->forumid = $_POST['forumid'];
        $thread->title = $_POST['threadtitle'];
        $thread->content = htmlspecialchars($_POST['threadcontent']);
        $thread->postdate = date("Y-m-d H:i:s");
        $thread->editdate = date("Y-m-d H:i:s");
        $thread->locked = 0;
        $thread->pinned = 0;
        $thread->views = 0;
        $thread->insert();
    }
    $response["success"] = count(@$response["errors"]) ? false : true;
    return $response;
}
function updateThread(){
    $response = [];
    $thread = new Thread();
    if(!empty($_POST['threadid'])){
        if(count($GLOBALS['db']->select('threads',['*'],['id'=>$_POST['threadid']]))==0)
            $response["errors"]["threadid"] = "Thread does not exist!";
        else{
            $thread->id = $_POST['threadid'];
            $thread = $thread->loadById();
        }
    }else
        $response["errors"]["threadid"] = "Please specify thread id!";
    if(!empty($_POST['threadtitle']))
        $thread->title = $_POST['threadtitle'];
    if(!empty($_POST['threadcontent']))
        $thread->content = $_POST['threadcontent'];
    if(!empty($_POST['forumid']))
        $thread->forumid = $_POST['forumid'];
    if(count(@$response["errors"])==0){
        $thread->editdate = date("Y-m-d H:i:s");
        $thread->update();
    }
    $response["success"] = count(@$response["errors"]) ? false : true;
    return $response;
}
function deleteThread(){
    $response = [];
    $thread = new Thread();
    if(!empty($_POST['threadid'])){
        $res = $GLOBALS['db']->select('threads',['*'],['id'=>$_POST['threadid']],"AND","Thread");
        if(count($res)==0)
            $response["errors"]["threadid"] = "Thread does not exist!";
        else{
            $thread = $res[0];
            if($thread->userid == @$_SESSION['userid'] || $GLOBALS['isAdmin'])
                $thread->delete();
            else
                $response["errors"]["permission"] = "You don't have permission to delete this thread!";
        }
    }else
        $response["errors"]["threadid"] = "Please specify thread id!";
    $response["success"] = count(@$response["errors"]) ? false : true;
    return $response;
}
function toggleThreadLock(){
    $response = [];
    $thread = new Thread();
    if(!empty($_POST['threadid'])){
        if(count($GLOBALS['db']->select('threads',['*'],['id'=>$_POST['threadid']]))==0)
            $response["errors"]["threadid"] = "Thread does not exist!";
        else{
            $thread->id = $_POST['threadid'];
            $thread->toggleLock();
        }
    }else
        $response["errors"]["threadid"] = "Please specify thread id!";
    $response["success"] = count(@$response["errors"]) ? false : true;
    return $response;
}
function toggleThreadPin(){
    $response = [];
    $thread = new Thread();
    if(!empty($_POST['threadid'])){
        if(count($GLOBALS['db']->select('threads',['*'],['id'=>$_POST['threadid']]))==0)
            $response["errors"]["threadid"] = "Thread does not exist!";
        else{
            $thread->id = $_POST['threadid'];
            $thread->togglePin();
        }
    }else
        $response["errors"]["threadid"] = "Please specify thread id!";
    $response["success"] = count(@$response["errors"]) ? false : true;
    return $response;
}
function incrementThreadViews(){
    $response = [];
    $thread = new Thread();
    if(!empty($_POST['threadid'])){
        if(count($GLOBALS['db']->select('threads',['*'],['id'=>$_POST['threadid']]))==0)
            $response["errors"]["threadid"] = "Thread does not exist!";
        else{
            $thread->id = $_POST['threadid'];
            $thread->addView();
        }
    }else
        $response["errors"]["threadid"] = "Please specify thread id!";
    $response["success"] = count(@$response["errors"]) ? false : true;
    return $response;
}

function addReply(){
    $response = [];
    if(empty($_POST['threadid']))
        $response["errors"]["threadid"] = "Empty thread id not allowd!";
    if(empty($_POST['replycontent']))
        $response["errors"]["replycontent"] = "Empty reply content not allowd!";
    if(count(@$response["errors"])==0){
        $reply = new Reply();
        $reply->userid = $_SESSION['userid'];
        $reply->threadid = $_POST['threadid'];
        $reply->content = $_POST['replycontent'];
        $reply->replydate = date("Y-m-d H:i:s");
        $reply->editdate = date("Y-m-d H:i:s");
        $reply->insert();
    }
    $response["success"] = count(@$response["errors"]) ? false : true;
    return $response;
}
function updateReply(){
    $response = [];
    $reply = new Reply();
    if(!empty($_POST['replyid'])){
        if(count($GLOBALS['db']->select('replies',['*'],['id'=>$_POST['replyid']]))==0)
            $response["errors"]["threadid"] = "Reply does not exist!";
        else{
            $reply->id = $_POST['replyid'];
            $reply = $reply->loadById();
        }
    }else
        $response["errors"]["replyid"] = "Please specify reply id!";
    if(!empty($_POST['replycontent']))
        $reply->content = $_POST['replycontent'];
    else
      $response["errors"]["replycontent"] = "Empty reply content not allowd!";
    if(count(@$response["errors"])==0){
        $reply->editdate = date("Y-m-d H:i:s");
        $reply->update();
    }
    $response["success"] = count(@$response["errors"]) ? false : true;
    $response["data"]["editdate"] = $reply->editdate;
    $response["data"]["replydate"] = $reply->replydate;
    return $response;
}
function deleteReply(){
    $response = [];
    $reply = new Reply();
    if(!empty($_POST['replyid'])){
        $res = $GLOBALS['db']->select('replies',['*'],['id'=>$_POST['replyid']],"AND","Reply");
        if(count($res)==0)
            $response["errors"]["replyid"] = "Reply does not exist!";
        else{
            $reply = $res[0];
            if($reply->userid == @$_SESSION['userid'] || $GLOBALS['isAdmin'])
                $reply->delete();
            else
                $response["errors"]["permission"] = "You don't have permission to delete this thread!";
        }
    }else
        $response["errors"]["replyid"] = "Please specify reply id!";
    $response["success"] = count(@$response["errors"]) ? false : true;
    return $response;
}
