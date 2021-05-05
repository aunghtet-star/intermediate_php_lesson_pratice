<?php
class Data{

}
class Type{

}
class php_7_datatype_passing{
    public function show(int $data):int
    {
        return "$data";
    }
}
$obj = new php_7_datatype_passing();
$type = new Data();
$Pyte = new Type();
echo $new=$obj->show(5) ;
var_dump($new);
