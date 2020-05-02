<?php


class User
{
    public $name;

    public static $street;

    public static function setStreet(string $street)
    {
        self::$street = $street;
    }

    public function getName()
    {
        return $this->name;
    }

    public function __construct($name)
    {
        $this->name = $name;
    }
}


User::setStreet ("Степаненко");
$u1 = new User("Иван");
$u2 = new User("Степан");
//$u2::$street = "Олохин";
User::setStreet ( "Олохин");
$u3 = new User("Татьяна");


var_dump(User::$street);
var_dump($u1::$street);
var_dump($u3::$street);

