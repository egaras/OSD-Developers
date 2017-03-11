<?php

/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/5/17
 * Time: 9:40 AM
 */
class Forum
{
    private $id;
    private $sectionid;
    private $name;
    private $desc;
    private $locked;
    private $createdate;
    private $views;
    private $threads = [];
    public static $table = 'forums';

    function __get($name){
        return $this->$name;
    }
    function __set ($name, $value){
        $this->$name = $value;
    }
    public function loadById(){
        $forum = $GLOBALS['db']->select(self::$table,['*'],['id'=>$this->id],"AND",'Forum');
        if($forum){return $forum[0];}
        else {return new Forum();}
    }
    public static function getForums(){
      $forums = $GLOBALS['db']->select(self::$table,['*'],["1"=>"1"],"AND","Forum");
      return $forums;
    }
    public static function getForumsBySectionId($id){
      $forums = $GLOBALS['db']->select(self::$table,['*'],['sectionid'=>$id],"AND","Forum");
      return $forums;
    }
    public function insert(){
        $values = array('name'=>$this->name,'desc'=>$this->desc,'locked'=>$this->locked,'createdate'=>$this->createdate,'views'=>$this->views,'sectionid'=>$this->sectionid);
        $GLOBALS['db']->insert(self::$table,$values);
    }
    public function delete(){
        $GLOBALS['db']->delete(self::$table,['id'=>$this->id]);
    }
    public function update(){
        $values = array('name'=>$this->name,'desc'=>$this->desc,'locked'=>$this->locked,'createdate'=>$this->createdate,'views'=>$this->views,'sectionid'=>$this->sectionid);
        $GLOBALS['db']->update(self::$table,$values,['id'=>$this->id]);
    }
    public function toggleLock(){
        $GLOBALS['db']->toggle(self::$table,'locked',['id'=>$this->id]);
    }
    public function addView(){
        $GLOBALS['db']->increment(self::$table,'views',['id'=>$this->id]);
    }
}
