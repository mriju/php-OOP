<?php
class Book{
    private $title;
    private $author;
    private $price;
    private $release_date;

    public function __construct($title, $author, $price, $release_date)
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        $this->release_date = $release_date;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getAuthor(){
        return $this->author;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getReleaseDate(){
        return $this->release_date;
    }

    public function setTitle($title){
        $this->title = $title;
    }
    public function setAuthor($author){
        $this->author = $author;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function setReleaseDate($release_date){
        $this->release_date = $release_date;
    }

    public function displayInfo(){
        echo "Title: " . $this->title . '<br>.';
        echo "Autos: " . $this->author . '<br>.';
        echo "Price: " . $this->price. '<br>.';
        echo "Release Date: " . $this->release_date. '<br>.';
    }

}

$book = new Book('The Alchemist', 'Paulo Coelho', 12.99, '2022-01-01');
$book->displayInfo();
echo '</br>';
echo '------------------';
echo '</br>';
$book->setPrice(9.99);
$book->setReleaseDate('2023-01-01');
$book->displayInfo();