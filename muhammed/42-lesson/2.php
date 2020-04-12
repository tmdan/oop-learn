<?php



class Cat extends Animal {

    //У большество домашних котов есть имя, но не у всех диких животных. Это отличительная черта именно для кошки
    public $name;

    public function play(){
        echo "Играем в мяч";
    }

    public function __construct($class, $habitat, $name)
    {
        parent::__construct($class, $habitat);
        $this->name=$name;
    }
}

class Fish extends Animal {

    //У большество домашних котов есть имя, но не у всех диких животных. Это отличительная черта именно для кошки
    public $name;

}


$Mashka=new Cat('Хищники','Дом','Машка');


var_dump($Mashka);
