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

        foreach ($this->Owner as $Owners) {
            $un = $Owners->point * $this->nalog;
            $un = $un / 100;
            return $un;
        }
    }
}
class Owners
{
    public $name_ofown;
    public $point;
}
for ($i = 0; $i < count($names); $i++) {
    $owners[$i] = new buidl();
    $owners[$i]->name = $names[rand(0, 3)];
    $owners[$i]->Specs = $scpecs[rand(0, 3)];
    $owners[$i]->nalog = rand(0, 100);
    $owners[$i]->Owner = new Owners();
    $owners[$i]->Owner->name_ofown = $name0f_owners[rand(0, 3)];
    $owners[$i]->Owner->point = rand(0, 999);
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
