<?php

abstract class Transport
{
    protected $benzin;
    public function __construct($benzin)
    {
        $this->benzin=$benzin;
    }
    public abstract function move();
    public function zalit_benzin()
    {
        echo "Бензин залит в бак в количестве - ".$this->benzin." литров <br>";
    }
}

class Car extends Transport
{
    public function move()
    {
        echo "Машина поехала<br>";
    }
}

class Airplane extends Transport
{
    public function move()
    {
        echo "Самолет полетел<br>";
    }
}

$myCar=new Car(20);
$myCar->zalit_benzin();
$myCar->move();

$myAirplane=new Airplane(1000);
$myAirplane->zalit_benzin();
$myAirplane->move();

