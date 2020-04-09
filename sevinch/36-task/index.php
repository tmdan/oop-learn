<?php

$name=["Sevinch","Nastya","Anora"];
$surname=["Alimkhodjaeva","Kurilchik","Akabirova"];
$univer=["Bsuir","Bntu","Yodj"];
$facultet=["ief","ksis","turizm"];
$predmet_disciplina=["Математика","Информатика","Физика","Английский","Программирование"];
$predmet_ball=["10","9","8","7","6"];

class studet{
    public $name;
    public $surname;
    public $univer;

    public function getSredniyball(){
        return $this->univer->predmeti->ball;
    }

    public function setSredniyball($ball){
        $this->univer->predmeti->ball;
    }
    public function calculeyt(){
        $result=0;
foreach($this->univer->pred as predmeti){
    $result=$predmet->ball;
    $result=$result/count($this->univer->predmet);
    return $result;
        }
    }
}

class Universitet{
    public $nazvanie;
    public $facultet;
    public $pred;
}
class Predmet{
    public $disciplina;
    public $ball;
}

$students=[];
for($i=0;$i<count($name);$i++) {
    $students[$i] = new Student;
    $students[$i]->name = $name;
    $students[$i]->surname = $surname;
    $students[$i]->univer = new Universitet;
    $students[$i]->univer->$nazvanie = $univer;
    $students[$i]->univer->$facultet = $univer;

    /*$s1=new studet();
    $s1->name="Sevinch";
    $s1->surname="Alimkhodjaeva";
    $s1->univer=new Universitet();
    $s1->univer->facultet;
    $s1->univer->nazvanie;*/

    for ($a = 0; $a < count($predmet[]); $a++) {
        $students[$i]->$univer->predmeti[$a] = new Predmet();
        $students[$i]->$univer->predmeti[$a]->nazvanie = $predmet_disciplina;
        $students[$i]->$univer->predmeti[$a]->ball = $predmet_ball;
    }
}

echo "<pre>";
var_dump($students);
echo "</pre>";