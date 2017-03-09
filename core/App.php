<?php

/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/4/17
 * Time: 5:22 PM
 */
class App
{
    private static $registry;
    public static function get($key)
    {
        if(array_key_exists($key,static::$registry))
            return static::$registry[$key];
    }
    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }
}
