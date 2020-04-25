<?php

interface AnimalInterface
{
    public function makeSound();

    public function move();
}


class Animal implements AnimalInterface
{

    public function makeSound()
    {
        // TODO: Implement makeSound() method.
    }

    public function move()
    {
        // TODO: Implement move() method.
    }
}


class Cat extends Animal
{

    public function makeSound()
    {
        echo "Кошка мяукает";
    }
}


class Snake extends Animal
{

    public function makeSound()
    {
        echo "Змея шипит";
    }
}


class Human extends Notify
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
$Ivan->animalMakeSound();


abstract class Notify
{
    protected $channel;

    public function setChannel(Notifieble $notify)
    {
        $this->channel = $notify;
    }

    public function sendMessage()
    {
        $this->channel->sendMessage("Hello");
    }
}


interface Notifieble
{
    public function sendMessage(string $message);
}


class SmsNotify implements Notifieble
{
    public function sendMessage(string $message)
    {
        echo "Отправленно SMS c текстом" . $message;
    }
}


class TelegramNotify implements Notifieble
{
    public function sendMessage(string $message)
    {
        echo "Отправленно сообщение в телеграм c текстом" . $message;
    }
}


$Ivan->setChannel(new SmsNotify());
$Ivan->sendMessage("Привет");
