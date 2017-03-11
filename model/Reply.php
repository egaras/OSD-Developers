<?php

/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/7/17
 * Time: 4:12 PM
 */
class Reply
{
    private $id;
    private $userid;
    private $username;
    private $threadid;
    private $content;
    private $replydate;
    private $editdate;
    public static $table = 'replies';

    function __get($name){
        return $this->$name;
    }
    function __set($name, $value){
        $this->$name = $value;
    }
    public function loadById(){
        $thread = $GLOBALS['db']->select(self::$table,['*'],['id'=>$this->id],"AND",'Reply')[0];
        return $thread;
    }
    public static function getReplies(){
      $threads = $GLOBALS['db']->select(self::$table,['*'],["1"=>"1"],"AND","Reply");
      return $threads;
    }
    public static function getRepliesByThreadId($id){
      $replies = $GLOBALS['db']->select(self::$table,['*'],['threadid'=>$id],"AND","Reply");
      return $replies;
    }
    public function insert(){
        $values = array(
            'userid'=>$this->userid,
            'threadid'=>$this->threadid,
            'content'=>$this->content,
            'replydate'=>$this->replydate,
            'editdate'=>$this->editdate
        );
        $GLOBALS['db']->insert(self::$table,$values);
    }
    public function delete(){
        $GLOBALS['db']->delete(self::$table,['id'=>$this->id]);
    }
    public function update(){
        $values = array(
            'content'=>$this->content,
            'editdate'=>$this->editdate
        );
        $GLOBALS['db']->update(self::$table,$values,['id'=>$this->id]);
    }
    public static function getRepliesByUserId($i){
        return count($GLOBALS['db']->select(self::$table,['*'],['userid'=>$i],"AND","Reply"));
    }
}
