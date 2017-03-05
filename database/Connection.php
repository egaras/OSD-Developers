<?php

/**
 * Created by PhpStorm.
 * User: ehab
 * Date: 3/4/17
 * Time: 5:43 PM
 */
class Connection
{
    public static function open($config)
    {
        try{
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}