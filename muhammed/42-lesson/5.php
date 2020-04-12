<?php
class Mother
{
    private $salary=200;

    protected function GetMoneyToChild()
    {
        return $this->salary*0.5;
    }

}


class Student extends Mother
{
    private $stepuha=50;

    public function getMoney(){
       return $this->GetMoneyToChild()+$this->stepuha;
    }
}


$ivan=new Student();
echo $ivan->getMoney();
