<?php

class Car
{
    private $model;
    private $color;
    static $storage = [];

    private function __construct ($model, $color)
    {
        $this->model = $model;
        $this->color = $color;
    }

    public static function addCar($model, $color)
    {
        self::$storage[] = new self($model, $color);
    }
}

Car::addCar("BMW", "black");


var_dump(Car::$storage);