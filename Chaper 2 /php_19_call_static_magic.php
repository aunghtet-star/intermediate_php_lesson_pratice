<?php
class php_19_call_static_magic{
    public function __call($method,$value){
        echo "you are calling none exist method " .$method . " with" ;
        echo "<pre>" .print_r($value). "</pre>";
    }
}

$obj = new php_19_call_static_magic();
$obj->hey("Aung ");