<?php


class php_25_non_static
{
    private static $count=0;
    public  function getMe(){
       self:: sheMo();
    }
    public static function sheMo(){
        self::$count++;
        echo self::$count;
    }

}

$obj = new php_25_non_static();
$obj->getMe();