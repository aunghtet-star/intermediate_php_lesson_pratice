<?php

$ary = array("one"=>1,"two"=>2);
var_dump($ary);
echo $ary["one"] ."<hr>";

$obj = (object) $ary;
var_dump($obj);
echo $obj->two;