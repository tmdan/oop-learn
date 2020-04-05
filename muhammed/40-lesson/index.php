<?php


class Student
{

    //Массив из предметов
    /**
     * @var array
     */
    private $subjects = [];

    private $kurs = 1;

    public function __construct()
    {
    }


    public function nextKurs()
    {
        $this->kurs += 1;
    }

    public function setSubjects(array $subjects)
    {
        $this->subjects = array_merge($this->subjects, $subjects);
    }

    //Актуально рассписание
    public function getActualSubject()
    {
        $result = [];

        foreach ($this->subjects as $subject) {
            if ($subject->getKurs() == $this->kurs) {
                $result[] = $subject;
            };
        }

        return $result;
    }


    public function gerAvarageRent($kurs)
    {
        $result = 0;
        $count=0;

        foreach ($this->subjects as $subject) {
            if ($subject->getKurs() == $kurs) {
                $count++;
                $result += $subject->rent;
            }
        }


        return $result / $count;
    }

}


class Subject
{
    private $name;
    private $kurs;
    public $rent;

    public function __construct($name, $kurs, $rent)
    {
        $this->kurs = $kurs;
        $this->name = $name;
        $this->rent = $rent;
    }

    public function getKurs()
    {
        return $this->kurs;
    }

    public function getName()
    {
        return $this->name;
    }
}

$Andrey = new Student;

//1 способ
//$math=new Subject('Математика',1);
//$p=new Subject('Философия',1);
//$p1=new Subject('ОАИП',1);
//$p3=new Subject('ООП',2);


$Andrey->setSubjects([
    //1 способ
    //$math,$p,$p1

    new Subject('Математика', 1, 4),
    new Subject('Философия', 1, 6),
    new Subject('ОАИП', 1, 7)

]);

$Andrey->setSubjects([
    new Subject("ООП", 2, 4),
    new Subject("КС", 2, 6),
    new Subject("КГ", 2, 8),
]);

$Andrey->nextKurs();

var_dump($Andrey->gerAvarageRent(2));

