<?php

//2 часть домашки:
//1. Создать объект Здание, объект будет содержать следующие свойства:
//-Название (string)
//-Спецификация (string)(жилой дом, административное здание, социальное здание)
//-Налоговая ставка (int)-в процентах - обычная переменная которая хранит число(далее оно будет необходима для рассчета налога на данный объект недвижимости)
//-МЕТОД(calc) - который нам вернет итогувую сумму налога(которая высчитывается из сумму дохода владельца данного объекта недвижимости) -т . е . простыми словами берете доход который храниться в свойстве Владелец (object)->доход,  допустим он 400 руб, далее умножаете его на Налоговая ставка (int)и делите на 100.
//- Владелец (object)-это отдельный объект который содержит:
//2. Владелец
//- Имя (string)
//-Доход (int)


$names = ["Cottege", "Plan", "Flat"];
$scpecs = ["House", "Hakimlik", "Bank"];
$name0f_owners = ["Ivanow", "Petrov", "Sidorov"];
$owners = [];

class buidl
{
    public $name;
    public $Spec;
    public $nalog;
    public $owner;

    public function calc()
    {
        $un = 0;
            $un = $this->owner->point * $this->nalog;
            $un = $un / 100;
            return $un;
    }


    public function __construct($name, $Spec, $nalog,$owner )
    {
        $this->owner=$owner;
        $this->name=$name;
        $this->nalog=$nalog;
        $this->Spec=$Spec;
    }
}
class Owners
{
    public $name_ofown;
    public $point;

    public function __construct($name_ofown, $point)
    {
        $this->name_ofown=$name_ofown;
        $this->point=$point;
    }
}


for ($i = 0; $i < count($names); $i++) {
    $owners[$i] = new buidl(
        $names[rand(0, 3)],
        $scpecs[rand(0, 3)],
        rand(1, 100),
        new Owners($name0f_owners[rand(0, 3)], rand(100, 999)) );
}


for ($i = 0; $i < count($owners); $i++) {
    echo $owners[$i]->name;
    echo $owners[$i]->Specs;
    echo $owners[$i]->nalog;
    echo $owners[$i]->Owner->name_ofown;
    echo $owners[$i]->Owner->point;
    echo "<br>";
    echo "Stawka nalogowaya";
    echo $owners[$i]->calc();
    echo "<br>";
}
