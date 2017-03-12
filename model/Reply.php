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
        $reply = $GLOBALS['db']->select(self::$table,['*'],['id'=>$this->id],"AND",'Reply');
        if($reply){return $reply[0];}
        else {return new Reply();}
    }
    public static function getReplies(){
      $replies = $GLOBALS['db']->select(self::$table,['*'],["1"=>"1"],"AND","Reply");
      return $replies;
    }
    public static function getRepliesByThreadId($id){
      $replies = $GLOBALS['db']->select(self::$table,['*'],['threadid'=>$id],"AND","Reply");
      return $replies;
    }
    public static function countRepliesByThreadId($id){
      return count($GLOBALS['db']->select(self::$table,['*'],['threadid'=>$id],"AND","Reply"));
    }
    public static function getOrderedRepliesByThreadId($id,$order='replydate',$orderForm="ASC",$limit="ALL",$offset='0'){
      $replies = $GLOBALS['db']->selectOrderLimitOffset(self::$table,['*'],['threadid'=>$id],"AND","Reply",$order,$orderForm,$limit,$offset);
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
