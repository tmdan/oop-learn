<?php
class Dogs
{
    public $name;
    public $sex;
    public $age;
    public $breed;


}

$Pitbul=new Dogs();

$Pitbul->name="Верный";
$Pitbul->sex="Male";
$Pitbul->age="5";
$Pitbul->breed="Turkmen";
echo $Pitbul->name . $Pitbul->sex . $Pitbul->age . $Pitbul->breed;

?>