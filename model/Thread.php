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
    public function insert(){
        $values = array('userid'=>$this->userid,'username'=>$this->username,'forumid'=>$this->forumid,'title'=>$this->title,'locked'=>$this->locked,'postDate'=>$this->postDate,'editDate'=>$this->editDate,'pinned'=>$this->pinned,'views'=>$this->views,'replies'=>$this->replies);
        $GLOBALS['db']->insert(self::$table,$values);
    }
    public function delete(){
        $GLOBALS['db']->delete(self::$table,['id'=>$this->id]);
    }
    public function update(){
        $values = array('userid'=>$this->userid,'username'=>$this->username,'forumid'=>$this->forumid,'title'=>$this->title,'locked'=>$this->locked,'postDate'=>$this->postDate,'editDate'=>$this->editDate,'pinned'=>$this->pinned,'views'=>$this->views,'replies'=>$this->replies);
        $GLOBALS['db']->update(self::$table,$sets,['id'=>$this->id]);
    }
}
