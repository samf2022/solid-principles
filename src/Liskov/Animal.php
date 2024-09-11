<?php

class Animal {
    public function makeSound() {
        return "Some sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Bark";
    }
}

function makeAnimalSound(Animal $animal) {
    echo $animal->makeSound();
}


$animal = new Animal();
makeAnimalSound($animal);  


$dog = new Dog();
makeAnimalSound($dog); 
