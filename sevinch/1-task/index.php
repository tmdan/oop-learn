<?php

class cat{
    public $vote;
    public $breed;
    public $sex;
    public $woolColor;
    public $age;

    public function pechat(){
        echo $this->breed . $this->sex . $this->woolColor . $this->age;
    }
}

$peach=new cat();
$peach->vote="Мяу";
$peach->breed="Персидский кот";
$peach->sex="Мужской";
$peach->woolColor="Рыжий";
$peach->age="3";


$anfisa=new cat();
$anfisa->vote="Мяу";
$anfisa->breed="Сиамская кошка";
$anfisa->sex="Женский";
$anfisa->woolColor="Черный";
$anfisa->age="2";



$peach->pechat();
echo "<br>";
$anfisa->pechat();