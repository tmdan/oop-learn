<?php

class Mother
{
    /**
     * @var Work
     */
    private $work;
    protected function getSalary($proc)
    {
        return $this->work->getZp()*$proc/100;
    }

    public function setWork(Work $work)
    {
        $this->work=$work;
    }
}

class Work
{
    private $zp;
    private $podNal;
    private $socNal;

    public function getZp()
    {
        return $this->zp;
    }

    public function __construct($zp, $podNal, $socNal)
    {
        $this->podNal=$podNal;
        $this->socNal=$socNal;
        $this->zp=$zp-($zp*$podNal/100)-($zp*$socNal/100);
    }
}


class Student extends Mother
{
    private $name;
    private $univer;​


    public function getSalary(){
        return parent::getSalary(10)+$this->getStipen();
    }

    private function getStipen()
    {
        $sum=0;


        $average=0;
        for ($i=0; $i<count($this->univer->predmets); $i++)
        {
            $sum+=$this->univer->predmets[$i]->ball;
        }
        $average=$sum/count($this->univer->predmets);

        if ($average > 4 && $average < 5)
        {
            return 200;
        }
        else if ($average > 5 && $average < 7)
        {
            return 500;
        }
        else if ($average > 7 && $average < 10)
        {
            return 1000;
        }
        else
        {
            die;
        }
    }

    public function __construct($name, $univer)
    {
        $this->name=$name;
        $this->univer=$univer;
    }


}

class Univer
{
    private $name;
    private $predmets = [];

    public function __construct($name, $predmets)
    {
        $this->name=$name;
        $this->predmets=$predmets;
    }
}

class Predmet
{
    private $name;
    private $ball;

    public function __construct($name, $ball)
    {
        $this->name=$name;
        $this->ball=$ball;
    }
}

$Mom=new Mother();
$Mom->setWork(new Work(500, 13, 23));

$Muhammed = new Student("Мухаммед", new Univer("БГУИР", [
    new Predmet("Физика", 8),
    new Predmet("Химия", 10),
    new Predmet("Биология", 6)]));


var_dump($Muhammed->getSalary(20));


