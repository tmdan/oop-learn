<?php

Interface EngineInterface
{
    public function on();
    public function off();
}

Interface CarInterface
{
    public function onEngine();
    public function offEngine();
    public function __construct(EngineInterface $engine);
}


class ShowRoom
{
    private $cars = [];

    //Добавить машину
    public function addCar(CarInterface $car)
    {
        $this->cars += $car;
    }
}

$carShowRoom=new ShowRoom();
