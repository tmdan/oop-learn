<?php

class Human {
    public $name;
    public $lastname;
}


class Student extends Human {
    //Название университета
    public $univer;
}

class Driver extends Human {
    //Номер водительского
    public $driver_lesson_number;
}
