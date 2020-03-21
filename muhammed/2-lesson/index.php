<?php

class Cat {

    public $name;
    public $eyes;
    public $hearColor;
    public $voice;
    private $owner;

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

    

    public function getOwner(){
        return strtoupper($this->owner);
    }

    public function setOwner($name){
        if($name!="Debil"){
            $this->owner=$name;
        }
    }

}


$orange = new Cat();

$orange->name="Orange";
$orange->eyes="Blue";
$orange->hearColor="Orange";
$orange->voice="Myawwwwww";
//$orange->owner="HHHH"; Не могу



$orange->print_1();
echo "<br>";
echo $orange->getOwner();
echo "<br>";
$orange->setOwner("hello");
echo "<br>";
echo $orange->getOwner();
echo "<br>";
