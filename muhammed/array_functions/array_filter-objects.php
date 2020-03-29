<?php


class Human
{

    public function __construct($age, $name)
    {
        $this->name = $name;
        $this->age = $age;
    }

    //Возраст
    public $age;

    public $name;
}

$John = new Human(12, "Джон");
$Meloni = new Human(18, "Мелони");
$sanya = new Human(29, "Саня");
$irina = new Human(12, "Ирина");


$array = [$John, $Meloni, $sanya, $irina];


//Фунцкия беребирает всех людей в массиве и выводит на экран возрастные критерии
function access($item)
{
    return $item->age>12;
}


//функция принимает два аргумента:
//1. фунцию которая будет принимать каждый элемент из массива и выполнять с ним какие либо манипуляции
//2. Массив - каждый элемент которого будет перебран функией которая была переданна 1-м агрументом.
$newArray = array_filter($array, "access");

foreach ($newArray as $person){
    echo $person->name . "<br>";
}

//САМОСТОЯЛКА:

//Создать массив из объектов Студенты, какждый студент будет содержать имя, факультет.
//ФАКУЛЬТЕТЫ МОГУТ БЫТЬ: ИЭФ, КСИС,
//Отсортировать студентов по определенному факультету.

//PS > сделать с помощью foreach и array_map
