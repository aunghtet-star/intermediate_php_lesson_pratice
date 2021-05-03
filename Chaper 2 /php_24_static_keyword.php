<?php


class php_24_static_keyword
{
    private static $count=0;
    public function needCount(){
        self::$count++;
        echo self::$count;
    }
}

$obj=new php_24_static_keyword();
$obj->needCount();
$obj->needCount();
$obj->needCount();

$next = new php_24_static_keyword();
$next->needCount();