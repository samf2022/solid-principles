<?php
namespace App\Ocp;

class AreaCalculator
{
    public function calculateArea(ShapeInterface $shape)
    {
        return $shape->area();
    }
}