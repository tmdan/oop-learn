<?php

class animal{
    public $name;
    public $vote;
    public $breed;
    public $sex;
    public $woolColor;
    public $age;

    public function golos(){
        echo $this->vote;
    }
}

$peach=new animal;
$peach->name="Персик";
$peach->vote="Мяу";
$peach->breed="Персидский кот";
$peach->sex="Мужской";
$peach->woolColor="Рыжий";
$peach->age="3";

$reks=new animal;
$reks->vote="Гав";
$reks->name="Рекс";
$reks->breed="Немецка овчарка";
$reks->sex="Мужской";
$reks->woolColor="Желто-черный";
$reks->age="3";

echo "Имя: ".$reks->name;
echo "<br>";
$reks->golos();

echo "<br>";

echo "Имя: ".$peach->name;
echo "<br>";
$peach->golos();



