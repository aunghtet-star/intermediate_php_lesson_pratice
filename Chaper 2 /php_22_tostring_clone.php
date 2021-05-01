<?php
class php_22_tostring_clone{
    public $name = "Mg aung";
    public function __toString()
    {
       echo "Hello i am string";
    }
    public function __invoke()
    {
        return "I am invoke";
    }
    public function __clone(){
       echo "I am clone";
    }
}
$obj = new php_22_tostring_clone();
$clone = clone $obj;

