<?php

class Country {

    private $name;
    private $population=[];

    public function getName(){
        return $this->name;
    }

    public function getPopulation(){
        return count($this->population);
    }

    public function getAveregAge(){

    }

    public function __constract($population){

        $this->population=array_merge($this->population,$population);

    }
}

class Human {

    private $name;
    private $age;

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }


    public function __constract($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
}

$uz=new Country([
    new Human("Мухаммед",rand(1,45)),
    new Human("Севинч",rand(1,80)),
    new Human("Яна",rand(1,50)),
]);


var_dump($uz);
