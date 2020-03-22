<?php

//
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
//
//if(is_array($array1)){
//    var_dump($array1) ; echo " - это массив";
//} else {
//    echo "Это не массив"; echo "<br>";
//}
//
//
//
//if(is_float($float)){
//    echo "Это число с плавающей запятой";
//} else {
//    echo "Это число не с  плавающей запятой";echo "<br>";
//}



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

$names=["Muhammed","Yana", "Dudar", "Sevinch"];
$persons=[];

class person{
    public $name;
}

for($i=0;$i<count($names);$i++){
    $persons[$i]=new Person();
    $persons[$i]->name=$names[$i];
}





















//Массивы в php можно создавать двумя способами:
//1. C помощью функции array() - которая принимает на вход элементы будущего массива и возвращает нам итоговый массив
//2. C помощью квадратных скобок - []

//1 вариант создания массива
//echo "Первый массив: "."<br>";
//
//$array1=array(1,2,3,4,5,6,7,8,9,10);
//echo $array1[0]; echo "<br>";


