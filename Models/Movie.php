<?php

/**
 * Movie class
 */
class Movie{
    public $title;
    public $genre;
    public $lenguage;
    public $year;

    /**
     * Construct function
     *
     * @param [type] $title
     * @param [type] $genre
     * @param [type] $lenguage
     * @param [type] $year
     */
    public function __construct($title, $genre, $lenguage, $year){
        $this->title = $title;
        $this->genre = $genre;
        $this->lenguage = $lenguage;
        $this->year = $year;

    }

    public function getData(){
        return "Title: " . $this->title . ", Genre: " . $this->genre . "Lenguage:" . $this->lenguage . ", Year: " . $this->year;
    }


}