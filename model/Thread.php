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

    function __get($name){
        return $this->$name;
    }
    function __set ($name, $value){
        $this->$name = $value;
    }
}