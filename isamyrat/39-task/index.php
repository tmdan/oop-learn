<?php


class Engine
{
    public $oil;

    public function __construct($oil)
    {
        $this->oil = $oil;
    }

    public function getOil()
    {
        return $this->oil;
    }

    //Залить бензин
    public function setOil($oil)
    {
        $this->oil = $oil;
    }

    public function nextOil()
    {
        $this->oil -= 1;
    }
}

class Car
{
    private $color;
    private $type;
    private $engine;

    public $kl;

    public function __construct($color, $type, $engine)
    {
        $this->color = $color;
        $this->type = $type;
        $this->engine = $engine;
    }

    public function getEngine()
    {
        return $this->engine;
    }

    public function setKl($kl)
    {
        $this->kl = $kl;
    }

    //Обращение к двигателю в заливаем бензин
    public function setOil($oil)
    {
        $this->engine->setOil($oil);
    }

    public function sellOil()
    {
        if ($this->engine->getOil() !== 0) {
            $this->engine->nextOil();
            echo "Вы проехали 1 кл";
        } else echo "Бензин закончисля";
    }
}

$Ford = new Car("Red", "Track", new Engine(5));
$Ford->sellOil();
$Ford->sellOil();
$Ford->sellOil();
$Ford->sellOil();
$Ford->sellOil();
$Ford->sellOil();
$Ford->setOil(2);
$Ford->sellOil();
$Ford->sellOil();
var_dump($Ford);
