<?php

$names=["Мухаммед","Яна", "Дидар", "Севинч", "Иса"];
$lastNames=["Зеленский", "Пупкина", "Лукашенко", "Ельцин", "Путин"];
$uni=["БГТУ","БГМУ", "БНТУ", "БГАТУ"];
$fac=["Экономический","Физический", "Юридический", "Химический", "Биологический"];
$pred=["Физика", "Химия", "Математика", "Биология", "Физкультура"];
$gr=[1, 2, 3, 5, 9, 10];

$students=[];

class subject {
    public $name;
    public $grade;
}


class univer{
    public $name;
    public $facult;
    public $subjects;
}


class student{
    public $name;
    public $lName;
    public $univ;
}

for($i=0;$i<count($names);$i++){
    $students[$i]=new student;
    $students[$i]->name=$names[$i];
    $students[$i]->lName=$lastNames[$i];
    $students[$i]->univ=new univer;
    $students[$i]->univ->name=$uni[rand(0,5)];
    $students[$i]->univ->facult=$fac[rand(0,5)];
    for($j=0;$j<3;$j++) {
        $students[$i]->univ->subjects[$j] = new subject;
        $students[$i]->univ->subject[$j]->name = $pred[rand(0, 5)];
        $students[$i]->univ->subject[$j]->grade = $gr[rand(0, 5)];
    }
}
