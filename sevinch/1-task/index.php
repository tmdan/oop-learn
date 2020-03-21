<?php

class cat{
    public $vote;
    public $breed;
    public $sex;
    public $woolColor;
    public $age;

    public function pechat(){
        echo $this->vote . $this->breed . $this->sex . $this->woolColor . $this->age;
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

class dog{
    public $vote;
    public $breed;
    public $sex;
    public $woolColor;
    public $age;

    public function pechat()
    {
        echo $this->vote . $this->breed . $this->sex . $this->woolColor . $this->age;
    }
}

$reks=new dog;
$reks->vote="Гав";
$reks->breed="Немецка овчарка";
$reks->sex="Мужской";
$reks->woolColor="Желто-черный";
$reks->age="3";

$barsik=new dog;
$barsik->breed="Хаски";
$barsik->sex="Мужской";
$barsik->woolColor="Черно-белый";
$barsik->age="3";

$peach->pechat();
echo "<br>";
$anfisa->pechat();
echo "<br>";
$reks->pechat();
echo"<br>";
$barsik->pechat();