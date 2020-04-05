<?php

class Car
{
    private $name;
    private $engine;


    public function __construct($name, $engine){
        $this->name=$name;
        $this->engine=$engine;
    }

    public function moving ()
    {
        if ($this->engine->getBenz() < 1)
        {
            $this->addBenzInCar(2);
            echo "Бак пуст.";
            echo "<br>";
        }
        else
        {
            $this->engine->burnBenz();
        }
    }


    public function addBenzinCar($litr)
    {
        $this->engine->addBenz($litr);
        echo "Добавлено " . $litr . " литра бензина в бак.";
        echo "<br>";
    }
}

class Engine
{
    private $benz;

    public function getBenz ()
    {
        return $this->benz;
    }

    public function burnBenz ()
    {
            $this->benz-=1;
            echo "Вы проехали 1 километр и сожгли 1 литр бензина";
            echo "<br>";
    }

    public function addBenz ($litr)
    {
        $this->benz+=$litr;
    }

    public function __construct($benz)
    {
        $this->benz=$benz;
    }
}

$myCar = new Car("BMW", new Engine(5));
$myCar->moving();
$myCar->moving();
$myCar->moving();
$myCar->moving();
$myCar->moving();
$myCar->moving();
$myCar->moving();
$myCar->moving();
$myCar->moving();
var_dump($myCar);
$myCar->moving();
$myCar->moving();
$myCar->moving();