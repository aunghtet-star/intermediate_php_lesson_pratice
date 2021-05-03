<?php
 class php_4_const_variable{
     public const DB_HOST = 'localhost';
     public function __construct(){
         echo self::DB_HOST;
     }
 }
 $obj = new php_4_const_variable();
