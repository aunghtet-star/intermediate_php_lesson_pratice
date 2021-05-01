<?php


class php_11_destructor
{
    var $t = 0;
    public function __construct()
    {
        echo "I am constructor "."<br>";
    }
    public function loOp(){
        for ($i=0;$i<100;$i++){
            $this->t += $i;
        }
        echo $this->t."<br>";
    }
    public function __destruct()
    {
        echo "I am destructor";
    }
}
$obj = new php_11_destructor();
$obj->loOp();
