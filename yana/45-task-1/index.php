<?php

abstract class Content {

    protected $message;

    public abstract function printing();

    public function __construct($message)
    {
        $this->message = $message;
    }
}



class Article extends Content
{
    public function printing()
    {
        echo $this->message;
    }
}

class News extends Content
{
    public function printing()
    {
        echo $this->message;
    }
}

class Sale extends Content
{
    public function printing()
    {
        echo $this->message;
    }
}


class ListOf
{

    private $publications = [];

    public function addPublication($publication)
    {
        $this->publications[] = $publication;
    }

    public function print_1()
    {
        foreach ($this->publications as $publication)
        {
            $publication->printing();
        }
    }
}


$list=new ListOf();

$news=new News("Новая новость");
$article=new Article("Новая статья");
$sale=new Sale("Скидка на телевизоры!!!");

$list->addPublication($news);
$list->addPublication($article);
$list->addPublication($sale);

$list->print_1();
