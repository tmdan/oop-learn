<?php


class Hear
{
    private $size;
    private $klapan;

    //Экран где отображается размер
    public function getSize(){
        return $this->size;
    }

    //Момент рождения
    public function __construct($size, $klapan)
    {
        $this->size=$size;
        $this->klapan=$klapan;
    }
}


class  Human {

    private $eves;
    private $hairHolor;
    private $hear;
    //Год рождения
    private $bordYear;

    //Возраст
    private $old=0;

    public $school;

    //Яна пошла в школу
    public function setSchool($school){
        $this->school=$school;
    }

    //АПАРАТ УЗИ
    public function getHear(){
        return $this->hear;
    }

    public function getOld(){
        $this->old;
    }

    public function oneYear(){
        $this->old+=1;
        $this->bordYear+=1;

        if($this->school!==null){
            $this->school->nextClass();
        }
    }

    public function __construct($eves, $hairHolor, $hear, $bordYear)
    {
        $this->eves=$eves;
        $this->hairHolor=$hairHolor;
        $this->hear=$hear;
        $this->bordYear=$bordYear;
    }
}



class School {
    public $number;
    public $class=1;

    public function __construct($number, $class)
    {
        $this->number=$number;
        $this->class=$class;
    }

    public function nextClass(){
        $this->class+=1;
    }
}


$yana=new Human("Зеленые",'Русый', new Hear(23, 2), 1994);
$yana->oneYear();
$yana->oneYear();
$yana->oneYear();
$yana->oneYear();
$yana->oneYear();
$yana->oneYear();
$yana->setSchool(new School(1, 1));
$yana->oneYear();
var_dump($yana);
die;
