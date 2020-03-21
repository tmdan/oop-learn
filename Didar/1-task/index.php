<?php
class Animal
{
    public $name;
    public $age;
    public $color;
    public $breed;
public function golos()
{
    echo "gav gav";
}

    public function vyvod()
    {
        echo "Name: ";
        echo $this->name;
        echo "<br>";
        echo "Age: ";
        echo $this->age;
        echo "<br>";
        echo "color: ";
        echo $this->color;
        echo "<br>";
        echo "Breed: ";
        echo $this->breed;
        echo "<br>";
    }
}

$dog = new Animal();

$dog->name = "Garagoz";
$dog->age = "2";
$dog->color = "Gonur";
$dog->breed ="Alabay";

$dog->vyvod();
echo "<br>";
$dog->golos();
?>