<?php

/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/7/17
 * Time: 4:12 PM
 */
class Thread
{
    private $id;
    private $userid;
    private $username;
    private $forumid;
    private $title;
    private $content;
    private $postdate;
    private $editdate;
    private $locked;
    private $pinned;
    private $views;
    private $replies;
    public static $table = 'threads';

    function __get($name){
        return $this->$name;
    }
    function __set($name, $value){
        $this->$name = $value;
    }
    public function loadById(){
        $thread = $GLOBALS['db']->select(self::$table,['*'],['id'=>$this->id],"AND",'Thread')[0];
        return $thread;
    }
    public static function getThreads(){
      $threads = $GLOBALS['db']->select(self::$table,['*'],["1"=>"1"],"AND","Thread");
      return $threads;
    }
    public static function getThreadsByForumId($id){
      $threads = $GLOBALS['db']->select(self::$table,['*'],['forumid'=>$id],"AND","Thread");
      return $threads;
    }
    public function getOwnerUsername(){
      return $GLOBALS['db']->select('users',['username'],['id'=>$this->userid])[0]->username;
    }
    public function insert(){
        $values = array(
            'userid'=>$this->userid,
            'forumid'=>$this->forumid,
            'title'=>$this->title,
            'content'=>$this->content,
            'postdate'=>$this->postdate,
            'editdate'=>$this->editdate,
            'locked'=>$this->locked,
            'pinned'=>$this->pinned,
            'views'=>$this->views
        );
        $GLOBALS['db']->insert(self::$table,$values);
    }
    public function delete(){
        $GLOBALS['db']->delete(self::$table,['id'=>$this->id]);
    }
    public function update(){
        $values = array(
            'forumid'=>$this->forumid,
            'title'=>$this->title,
            'content'=>$this->content,
            'editdate'=>$this->editdate,
            'views'=>$this->views
        );
        $GLOBALS['db']->update(self::$table,$values,['id'=>$this->id]);
    }
    public function toggleLock(){
        $GLOBALS['db']->toggle(self::$table,'locked',['id'=>$this->id]);
    }
    public function togglePin(){
        $GLOBALS['db']->toggle(self::$table,'pinned',['id'=>$this->id]);
    }
    public function addView(){
        $GLOBALS['db']->increment(self::$table,'views',['id'=>$this->id]);
    }
}
