<?php
interface paPa{
    public function doIt();
    public function ditIt();
}
class MaMa{
    public function doneIt(){
        echo "I am doneIt";
    }
}
class sOn extends MaMa implements paPa {

    public function doIt()
    {
        echo "I am do It";
    }

    public function ditIt()
    {
        echo "I am did It";
    }
}
$obj = new sOn();
$obj->doneIt();