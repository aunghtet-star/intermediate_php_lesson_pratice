<?php
abstract class Super{
    public $name = "Gu chi";
    public abstract function myName();
    public abstract function yourName();
    public  function doIt(){
        echo "I am do It";
    }
}
 class Sub extends Super{
    public function myName(){
        echo "Hello I am abstract<hr>";
    }

     public function yourName()
     {
         echo "Who am i";
     }
 }
 $obj = new Sub();
$obj->myName();
$obj->yourName();
