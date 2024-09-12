<?php

use App\Liskov\Animals\Cat;
use App\Liskov\Animals\Dog;
use App\Liskov\AnimalSound;

require_once __DIR__.'/../../vendor/autoload.php';

$dog = new Dog();
$cat = new Cat();
$makeSound = new AnimalSound($dog);
echo "<br>";
$makeSound = new AnimalSound($cat);
