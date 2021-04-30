<?php
class php_5_method_overloading{
    public function doIt($default){
        echo "I am number" .$default;
    }

}
$obj = new php_5_method_overloading();
$obj->doIt(1);