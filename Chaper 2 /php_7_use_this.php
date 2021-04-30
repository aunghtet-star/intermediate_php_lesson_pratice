<?php

class php_7_use_this{
    public $name = "Aung Aung";

    public function changeName(){
        $this->name = "Mg Mg";
    }

}

$obj = new php_7_use_this();
$obj->changeName();
echo $obj->name;

$sudi = new php_7_use_this();
echo $sudi->name;