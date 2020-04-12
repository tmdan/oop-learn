<?php

class Dvigatel{
private $benzin;

    public function __construct($benzin){
    $this->benzin=$benzin;
}
    public function on(){
        echo "двигатель запущен";
    }

    public function off(){
        echo "двигатель заглушен";
    }

    public function moveKm(){
        $this->benzin=$this->benzin - 1;
    }
    public function getBenzin(){
        return $this->benzin;
    }

}
class Mashina{
    private $name;
    private $dvigatel;

    public function __construct($name,$dvigatel){
        $this->name=$name;
        $this->dvigatel=$dvigatel;
    }

    public function startDvigatel(){
        $this->dvigatel->on();
    }
    public function offDvigatel(){
        $this->dvigatel->off();
    }
    public function moveKm(){
        $this->dvigatel->moveKm();
    }
    public function getBenzin(){
        return $this->dvigatel->getBenzin();

    }
}

$car=new Mashina("BMW",new Dvigatel(5));
$car->startDvigatel();
$car->moveKm();
echo $car->getBenzin();
$car->moveKm();
echo $car->getBenzin();