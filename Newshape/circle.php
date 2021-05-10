<?php
namespace Newshape;

use interface_polymorphison\Shape;

class circle implements Shape {
    private $radius;
    public function __construct($radius){
        $this->radius = $radius;
    }

    public function getArea()
    {
        return $this->radius * $this->radius * pi();
    }
}