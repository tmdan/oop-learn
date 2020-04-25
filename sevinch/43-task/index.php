<?php
interface CarInterface
{
    public function onEngine();

    public function offEngine();

    public function __construct(EngineInterface $engine);
}

interface EngineInterface{
   public function on();

   public function off();

}


class Showroom{
private $cars=[];

    public function addCar(CarInterface $cars){
        $this->cars[]=$cars;
    }

}
class Tractor implements CarInterface{
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
}

class Car implements CarInterface{
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
}


    class Truck implements CarInterface{
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
}
class SuperEngine implements EngineInterface {


    public function on(){
echo "Супер-двигатель запущен";
    }
    public function off(){
echo "Супер-двигатель остановлен";
    }
}

class Engine implements EngineInterface{

    public function on(){

        echo "Обычный-двигатель запущен";
    }
    public function off(){

        echo "Обычный-двигатель остановлен";
    }
}

$a11=new Engine;
$a22=new SuperEngine;
$showroom=new Showroom();
$showroom->addCar(new Car(new SuperEngine()));
$showroom->addCar(new Truck(new Engine()));
$showroom->addCar(new Tractor(new Engine()));

var_dump($a11->on());



