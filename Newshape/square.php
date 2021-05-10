<?php
namespace Newshape;

use interface_polymorphison\Shape;

class square implements Shape {
    private $width,$height;
    public function __construct($width,$height){
        $this->height = $height;
        $this->width = $width;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }
}