<?php
class Engine
{
    public $oil;

    public function __construct($oil)
    {
        $this->oil=$oil;
    }
    public function getOil()
    {
        return $this->oil;
    }
    public function nextOil()
    {
    $this->oil-=1;
    }
}

class Car
{
private $color;
private $type;
private $engine;

public $kl;

    public function __construct($color,$type,$engine)
    {
         $this->color=$color;
         $this->type=$type;
         $this->engine=$engine;
    }
    public function getEngine()
    {
        return $this->engine;
    }
    public function setKl($kl)
    {
        $this->kl = $kl;
    }
    public function sellOil()
    {
        if($this->getOil()!=null)
        {
            $this->engine->nextOil();
            echo "Вы проехали 1 кл";
        }else echo"Бензин закончисля";
    }
}
$Ford=new Car("Red","Track",new Engine(5));
$Ford->sellOil();
var_dump($Ford);
