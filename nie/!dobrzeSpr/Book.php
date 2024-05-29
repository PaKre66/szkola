<?php
include_once('./Library.php');
class Book extends Library {
    protected $genere;
    protected $pages;
    protected $volumes;

    function __construct() {
        
    }
    public function setTitle($title) {
        $this->title = $title;
    }
    public function setAuthor($author) {
        $this->author = $author;
    }
    public function setYear($year) {
        $this->year = $year;
    }
    public function setPrice($price) {
        $this->price = $price;
    }
    public function setGenere($genere) {
        $this->genere = $genere;
    }
    public function setPages($pages) {
        $this->pages = $pages;
    }
    public function setVolumes($volumes) {
        $this->volumes = $volumes;
    }
    public function getTitle() {
        return $this->title;
    }
    public function getAuthor() {
        return $this->author;
    }
    public function getYear() {
        return $this->year;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getGenere() {
        return $this->genere;
    }
    public function getPages() {
        return $this->pages;
    }
    public function getVolumes() {
        return $this->volumes;
    }
    public function displayDetils($detail = null) {
      if($detail == null) {
        return array(
          $this->getTitle(),
          $this->getAuthor(),
          $this->getYear(),
          $this->getPrice(),
          $this->getGenere(),
          $this->getPages(),
          $this->getVolumes()
        );
      }else{
        switch($detail) {
            case 'title':
                return $this->getTitle();
            case 'author':
                return $this->getAuthor();
            case 'year':
                return $this->getYear();
            case 'price':
                return $this->getPrice();
            case 'genere':
                return $this->getGenere();
            case 'pages':
                return $this->getPages();
            case 'volumes':
                return $this->getVolumes();
        }
    }
  }
}
$b1 = new Book();
var_dump($b1->displayDetils());
?>