<?php
namespace App\Ocp;

use App\Ocp\Shapes\ShapeInterface;

class AreaCalculator
{
    public function calculateArea(ShapeInterface $shape)
    {
        return $shape->area();
    }
}