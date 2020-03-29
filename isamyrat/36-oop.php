<?php

$names=["Isa","Yana","Didar"];
$surnames=["Ivanow","Petrov","Sidorov"];
$nameofunivers=["BNTU","BGU","BGUIR"];
$nameoffacs=["IEF","FITU","KCIC"];
$predmets_name=["OOP","KC","TRPP"];
$predmets_value=[4,5,6];
$persons=[];

class Univer{
    public $nameofuniver;
    public $nameoffac;
    public $predmets;
}
class person{
    public $name;
    public $surname;
    public $univ;

}
class predmet{
    public $name_pred;
    public $value_pred;
}
for($i=0;$i<count($names);$i++){
    $persons[$i]=new person();
    $persons[$i]->name=$names[$i];
    $persons[$i]->surname=$surnames[$i];
    $persons[$i]->univ=new  Univer();
    $persons[$i]->univ->nameofuniver=$nameofunivers[$i];
    $persons[$i]->univ->nameoffac=$nameoffacs[$i];
    $persons[$i]->predmets=new predmet;
    $persons[$i]->predmets->name_pred=$predmets_name[$i];
    $persons[$i]->predmets->value_pred=$predmets_value[$i];
}

foreach ($persons as $person)
{
    echo $person->name;
    echo $person->surname;
    echo $person->univ->nameofuniver;
    echo $person->univ->nameoffac;
    echo $person->predmets->name_pred;
    echo $person->predmets->value_pred;echo "<br>";
}
