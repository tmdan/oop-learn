<?php

class Student
{

    private $name;
    private $Name2;
    private $stip;
    private $zp;

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        return $this->name = $name;
    }

    public function getName2()
    {
        return $this->Name2;
    }

    public function setName2(string $Name2)
    {
        return $this->Name2 = $Name2;
    }


    public function set_stip($stip)
    {
        return $this->stip = $stip;
    }

    public function set_zp($zp)
    {
        return $this->zp = $zp;
    }


    public function getFullName()
    {
        return "Полное имя студента: " . $this->name . " " . $this->Name2;
    }

    public function calculate()
    {
        $dohod = $this->stip + $this->zp;
        return "Весь доход студента составляет: " . $dohod;
    }
}


$Petya = new Student();


$Petya->setName("Petya");

$Petya->setName2("Pupkin");

$Petya->set_stip(500);

$Petya->set_zp(300);


echo $Petya->getFullName();
echo "<br>";
echo $Petya->calculate();