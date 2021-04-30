<?php


class php_9_setter_getter
{
    private $name = "Aung Aung";

    public function setter($data){
        $this->name = $data;
    }

    public function getter(){
       return $this->name;
    }
}

$obj = new php_9_setter_getter();
$obj->setter("Gu chi");
echo $obj->getter();