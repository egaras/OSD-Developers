<?php

/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/7/17
 * Time: 4:12 PM
 */
class Section
{
    private $id;
    private $name;
    private $desc;
    private $locked;
    private $createDate;
    private $forums = [];
    public static $table = 'sections';

    function __get($name){
        return $this->$name;
    }
    function __set ($name, $value){
        $this->$name = $value;
    }
    public function loadById(){
        $section = $GLOBALS['db']->select(self::$table,['*'],['id'=>$this->id],"AND",'Section')[0];
        return $section;
    }
    public static function getSections(){
      $sections = $GLOBALS['db']->select(self::$table,['*'],["1"=>"1"],"AND","Section");
      return $sections;
    }
    public static function getSectionNameById($id){
      return $GLOBALS['db']->select(self::$table,['name'],['id'=>$id])[0]->name;
    }
    public static function getSectionNameByForumId($id){
      $myId = $GLOBALS['db']->select('forums',['sectionid'],['id'=>$id])[0]->sectionid;
      return $GLOBALS['db']->select(self::$table,['name'],['id'=>$myId])[0]->name;
    }
    public function insert(){
        $values = array('name'=>$this->name,'desc'=>$this->desc,'locked'=>$this->locked,'createdate'=>$this->createDate);
        $GLOBALS['db']->insert(self::$table,$values);
    }
    public function delete(){
        $GLOBALS['db']->delete(self::$table,['id'=>$this->id]);
    }
    public function update(){
        $values = array('name'=>$this->name,'desc'=>$this->desc);
        $GLOBALS['db']->update(self::$table,$values,['id'=>$this->id]);
    }
    public function toggleLock(){
        $GLOBALS['db']->toggle(self::$table,'locked',['id'=>$this->id]);
    }
}
