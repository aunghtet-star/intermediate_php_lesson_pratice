<?php

function doIt($var){
 $var(5);
}

doIt(function($num){
    echo "hello I am lambda".$num;
});