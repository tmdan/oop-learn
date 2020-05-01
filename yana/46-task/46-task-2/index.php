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
$myAirplane=new Airplane(1000);

$transp = [];

$transp[0]=$myCar;
$transp[1]=$myAirplane;

foreach ($transp as $one_tr)
{
    $one_tr->zalit_benzin();
    $one_tr->move();
}

