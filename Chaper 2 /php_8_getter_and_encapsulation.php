<?php
class php_8_getter_and_encapsulation{
    private $name = "Aung Aung";
    public function getter(){
        return $this->name;
    }
}
$obj = new php_8_getter_and_encapsulation();
echo $obj->getter();