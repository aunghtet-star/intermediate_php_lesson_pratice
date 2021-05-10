<?php

require_once "vendor/autoload.php";

use Middleware\Redmi;
use Autoload\Help;
use App\Hello;
use App\ThanMaNaing;
use Controller\controller;
use Newshape\circle;
use Newshape\square;
use Interface_polymorphison\Shape;

class Index{
    public function __construct(){

        $circle = new circle(30);
        echo $circle->getArea();

        /*$k30 = new Redmi();
        $k30->K30();

        $help = new Help();
        $help->Helper();

        $hello = new Hello();
        $hello->Hell();

        $Than = new ThanMaNaing();
        $Than->KyukMaNaing();

        $con = new controller();
        $con->conTrol();*/
    }
}

$index = new Index();
