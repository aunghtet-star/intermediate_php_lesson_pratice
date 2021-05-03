<?php
class Index{
    private static $number =3;
    private static $assign;

    private function __construct(){
        self::$number=5;
    }
    public function getAssign(){
        if (self::$assign == null ){
            self::$assign = new Index;
        }
        return self::$assign;
    }
    public function getNum(){
        return self::$number;
    }

}
$ind = Index::getAssign();
echo $ind->getNum();
