<?php

class Mother
{
    /**
     * Тут храниться объект Work
     * @var Work
     */
    protected $work;

    /**
     * Отдает определенный процент от ЗП итоговой
     * @param $proc
     * @return float|int
     */
    protected function getSalary($proc)
    {
        return $this->work->getZp()*$proc/100;
    }

    public function setWork(Work $work)
    {
        $this->work=$work;
    }
}

/**
 * ---------------------------------------------------------
 */

/**
 * Class Work
 */
class Work
{
    /**
     * Итоговая зп за вычетом налогов
     * @var float|int
     */
    private $zp;

    /**
     * процент подоходного налого
     * @var int
     */
    private $podNal;

    /**
     * Процент соц страхования
     * @var int
     */
    private $socNal;

    /**
     * Возращаем итоговую зп за вычетом налогов
     * @return float|int
     */
    public function getZp()
    {
        return $this->zp - ($this->zp * $this->podNal / 100) - ($this->zp * $this->socNal / 100);
    }

    /**
     * Work constructor.
     * @param $zp
     * @param $podNal
     * @param $socNal
     */
    public function __construct($zp, $podNal, $socNal)
    {
        $this->podNal = $podNal;
        $this->socNal = $socNal;
        $this->zp = $zp;
    }
}


class Student extends Mother
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Univer
     */
    private $univer;

    /**
     * Возвращает итоговый доход студента
     * @param $proc
     * @return float|int
     */
    public function getSalary($proc)
    {
        return parent::getSalary($proc) + $this->getStipen();
    }

    /**
     * возращается итоговая стипендия
     * @return int
     */
    public function getStipen(): int
    {
        $sum = 0;
        $average = 0;

        for ($i = 0; $i < count($this->univer->predmets); $i++) {
            $sum += $this->univer->predmets[$i]->ball;
        }

        $average = $sum / count($this->univer->predmets);

        if ($average > 4 && $average < 5) {
            return 200;
        } else if ($average > 5 && $average < 7) {
            return 500;
        } else if ($average > 7 && $average < 10) {
            return 1000;
        } else {
            die;
        }
    }

    /**
     * Student constructor.
     * @param string $name
     * @param Univer $univer
     * @param Work $work
     */
    public function __construct(string $name, Univer $univer, Work $work)
    {
        $this->work=$work;
        $this->name = $name;
        $this->univer = $univer;
    }

}


/**
 * Class Univer
 */
class Univer
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    public $predmets = [];

    public function __construct($name, $predmets)
    {
        $this->name = $name;
        $this->predmets = $predmets;
    }
}

class Predmet
{
    private $name;
    public $ball;

    public function __construct($name, $ball)
    {
        $this->name = $name;
        $this->ball = $ball;
    }
}


$Muhammed = new Student(
    "Мухаммед",
    new Univer("БГУИР",
        [
            new Predmet("Физика", 8),
            new Predmet("Химия", 10),
            new Predmet("Биология", 6)
        ],
        ),
    new Work(900, 23, 5)
);


var_dump($Muhammed->getSalary(20));


