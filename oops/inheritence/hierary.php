<?php
class Animal {
    protected $species;

    public function getSpecies() {
        return $this->species;
    }

    public function setSpecies($species) {
        $this->species = $species;
    }
}

class Dog extends Animal {
    protected $breed;

    public function getBreed() {
        return $this->breed;
    }

    public function setBreed($breed) {
        $this->breed = $breed;
    }
}

class Cat extends Animal {
    protected $color;

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }
}

$dog = new Dog();
$dog->setSpecies("Canine");
$dog->setBreed("Labrador");

$cat = new Cat();
$cat->setSpecies("Feline");
$cat->setColor("Gray");

echo "Dog Species: " . $dog->getSpecies() . ", Breed: " . $dog->getBreed();
echo "Cat Species: " . $cat->getSpecies() . ", Color: " . $cat->getColor();