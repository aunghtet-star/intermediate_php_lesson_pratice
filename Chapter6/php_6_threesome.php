<?php
$ary =['one'=>2,'two'=>3,'three'=>1];
$num =50;
array_walk($ary,function($k,$v) use ($num){
    echo "hello".$k ."<br>". $v.$num." <hr>";
});