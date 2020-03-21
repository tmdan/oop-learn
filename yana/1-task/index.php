<?php

class Cat{
    public $name;
    public $eyes;
    public $hearColor;
    public $voice;

    public function print_1(){
        echo "Cat's name: ";
        echo $this->name;
        echo "<br>";
        echo "Color eyes: ";
        echo $this->eyes;
        echo "<br>";
        echo "Color hear: ";
        echo $this->hearColor;
        echo "<br>";
        echo "Voice: ";
        echo $this->voice;
    }
}

$orange= new Cat();

$orange->name="Orange";
$orange->eyes="Blue";
$orange->hearColor="Orange";
$orange->voice="Myawwwwww";

$orange->print_1();
