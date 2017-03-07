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

    function __get($name){
        return $this->$name;
    }
    function __set ($name, $value){
        $this->$name = $value;
    }
}