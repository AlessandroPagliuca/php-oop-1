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

    //Methods
    public function getTitle(){
        return "Title: " . $this->title;
    }

    public function getGenre(){
        return " Genre: " . $this->genre;
    }

    public function getlenguage(){
        return "Lenguage: " . $this->lenguage;
    }

    public function getYear(){
       return "Year: " . $this->year;
    }

}