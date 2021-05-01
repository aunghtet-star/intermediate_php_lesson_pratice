<?php

class member{
   public $name = "aung aung";
   public $age =21;
   public $edu = "fouth IT";
   public function friendCount(){
       echo "I am aung aung";
   }
}

class php_12_gold_member extends member
{


}
class test extends member{ };
$obj = new php_12_gold_member();
echo $obj->name;
$obj->friendCount();
$ibj = new test();
$ibj->friendCount();