<?php


class Car
{
    private $namecar;
    private $car_model_name;
    private $max_speed;
    public $engine;


    public function on(){
        $this->engine->run();
    }


    public function off(){
        $this->engine->off();
    }

    public function getOldInfo(){
        return $this->engine->getOld();
    }


    public function getEngineMoz(){
        return $this->engine->moz;
    }

    public function setNamecar($namecar)
    {
        if (is_string($namecar)) {
            $this->namecar = $namecar;
        }
    }

    public function getNamecar()
    {
        return $this->namecar;
    }

    public function setCar_model_car($car_model_name)
    {
        $this->car_model_name = $car_model_name;
    }

    public function getCar_model_car()
    {
        return $this->car_model_name;
    }

    public function setmax_speed($max_speed)
    {
        if($this->speedCheck($max_speed))
        {
            $this->max_speed=$max_speed;
        }

        $this->max_speed = $max_speed;
    }


    public function getmax_speed(int $max_speed)
    {
        $this->max_speed = $max_speed;
    }


    private function speedCheck($max_speed)
    {
        if (is_integer($max_speed) && $max_speed > 410 && $max_speed < 10)
        {
           return true;
        }
        else
        {
            return false;
        }
    }
}




class Engine{

    private $old;
    public $moz;

    public function run(){
        echo "Двигатель запущен";
    }

    public function off(){
        echo "Двигатель заглущен";
    }

    public function getOld(){
        return $this->old ."л";
    }

    public function setOld($old){
        return $this->old=$old;
    }

}


//Создаю двигатель на заводе
$engine=new Engine;
//Устанавливаю ограничение по мощности двигателя на заводе
$engine->moz=245;

//Заливаем масло с помощью клапана - СЕТТЕРА
$engine->setOld(20);

//Создаем машину
$car=new Car;
//Установливаю двигатель
$car->engine=$engine;


echo $car->on();
echo $car->off();
echo $car->getOldInfo();







