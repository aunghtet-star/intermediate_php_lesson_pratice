<?php


class php_10_constructor
{
    public function __construct($para,$para1,$para2){
        echo "hello I'm your boyfriend" . ($para+$para1+$para2) ;
    }
}

new php_10_constructor(30,4,32);