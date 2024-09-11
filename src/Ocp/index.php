<?php
require_once __DIR__.'/../../vendor/autoload.php';

use App\Ocp\AreaCalculator;
use App\Ocp\Shapes\Circle;
use App\Ocp\Shapes\Square;


$square = new Square(10);
$circel = new Circle(5);
$calculator = new AreaCalculator();

echo $calculator->calculateArea($square);
echo "<br>";
echo $calculator->calculateArea($circel);