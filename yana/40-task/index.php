<?php

class Country
{
    private $name;
    private $population = [];

    public function setName($name)
    {
        $this->name=$name;
    }

    public function setPop(array $population)
    {
        $this->population = array_merge($this->population, $population);
    }

    public function getPopulation()
    {
        return count($this->population);
    }

    public function getAvarageAge()
    {
        $sum = 0;
        $count=0;
        foreach ($this->population as $oneHuman) {
                $count++;
                $sum += $oneHuman->getAge();
        }
        return $sum / $count;
    }

}


class Human
{
    private $name;
    private $age;

    public function getAge()
    {
        return $this->age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        if(!$this->checkName($name))
        {
            die("Валидация имени не прошла");
        }
        $this->name = $name;
    }
    public function setAge($age)
    {
        if(!$this->checkAge($age))
        {
            die("Валидация не прошла - Возраст не верное");
        }
        $this->age = $age;
    }


    private function checkName($name)
    {
        if(is_string($name))
        {
            return $name;
        }
    }

    private function checkAge($age)
    {
        if ($age > 1 && $age < 110)
        {
            return $age;
        }
    }
}
$Belarus = new Country;
$Belarus->setName("Беларусь");

$names = ["Мухаммед", "Яна", "Дидар", "Севинч", "Иса"];

$Humans=[];

for($i=0;$i<5;$i++)
{
    $Humans[$i]=new Human;
    $Humans[$i]->setName($names[rand(0,4)]);
    $Humans[$i]->setAge(rand(1,110));
}


$Belarus->setPop($Humans);

