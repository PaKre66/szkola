<?php
include_once('./Library.php');
class DVD extends Library {
    protected $duration;
    protected $genere;

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
    public function setDuration($duration) {
        $this->duration = $duration;
    }
    public function setGenere($genere) {
        $this->genere = $genere;
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
    public function getDuration($unit = 'm') {
        return $unit == 'm' ? ($this->duration) : ('h');
    }
    public function getGenere() {
        return $this->genere;
    }
    public function displayDetils($detail = null) {
        if($detail == null) {
            return array(
                $this->getTitle(),
                $this->getAuthor(),
                $this->getYear(),
                $this->getPrice(),
                $this->getDuration(),
                $this->getGenere()
            );
        }
        else {
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
?>