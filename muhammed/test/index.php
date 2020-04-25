<?php


class Video
{
    private $name;
    private $views;
    private $rent;

    public function __construct($name, $views, $rent)
    {
        $this->name = $name;
        $this->views=$views;
        $this->rent=$rent;
    }

    public function getName(){
        return $this->name;
    }


    public function getRent(){
        return $this->rent;
    }
}


class VideoList{

    private $list=[];

    public function getList(){
        return $this->list;
    }

    public function setList($list){
        $this->list=array_merge($this->list,$list);
    }

    public function whereName($value){

        $this->list=array_filter($this->list, function ($video) use($value){
            return $video->getName()===$value;
        });

        return $this;
    }


    public function whereRent($value){

        $this->list=array_filter($this->list, function ($video) use($value){
            return $video->getRent()===$value;
        });

        return $this;
    }

    public function __construct($list)
    {
        $this->setList($list);
    }

}



$videoList=new VideoList([
    new Video("Изучаем строение компьютера", rand(1,10000), rand(1,3)),
    new Video("Изучаем переменные", rand(1,10000), rand(1,3)),
    new Video("Изучаем переменные", rand(1,10000), rand(1,3)),
    new Video("Изучаем циклы", rand(1,10000), rand(1,3)),
    new Video("Изучаем ГИТ", rand(1,10000), rand(1,3)),
    new Video("Изучаем ООП", rand(1,10000), rand(1,3))
]);

var_dump($videoList
    ->whereName('Изучаем переменные')
    ->whereRent(2));
