<?php


class Biblioteka {

    private $books = [];

    public function setSpisokKnig(array $books){
        $this->books=array_merge($this->books,$books);
    }

    public function getSpisokKnig($avtor,$year){
        foreach ($this->books as $book){
            if($book->getAvtor()===$avtor && $book->getGod()===$year){
                var_dump($book);
            }
        }
    }
}

class Book{
    private $avtor;
    private $god;

    public function getAvtor(){
        return $this->avtor;
    }

    public function getGod(){
        return $this->god;
    }

    public function __construct($avtor,$god){
        $this->avtor=$avtor;
        $this->god=$god;
    }

}

//Построила библиотеку
$biblioteka=new Biblioteka;

//Установить книги новые в библиотеку
$biblioteka->setSpisokKnig([
    new Book("Лев Толстой",1868),
    new Book("Лев Толстой",1877),
    new Book("Федор Достаевский",1866),
    new Book("Алексей Пушкин",1837),
    new Book("Алексей Пушкин",1836),
    new Book("Николай Гоголь",1842),
    new Book("Николай Гоголь",1844),
]);


$biblioteka->getSpisokKnig("Лев Толстой",1877);


