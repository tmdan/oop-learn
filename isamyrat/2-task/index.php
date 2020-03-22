<?php
class Student
{
private $Name;
private $Surname;
private $Stipendi;
private $zp;

    public function setName($Name)
    {
       $this->Name = $Name;
    }
    public function getName()
    {
        return $this->Name;
    }

    public function setSurname($Surname)
    {
        $this->Surname = $Surname;
    }

    public function getSurname()
    {
        return $this->Surname;
    }

    public function setStipendia($Stipendi)
    {
        $this->Stipendi = $Stipendi;
    }

    public function setZp($zp)
    {
        $this->zp = $zp;
    }
public function getfullname()
{
   echo $this->Name . $this->Surname;
}
public function calculate()
{
    echo $this->Stipendi + $this->zp;
}
}

$Isa=new Student();
$Isa->setName("Isamyrat");
$Isa->setSurname("Gurbanow");
$Isa->setStipendia("500");
$Isa->setZp("900");
$Isa->getfullname();echo"<br>";
$Isa->calculate();


?>