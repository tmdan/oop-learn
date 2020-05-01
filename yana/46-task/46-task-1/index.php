<?php
const PI = 3.14;

interface Figure
{
    public function calc();
}

class Circle implements Figure
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius=$radius;
    }

    public function calc()
    {
        echo "Площадь моего квадрата равна ". ($this->radius)*($this->radius)*PI;
    }
}

class Square implements Figure
{
    public $side;

    public function __construct($side)
    {
        $this->side=$side;
    }

    public function calc()
    {
        echo "Площадь моего квадрата равна ".($this->side)*($this->side);
    }
}

class Rectangle implements Figure
{
    public $length;
    public $width;

    public function __construct($length, $width)
    {
        $this->length=$length;
        $this->width=$width;
    }

    public function calc()
    {
        echo "Площадь моего прямоугольника равна ".($this->length)*($this->width);
    }
}

class Triangle implements Figure
{
    public $base;
    public $height;

    public function __construct($base, $height)
    {
        $this->base=$base;
        $this->height=$height;
    }

    public function calc()
    {
        echo "Площадь моего треугольника равна ".($this->base/2)*($this->height);
    }
}

$my_Circle=new Circle(5);
$my_Square=new Square(3);
$my_Rectangle=new Rectangle(6, 3);
$my_Triangle=new Triangle(5, 7);

$figures = [];

$figures[0]=$my_Circle;
$figures[1]=$my_Square;
$figures[2]=$my_Rectangle;
$figures[3]=$my_Triangle;

foreach ($figures as $figure)
{
    $figure->calc();
}