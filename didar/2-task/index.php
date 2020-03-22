<?php
class Student
{
    private $name;
    private $secondname;
    private $scholarship;
    private $salary;

    public function setname($name)
    {
    $this->name = $name;
    }
    public function getname()
    {
     return $this->name;
    }
    public function setsecondname($secondn)
    {
        $this->secondname = $secondn;
    }
    public function  getsecondname()
    {
        return $this->secondname;
    }
    public function setscholarship($scholars)
    {
        $this->scholarship=$scholars;
    }
    public function setsolary($solary)
    {
        $this->salary = $solary;
    }
    public function getFullName()
    {
        echo $this->name . $this->secondname;
    }
    public function calculate()
    {
        echo $this->scholarship + $this->salary;
    }

}

$firststudent = new Student();

$firststudent->setname("Didar" );
$firststudent->setsecondname("Nepesow");
$firststudent->setscholarship("100");
$firststudent->setsolary(150);
$firststudent->getFullName();
echo "<br>";
$firststudent->calculate();

?>