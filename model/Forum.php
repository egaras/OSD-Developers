<?php

/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/5/17
 * Time: 9:40 AM
 */
class Forum
{
    public function __construct()
    {

    }
    public function select()
    {
        return $GLOBALS['db']->select('forums');
    }
}