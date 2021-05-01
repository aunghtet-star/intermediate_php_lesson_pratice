<?php
class member{
    public $name = "aung aung";
    public function friendCount(){
        echo "I'm friend count";
    }
}
class php_13_overriding extends member {
    public function friendCount()
    {
        echo "I'm not friend count function".$this->name;
    }
}

$obj = new php_13_overriding();
echo $obj->name;

$obj->friendCount();
