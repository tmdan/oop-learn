<?php

class Engine{

    private $azot;

    public function on(){
        echo "Двигатель запущен";
    }

    public function off(){
        echo "Двигатель заглушен";
    }
}


class Car {

    /**
     * Двигатель
     * @var Engine
     */
    public $engine;

    //Двери
    public $doors;

    //Окна
    public $windows;

    //Цвет
    public $colors;

    public function setColor($colors){
        $this->color=$colors;
    }

    public function setEngine($engine){
        $this->engine=$engine;
    }

    public function on(){
        $this->engine->on();
    }

    public function off(){
        $this->engine->off();
    }

}


//Спортивная машинка
class SportCar extends Car{
    //Азотный ускоритель.
    public $toorbo;
}


//Комбаин для сбора пщеницы
class Harvester extends Car{
    //Аппарат для сбора пщеницы.
    public $gettingTools;
}



