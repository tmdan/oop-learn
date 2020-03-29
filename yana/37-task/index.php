<?php


$title=["Белый дом","Морг", "Психбольница", "Офис Гугл", "Милый дом"];
$zdaniya=["Жилой дом","Административное здание", "Лечебное учреждение", "Социальное здание"];
$names=["Дидар", "Иса", "Севинч", "Мухаммед", "Яна"];

class building {
    public $name;
    public $spets;
    public $stavka = 30;
    public $owner;

    public function calc ()
    {
        $nalog = ($this->owner->dohod * $this->stavka / 100);
        return $nalog;
    }
}

class ow_ner {
    public $name;
    public $dohod;
}

$buildings=[];

for($i=0;$i<count($names);$i++){
    $buildings[$i]=new building;
    $buildings[$i]->name=$title[rand(0,4)];
    $buildings[$i]->spets=$zdaniya[rand(0,3)];
    $buildings[$i]->owner=new ow_ner;
    $buildings[$i]->owner->name=$names[$i];
    $buildings[$i]->owner->dohod=rand(100, 1500);

    echo "В здании - " .  $buildings[$i]->name . ", которое является типом здания - " . $buildings[$i]->spets . ", живет: " . $buildings[$i]->owner->name . ", с зарплатой:  " . $buildings[$i]->owner->dohod . " и заплатит за него налог - ";
    echo $buildings[$i]->calc();
    echo "<br>";
}
