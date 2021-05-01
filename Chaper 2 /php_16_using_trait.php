<?php
trait member{
    public function doIt(){
        echo "Hello , I'm do it method";
    }
}
trait goldMember{
    public function Gold(){
        echo "Hello , I'm Gold";
    }
}
trait special{
    use member,goldMember;
}
class php_15_using_trait{
    use special;
}

$obj = new php_15_using_trait();
$obj->doIt();
$obj->Gold();