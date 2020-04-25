<?php

class ShowRoom
{
    public $cars;

    public function addCar(CarInterface $car)
    {
        $this->cars[]=$car;
    }
}


interface CarInterface
{
    public function onEngine();
    public function offEngine();
    public function __construct(EngineInterface $engine);
}


interface EngineInterface
{
    public function on();
    public function off();
}


class SuperEngine implements EngineInterface
{
    public function on()
    {
       echo "Супер двигатель запущен";
    }

    public function off()
    {
        echo "Супер двигатель заглушен";
    }
}




class anotherEngine  implements EngineInterface
{
    public function on()
    {
        echo "Другой двигатель запущен";
    }

    public function off()
    {
        echo "Другой двигатель заглушен";
    }

}

class StandartEngine implements EngineInterface
{
    public function on()
    {
        echo "Стандарт двигатель запущен";
    }

    public function off()
    {
        echo "Другой двигатель заглушен";
    }
}

class Tractor implements CarInterface
{
    private $engine;

    public function onEngine()
    {
       $this->engine->on();
    }

    public function offEngine()
    {
        $this->engine->off();
    }

    public function __construct(EngineInterface $engine)
    {
        $this->engine=$engine;
    }

    public function vezti_drova()
    {
        //везет дрова;
    }

}

class Car implements CarInterface
{
    private $engine;

    public function onEngine()
    {
        $this->engine->on();
    }

    public function offEngine()
    {
        $this->engine->off();
    }

    public function __construct(EngineInterface $engine)
    {
        $this->engine=$engine;
    }

    public function vezti_v_club()
    {
        //везет девочек в клуб
    }

}

class Truck implements CarInterface
{
    private $engine;

    public function onEngine()
    {
        $this->engine->on();
    }


    public function offEngine()
    {
        $this->engine->off();
    }


    public function __construct(EngineInterface $engine)
    {
        $this->engine=$engine;
    }

    public function zagruzit_gruz()
    {
        //загружен груз;
    }
}



$car_one = new Tractor(new StandartEngine());
$car_two = new Car(new SuperEngine());
$car_three = new Truck( new anotherEngine());

var_dump($car_three);

$mySalon = new ShowRoom();
$mySalon->addCar($car_one);
$mySalon->addCar($car_two);
$mySalon->addCar($car_three);



foreach ($mySalon->cars as $car){
    $car->onEngine();
}
