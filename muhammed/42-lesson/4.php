<?php


class Worker {
    private $spec;
    private $salary;

    public function getSalary(){
        return $this->salary;
    }

    public function getSpec(){
        return $this->spec;
    }
}



class Mother extends Worker{

    private $aliment=200;

    public function getSalary(){
        return parent::getSalary() + $this->aliment;
    }

}



class Student extends  Mother {

    private $univer;

    public function getSalary()
    {
        return parent::getSalary() + $this->univer->getstep();
    }

}



class Univer{
    private $name;
    private $salary;
}
