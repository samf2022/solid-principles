<?php

use App\Liskov\AnimalInterface;
use App\Liskov\Animals\Cat;
use App\Liskov\Animals\Dog;

require_once __DIR__.'/../../vendor/autoload.php';

function animalSound(AnimalInterface $animal) {
    echo $animal->makeSound();
}

$dog = new Dog();
$cat = new Cat();

animalSound($dog); // Output: Woof!
echo "<br>";
animalSound($cat); // Output: Meow!
