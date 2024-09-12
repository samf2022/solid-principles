<?php
namespace App\Liskov;
use App\Liskov\AnimalInterface;
use App\Liskov\Animals\Dog;

class AnimalSound{
    public function __construct(AnimalInterface $animal)
    {
        echo $animal->makeSound();
    }
}