<?php
class php_17_get_set_magic{
    public function __get($var){
        echo "You are trying to get property ". $var;
    }
    public function __set($var,$val){
        echo "you are trying to set property ". $var ."with ".$val ."<hr>";
    }
}
$obj = new php_17_get_set_magic();
$obj->name="mg mg";