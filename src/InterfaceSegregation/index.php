<?php

use App\InterfaceSegregation\Animals\Bird;
use App\InterfaceSegregation\Animals\Dog;
use App\InterfaceSegregation\Interfaces\FlyingAnimalInterface;
use App\InterfaceSegregation\Interfaces\SoundMakingAnimalInterface;
use App\InterfaceSegregation\Interfaces\SwimmingAnimalInterface;

require_once __DIR__.'/../../vendor/autoload.php';

function animalActions($animal) {
    if ($animal instanceof SoundMakingAnimalInterface) {
        echo $animal->makeSound() . "\n";
    }
    if ($animal instanceof FlyingAnimalInterface) {
        echo $animal->fly() . "\n";
    }
    if ($animal instanceof SwimmingAnimalInterface) {
        echo $animal->swim() . "\n";
    }
}

// Creación de instancias y ejecución
$dog = new Dog();
$bird = new Bird();

echo "Dog actions:\n";
animalActions($dog);

echo "\nBird actions:\n";
animalActions($bird);

