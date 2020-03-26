<?php

class student
{

    private $name;
    private $surname;
    private $stipendiya;
    private $zp;


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function getFullName()
    {
        echo $this->name . $this->surname;
    }

    public function getCalculate()
    {
        echo $this->stipendiya + $this->zp;
    }

}

$studentBSUIR = new student();
$studentBNTU = new student();

echo $studentBSUIR->setName("Sevinch");
echo "<br>";
echo $studentBSUIR->setSurname("Alimkhodjaeva");
echo "<br>";
echo $studentBNTU->setName("Anastasiya");
echo "<br>";
echo $studentBNTU->setSurname("Lapenko");
echo "<br>";
echo $studentBSUIR->getFullName();
echo "<br>";
echo $studentBSUIR->getCalculate();
echo "<br>";
echo $studentBNTU->getFullName();
echo "<br>";
echo $studentBNTU->getCalculate();
echo "<br>";
