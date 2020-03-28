<?php


class Employee
{

    private $name;
    private $age;
    private $salary;

    public function getName()
    {
        return "Имя:" . $this->name;
    }


    public function getAge()
    {
        return $this->age;
    }




    public function setName($name)
    {

        if($this->checkName($name)){
            $this->name=$name;
        }

    }

    public function setAge($age)
    {
        if($this->checkAge($age)){
            $this->age=$age;
        }
    }

    private function checkAge($age) {
        if(is_integer($age) && $age>0 && $age<18){
            return true;
        }else{
            return false;
        }
    }

    private function ckeckName($name){
        if(is_string($name)&& $name=="Дебил" && $name=="Идиот"){
            return false;
        }else{
            return true;
        }
    }
}

$ivan=new employee;
$ivan->setAge(17);
$ivan->setName(17);



class pryamougolnik{
    public $visota;
    public $shirina;

    public function plowad(){
        return $this->visota*$this->shirina;
    }
}
$s1=new pryamougolnik;
$s1->visota=4;
$s1->shirina=8;

echo $s1->plowad();

