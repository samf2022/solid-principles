<?php
namespace App\InterfaceSegregation\Animals;

use App\InterfaceSegregation\Interfaces\FlyingAnimalInterface;
use App\InterfaceSegregation\Interfaces\SoundMakingAnimalInterface;

class Bird implements SoundMakingAnimalInterface, FlyingAnimalInterface {

    public function makeSound(): string
    {
        return 'Chirp';
    }

    public function fly()
    {
        return "Bird flying!";
    }
}