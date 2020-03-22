<?php

class Student
{
    private $Name;
    private $Surname;
    private $Stipendi;
    private $zp;

    /**
     * @param string $Name
     */
    public function setName(string $Name): string
    {
        $this->Name = $Name;
    }

    public function getName(): string
    {
        return $this->Name;
    }

    public function setSurname(string $Surname): string
    {
        $this->Surname = $Surname;
    }

    public function getSurname(): string
    {
        return $this->Surname;
    }

    public function setStipendia(int $Stipendi):void
    {
        $this->Stipendi = $Stipendi;
    }

    public function setZp(int $zp)
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

$Isa = new Student();
$Isa->setName("Isamyrat");
$Isa->setSurname("Gurbanow");
$Isa->setStipendia(500);
$Isa->setZp(900);
$Isa->getfullname();
echo "<br>";
$Isa->calculate();


?>