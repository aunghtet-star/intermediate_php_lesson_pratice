<?php

class php_18_isset_unset_magic{
    public function __isset($name){
        echo "This name is set or nor of the ". $name ."property";
    }
    public function __unset($name){
    echo "This name is set or nor of the ". $name ."property";
    }
}
$obj = new php_18_isset_unset_magic();

echo isset($obj->name);