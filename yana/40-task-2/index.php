<?php

class Channel
{
    private $nameChannel;
    private $videos = [];

    public function getNameChannel()
    {
        return $this->nameChannel;
    }

    public function __construct($nameChannel, $videos)
    {
        $this->nameChannel=$nameChannel;
        $this->videos=$videos;
    }

    public function setVid(array $videos)
    {
        $this->videos = array_merge($this->videos, $videos);
    }


    public function getNamesVideos()
    {
        $videos = [];
        foreach ($this->videos as $oneVideo)
        {
            $videos[]=$oneVideo->getName();
        }
        return $videos;
    }


    public function getAllViews($videos)
    {
        $allViews=0;
        foreach ($this->videos as $oneVideo)
        {
            $allViews+=$oneVideo->getViews();
        }
        return $allViews;
    }


    public function getAllMoney($videos)
    {
        $allMoney=0;
        foreach ($this->videos as $oneVideo)
        {
            $allMoney+=$oneVideo->getSalary();
        }
        return $allMoney;
    }

    public function MostPopularVideo()
    {
        $maxView=$this->videos[0]->getViews();
        $maxName=$this->videos[0]->getName();
        ​
        for ($i=0; $i<count($this->videos); $i++)
        {
            if($this->videos[$i]->getViews() > $maxView)
            {
                $maxName = $this->videos[$i]->getName();
            }
        }
        return $maxName;
    }



    public function MostMoneyVideo()
    {
        $maxSalary=$this->videos[0]->getSalary();
        $maxName=$this->videos[0]->getName();
        ​
        for ($i=0; $i<count($this->videos); $i++)
        {
            if($this->videos[$i]->getSalary() > $maxSalary)
            {
                $maxName = $this->videos[$i]->getName();
            }
        }
​
        return $maxName;
    }






}

class Video
{
    private $name;
    private $views;
    private $rent;

    public function getName()
    {
        return $this->name;
    }


    public function getViews()
    {
        return $this->views;
    }

    public function getSalary()
    {
        return $this->rent * $this->views;
    }



    public function __construct($name, $views, $rent)
    {
        $this->name = $name;
        $this->views = $views;
        $this->rent = $rent;
    }

}


$BestChannel = new Channel("Самый лучший канал", [
    new Video("Изучаем строение компьютера", rand(1,10000), rand(1,3)),
    new Video("Изучаем переменные", rand(1,10000), rand(1,3)),
    new Video("Изучаем переменные", rand(1,10000), rand(1,3)),
    new Video("Изучаем циклы", rand(1,10000), rand(1,3)),
    new Video("Изучаем ГИТ", rand(1,10000), rand(1,3)),
    new Video("Изучаем ООП", rand(1,10000), rand(1,3))
]);

$BestChannel->setVid(new Video("Изучаем ООП", rand(1,10000), rand(1,3)));
