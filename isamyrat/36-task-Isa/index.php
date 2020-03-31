<?php

$names = ["Isa", "Yana", "Didar"];
$surnames = ["Ivanow", "Petrov", "Sidorov"];
$nameofunivers = ["BNTU", "BGU", "BGUIR"];
$nameoffacs = ["IEF", "FITU", "KCIC"];
$predmets_name = ["OOP", "KC", "TRPP"];
$persons = [];

class person
{
    public $name;
    public $surname;
    public $univ;
    public function calc(){
        $un=0;

        foreach ($this->univ->predmets as $predmet){
            $un=+ $predmet->value_pred;
        }
        $un=$un/count($this->univ->predmets);
        return $un;

    }
}

class Univer
{
    public $nameofuniver;
    public $nameoffac;
    public $predmets;
}

class predmet
{
    public $name_pred;
    public $value_pred;
}

for ($i = 0; $i < count($names); $i++) {
    $persons[$i] = new person();
    $persons[$i]->name = $names[rand(0, 3)];
    $persons[$i]->surname = $surnames[rand(0, 3)];
    $persons[$i]->univ = new  Univer();
    $persons[$i]->univ->nameofuniver = $nameofunivers[rand(0, 3)];
    $persons[$i]->univ->nameoffac = $nameoffacs[rand(0, 3)];
    for ($n = 0; $n < count($predmets_name); $n++) {
        $persons[$i]->univ->predmets[$n] = new predmet;
        $persons[$i]->univ->predmets[$n]->name_pred = $predmets_name[$n];
        $persons[$i]->univ->predmets[$n]->value_pred = rand(3, 10);
    }
}
for ($i = 0; $i < count($persons); $i++) {
    echo $persons[$i]->name;
    echo $persons[$i]->surname;
    echo $persons[$i]->univ->nameofuniver;
    echo $persons[$i]->univ->nameoffac;
    for ($n = 0; $n < count($persons); $n++) {
        echo $persons[$i]->univ->predmets[$n]->name_pred;
        echo $persons[$i]->univ->predmets[$n]->value_pred;
        echo "<br>";
    }
    echo "Srednaya bal";
    echo $persons[$i]->calc();
    echo "<br>";
}

