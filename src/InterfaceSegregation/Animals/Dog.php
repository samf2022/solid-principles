<?php
namespace App\InterfaceSegregation\Animals;

use App\InterfaceSegregation\Interfaces\SoundMakingAnimalInterface;
use App\InterfaceSegregation\Interfaces\SwimmingAnimalInterface;

class Dog implements SoundMakingAnimalInterface, SwimmingAnimalInterface
{
    public function makeSound(): string
    {
        return 'Woof';
    }

    public function swim() {
        return "Dog paddling!";
    }
}