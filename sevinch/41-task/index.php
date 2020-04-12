<?php

class Student
{
    private $name;
    private $univer;

    public function __construct($name, $univer)
    {
        $this->name = $name;
        $this->univer = $univer;
    }

    public function setUniver($univer)
    {
        $this->univer->setNazvanie($univer);
    }
}

class Univer
{
    private $nazvanie;

    public function __construct($nazvanie)
    {
        $this->nazvanie = $nazvanie;
    }


    public function setNazvanie($nazvanie)
    {
        $this->nazvanie = $nazvanie;
    }
}

$stud = new Student("Sevinch", new Univer("BSUIR"));
$stud->setUniver("BNTU");