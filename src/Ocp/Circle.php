<?php
namespace App\Ocp;
use App\Ocp\ShapeInterface;
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