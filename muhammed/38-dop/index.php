<?php


$names = ["Мухаммед", "Яна", "Дидар", "Севинч", "Иса"];
$lastNames = ["Зеленский", "Пупкина", "Лукашенко", "Ельцин", "Путин"];
$uni = ["БГТУ", "БГМУ", "БНТУ", "БГАТУ"];
$fac = ["Экономический", "Физический", "Юридический", "Химический", "Биологический"];
$pred=["Физика", "Химия", "Математика", "Биология", "Физкультура"];
$gr=[1, 2, 3, 5, 9, 10];



class Predmet {
    private $name;
    private $ball;
    private $kurs;


    public function __construct($name, $ball, $kurs)
    {
        $this->name=$name;
        $this->ball=$ball;
        $this->kurs=$kurs;
    }


    public function getKurs(){
        return $this->kurs;
    }

    public function setKurs($kurs){
        return $this->kurs=$kurs;
    }
    
    public function getName(){
        return $this->name;
    }

    public function setName($name){
        return $this->name=$name;
    }

    public function setBall($ball){

        if(is_integer($ball) && $ball<=10 &&  $ball>=1){
            $this->ball=$ball;
        }else{
            die ("Балл не входит в диапазон допустимых значений");
        }
    }

    public function getBall(){
        $this->ball;
    }
}


class Student
{
    //Имя (строка)
    private $name;

    //Универ (объект)
    private $univer;

    //Получаение имени
    public function getname()
    {
        return $this->name;
    }

    //Получения объекта университета
    public function getuniver()
    {
        return $this->univer;
    }


    public function __construct($name, $univer)
    {
        $this->name = $name;
        $this->univer = $univer;
    }

    //Увелить курс на 1
    public function nextKurs()
    {
        $this->univer->nextKurs();
    }

}


class Univer
{
    private $name_ofuniv;
    private $kurs;
    private $predmety;

    public function __construct($nameOfuniv, $kurs, $predmety)
    {
        $this->nameOfuniv = $nameOfuniv;
        $this->kurs = $this->setKurs($kurs);

        foreach ($predmety as $predmet){
            $this->setPredmet($predmet);
        };
    }

    public function getPredmetsByCourd($cours)
    {
        $result=[];

        //пройтись по предметам - они храняться $this->predmety
        // и с помощью условия отфитровать предметы

        foreach ($this->predmety as $predmet){

            if($predmet->getKurs()==$cours){
                $result[]=$predmet;
            }
        };

        return $result;
    }

    public function setPredmet($predmet)
    {
        $this->predmety[]=$predmet;
    }

    public function getPredmets()
    {
        return $this->predmety;
    }

    public function getnameOfuniv()
    {
        return $this->name_ofuniv;
    }

    public function getKurs()
    {
        return $this->kurs;
    }

    public function setKurs($kurs)
    {
        if(is_integer($kurs) && $kurs<=5 &&  $kurs>=1){
            $this->kurs=$kurs;
        }else{
            die ("Курс не входит в диапазон допустимых значений");
        }
    }

    public function nextKurs()
    {
        $this->setKurs($this->kurs+1);
    }
}





$univer=new Univer("Bgiur", 2, [
    new Predmet('Математика', 4, 1),
    new Predmet('Философия', 7, 1),
    new Predmet('Геометрия', 7, 1),
    new Predmet('История', 7, 1),
    new Predmet('ООП', 7, 2),
    new Predmet('Машинное обучение', 7, 2),
]);



$Parker = new Student("Adam",$univer);


var_dump($Parker->getuniver()->getPredmetsByCourd(1));

// echo $Parker->getuniver()->getKurs() . "<br>";
// $Parker->getuniver()->nextKurs();
// echo $Parker->getuniver()->getKurs() . "<br>";
// $Parker->getuniver()->nextKurs();
// echo $Parker->getuniver()->getKurs() . "<br>";
// $Parker->getuniver()->nextKurs();
// echo $Parker->getuniver()->getKurs() . "<br>";

