<?php
namespace App\Liskov\Animals;
use App\Liskov\AnimalInterface;

final class Dog implements AnimalInterface
{
    public function makeSound(): string
    {
        return 'Woof';
    }
}