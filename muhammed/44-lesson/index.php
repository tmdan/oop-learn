<?php

abstract class Animal
{
    protected $name;
    public abstract function makeSound();
}


class Cat extends Animal
{

    public function makeSound()
    {
        echo "Кошка мяукает";
    }

    public function wakeOut(){

    }
}


class Snake extends Animal
{

    public function makeSound()
    {
        echo "Змея шипит";
    }
}

class Dog extends Animal
{
    public function makeSound()
    {
        echo "Собака гавкает";
    }

}


class Human
{
    private $animal;

    public function setAnimal(Animal $animal)
    {
        $this->animal = $animal;
    }

    public function animalMakeSound()
    {
        $this->animal->makeSound();
    }
}

$Ivan = new Human();
$Ivan->setAnimal(new Cat());
$Ivan->setAnimal(new Snake());
$Ivan->setAnimal(new Dog());
$Ivan->animalMakeSound();
