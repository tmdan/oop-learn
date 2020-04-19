<?php

/**
 * Class Car
 */
class Car {

    private $engine;

    public function __construct(Engine $engine)
    {
        $this->engine=$engine;
    }

    public function startEngine(){
        $this->engine->on();
    }


    public function offEngine(){
        $this->engine->off();
    }
}



/**
 * Interface Engine
 */
Interface Chaynik {
    public function on():void;
    public function off():void;
}

class SamusungChaykin implements  Chaynik {

    public function on(): void
    {
        // TODO: Implement on() method.
    }

    public function off(): void
    {
        // TODO: Implement off() method.
    }
}



/**
 * Interface Engine
 */
Interface Engine {
  public function on():void;
  public function off():void;
  public function getOld():int;
}




class SuperEngine implements Engine {

   public function on(): void
   {
       echo "Запустился супер двигатель";
   }

    public function off(): void
    {
        // TODO: Implement off() method.
    }

    public function getOld(): int
    {
        // TODO: Implement getOld() method.
    }
}



class Obud implements Engine{

    public function on(): void
    {
        echo "Запустился Обычный двигатель";
    }

    public function off(): void
    {
        // TODO: Implement off() method.
    }

    public function getOld(): int
    {
        // TODO: Implement getOld() method.
    }
}




class Truba {

    public function on(): void
    {
        echo "Запустился Обычный двигатель";
    }

    public function off(): void
    {
        echo "Выключается Обычный двигатель";
    }

    public function getOld(): int
    {
        // TODO: Implement getOld() method.
    }
}




$car2=new Car(new SuperEngine());
$car=new Car(new SamusungChaykin());


//var_dump($car2->startEngine());
var_dump($car->offEngine());
