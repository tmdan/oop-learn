<?php


class SpaceShip
{
    private $name;
    private $speed;
    private $planet;

    public function getName()
    {
        return $this->name;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function __construct($name, $speed, $planet)
    {
        $this->name=$name;
        $this->speed=$speed;
        $this->planet=$planet;
    }

    public function getTime()
    {
        $time=0;
        $time=$this->planet->getDistance() / $this->speed;
        return $time;
    }

}

class Planet
{
    private $name;
    private $distance;

    public function getNamePl()
    {
        return $this->name;
    }

    public function getDistance()
    {
        return $this->distance;
    }

    public function __construct($name, $distance)
    {
        $this->name=$name;
        $this->distance=$distance;
    }
}


$Enterprice = new SpaceShip("Энтерпрайс", 50000, new Planet("Луна", 384400));

var_dump($Enterprice->getTime());
