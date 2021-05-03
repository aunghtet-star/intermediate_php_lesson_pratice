<?php
require_once "heinter.php";
require_once "sheInter.php";

class php_interface implements heinter,sheInter
{
    private $data;
    public function hegoToSchool($data)
    {
        $this->data = $data;
    }

    public function sheGotoSchool($data)
    {
        $this->data = $data;
    }
    public function outPut(){
            "<pre>".print_r(count($this->data)-1,true)."</pre>"
            ."<hr>";
    }
    public function busy(){
        echo "This person is busy with ". $this->data[count($this->data)-1]."<br>";
    }
}

$obj = new php_interface();
$heary = ['gun','pencil','pen'];
$obj->hegoToSchool($heary);
$obj->outPut();
$obj->busy();

$she = new php_interface();
$sheary = ['cosmetic','eyeshadow','gucci'];
$she->sheGotoSchool($sheary);
$she->outPut();
$she->busy();
