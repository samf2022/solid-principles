<?php
namespace App\Ocp\Shapes;
use App\Ocp\Shapes\ShapeInterface;
class Circle implements ShapeInterface
{
    private $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }

    public function area(){
        return pi() * pow($this->radius, 2);
    }
}