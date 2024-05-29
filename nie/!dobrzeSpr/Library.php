<?php
abstract class Library
{
    /**
     * Tytuł.
     * @var string|null
     */
    protected $title;
    /**
     * Autor.
     * @var string|null
     */
    protected $author;
    /**
     * Rok wydania.
     * @var int
     */
    protected $year;
    /**
     * Cena.
     * @var float
     */
    protected $price;

    /**
     * Metody ustawiające wartości pól.
     */
    /**
     * Ustawienie wartości pola $title.
     * @return void
     */
    abstract public function setTitle();
    /**
     * Ustawienie wartości pola $author.
     * @return void
     */
    abstract public function setAuthor();
    /**
     * Ustawienie wartości pola $year.
     * @return void
     */
    abstract public function setYear();
    /**
     * Ustawienie wartości pola $price.
     * @return void
     */
    abstract public function setPrice();

    /**
     * Metody pobierające wartości pól.
     */
    /**
     * Ustawienie wartości pola $price.
     * @return string
     */
    abstract public function getTitle();
    /**
     * Ustawienie wartości pola $price.
     * @return string
     */
    abstract public function getAuthor();
    /**
     * Ustawienie wartości pola $price.
     * @return int
     */
    abstract public function getYear();
    /**
     * Ustawienie wartości pola $price.
     * @return float
     */
    abstract public function getPrice();
    /**
     * Wyświetlanie szczegółów o pozycji w bibliotece.
     * @return null|string|array
     */
    abstract public function displayDetils($detail = null);
}
?>