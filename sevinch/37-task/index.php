<?php

class Zdanie {
public $nazvanie;
public $specifik;
public $nalog;
public $vladelec;

public function oplata(){
return $this->vladelec->doxod*$this->nalog/100;
}
}

class Vladelec{
public $name;
public $doxod;
}


$s1=new zdanie;
$s1->nazvanie="Счастье здесь!";
$s1->specifik="Дом";
$s1->nalog=8;
$s1->vladelec="Севинч";
$s1->zdanie->vladelec=new Vladelec;
$s1->zdanie->vladelec->name="Севинч";
$s1->zdanie->vladelec->doxod=2000;

echo $s1->oplata();
