<?php

/*
Примитивные типы языка PHP
*/


//class test{
//
//}
//
//
//$string="Это строка";
//$float=12.5;
//$boolean=true;
//$array1=[1,2,3,4,5];
//$array2=array(1,2,4,5);
//$null=null;
//$object = new test();
//


/*
 * Проверка типов в языке PHP
*/

//if(is_array($array1)){
//    var_dump($array1) ; echo " - это массив";
//} else {
//    echo "Это не массив"; echo "<br>";
//}

//if(is_float($float)){
//    echo "Это число с плавающей запятой";
//} else {
//    echo "Это число не с  плавающей запятой";echo "<br>";
//}


/*
 * Массивы
*/

//$array=[1,2,3,4,5];

//for($i=0;$i<count($array);$i++){
//    echo $array[$i];
//}

//$arrayAssoc = [
//    "name"=>"Muhammed",
//    "old"=>29,
//    "hearColor"=>"black"
//];

//foreach ($arrayAssoc as $key=>$value){
//    echo "Ключ:". $key; echo "    ";
//    echo "Значение:". $value; echo "<br>";
//}

//foreach ($array as $value){
//    echo $value;
//}

//$stack = array("orange", "banana");
//array_push($stack, "apple", "raspberry");
//print_r($stack);


//Массивы объектов
{

//[
//    {"name"=>"Muhammed", "kurs"=>2, "univer"=>"BSUIR"},
//    {"name"=>"Yana", "kurs"=>3, "univer"=>"BNTU"},
//]
    $names = ["Muhammed", "Yana", "Dudar", "Sevinch"];

    $persons = [];

    class person
    {
        public $name;
    }

    for ($i = 0; $i < count($names); $i++) {
        $persons[$i] = new Person();
        $persons[$i]->name = $names[$i];
    }

    for ($i = 0; $i < count($names); $i++) {
        echo $persons[$i]->name;
    }

    foreach ($persons as $person) {
        echo $person->name;
    }

}




//Массивы в php можно создавать двумя способами:
//1. C помощью функции array() - которая принимает на вход элементы будущего массива и возвращает нам итоговый массив
//2. C помощью квадратных скобок - []

//1 вариант создания массива
//echo "Первый массив: "."<br>";
//
//$array1=array(1,2,3,4,5,6,7,8,9,10);
//echo $array1[0]; echo "<br>";


