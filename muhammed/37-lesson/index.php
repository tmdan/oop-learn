<?php

$names = ["Мухаммед", "Яна", "Дидар", "Севинч", "Иса"];
$lastNames = ["Зеленский", "Пупкина", "Лукашенко", "Ельцин", "Путин"];
$uni = ["БГТУ", "БГМУ", "БНТУ", "БГАТУ"];
$fac = ["Экономический", "Физический", "Юридический", "Химический", "Биологический"];
$pred=["Физика", "Химия", "Математика", "Биология", "Физкультура"];
$gr=[1, 2, 3, 5, 9, 10];

class Student {
    public $name;
    public $lastname;
    public $univer;

    public function calc(){

    }
}

class Univer {
    public $name;
    public $fac;
    public $predmets;
}

class Pred {
    public $name;
    public $rent;
}

$students=[];

for($i=0;$i<count($names);$i++){
    $students[$i]=new Student;
    $students[$i]->name=$names[rand(0,4)];
    $students[$i]->lastname=$lastNames[rand(0,4)];
    $students[$i]->univer=new Univer;
    $students[$i]->univer->name=$uni[rand(0,4)];
    $students[$i]->univer->fac=$fac[rand(0,4)];

    for($n=0;$n<count($pred);$n++){
        $students[$i]->univer->predmets[$n]=new Pred;
        $students[$i]->univer->predmets[$n]->name=$pred[$n];
        $students[$i]->univer->predmets[$n]->rent=rand(3,10);
    }
}

echo "<pre>";
var_dump($students);
echo "</pre>";
