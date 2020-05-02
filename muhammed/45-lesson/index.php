<?php

///Плохая практика

class Article
{

    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function printIt()
    {
        echo "Cтатья красным цветом - " . $this->message;
    }
}

class News
{

    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function pringingNews()
    {
        echo "Новость жирным шрифтом - " . $this->message;
    }
}

class Sale
{

    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }


    public function printing()
    {
        echo "Скидки - жирный курсный текст" . $this->message ;
    }
}





class ListOf
{

    private $publications = [];

    public function addPublication($publication)
    {
        $this->publications[] = $publication;
    }

    public function print()
    {
        foreach ($this->publications as $publication) {
            if ($publication instanceof Article) {
                $publication->printIt();
            } else if ($publication instanceof News) {
                $publication->pringingNews();
            } else if ($publication instanceof Sale) {
                $publication->printing();
            }
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

$list->print();
