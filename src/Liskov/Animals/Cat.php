<?php
namespace App\Liskov\Animals;

use App\Liskov\AnimalInterface;

class Cat implements AnimalInterface
{
    public function makeSound(): string
    {
        return 'Meow';
    }
}