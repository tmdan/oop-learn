<?php

$names=["Мухаммед","Яна", "Дидар", "Севинч", "Иса"];
$lastNames=["Зеленский", "Пупкина", "Лукашенко", "Ельцин", "Путин"];
$uni=["БГТУ","БГМУ", "БНТУ", "БГАТУ"];
$fac=["Экономический","Физический", "Юридический", "Химический", "Биологический"];

$students=[];

class univer{
    public $name;
    public $facult;
}


class student{
    public $name;
    public $lName;
    public $univ;
}

for($i=0;$i<count($names);$i++){
    $students[$i]=new student();
    $students[$i]->name=$names[$i];
    $students[$i]->lName=$lastNames[$i];
    $students[$i]->univ=new univer();
    $students[$i]->univ->name=$uni[$i];
    $students[$i]->univ->facult=$fac[$i];
}
