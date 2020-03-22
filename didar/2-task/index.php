<?php

class Student
{
    private $name;
    private $secondname;
    private $scholarship;
    private $salary;

    /**
     * @param string $name
     * @return string
     */
    public function setname(string $name): string
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getname(): string
    {
        return $this->name;
    }

    /**
     * @param string $secondn
     */
    public function setsecondname(string $secondn): void
    {
        $this->secondname = $secondn;
    }

    /**
     * @return string
     */
    public function getsecondname(): string
    {
        return $this->secondname;
    }

    /**
     * @param int $scholars
     */
    public function setscholarship(int $scholars): void
    {
        $this->scholarship = $scholars;
    }

    /**
     * @param int $solary
     */
    public function setsolary(int $solary)
    {
        $this->salary = $solary;
    }

    public function getFullName()
    {
        echo $this->name . $this->secondname;
    }

    /**
     *
     */
    public function calculate():void
    {
        echo $this->scholarship + $this->salary;
    }

}

$firststudent = new Student();

$firststudent->setname("Didar");
$firststudent->setsecondname("Nepesow");
$firststudent->setscholarship("100");
$firststudent->setsolary("150");
$firststudent->getFullName();
echo "<br>";
$firststudent->calculate();

?>
