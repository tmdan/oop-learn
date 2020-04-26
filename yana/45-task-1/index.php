<?php

abstract class Content {

    private $message;

    public abstract function printing();

    public function __construct($message)
    {
        $this->message = $message;
    }
}



class Article extends Content
{
    private $message;
    public function printing()
    {
        echo $this->message. "</p>";
    }
}

class News extends Content
{
    private $message;
    public function printing()
    {
        echo $this->message. "</p>";
    }
}

class Sale extends Content
{
    private $message;
    public function printing()
    {
        echo $this->message. "</p>";
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
