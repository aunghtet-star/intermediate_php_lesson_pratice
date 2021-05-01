<?php
class php_21_sleep_wakeup{
    public function __sleep(){
        echo "Hello,I'm sleep";
    }
    public function __wakeup(){
        echo "Hello,I'm wakeUp";
    }
}

$obj = new php_21_sleep_wakeup();
$sleep = serialize($obj);
unserialize($sleep);
