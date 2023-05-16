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
     * @param [string] $title
     * @param [array] $genre
     * @param [string] $lenguage
     * @param [int] $year
     */
    public function __construct(string $title, array $genre, string $lenguage, int $year){
        $this->title = $title;
        $this->genre = $genre;
        $this->lenguage = $lenguage;
        $this->year = $year;

    }

    //Methods
    public function getTitle(): string
    {
        return "Title: " . $this->title;
    }

    public function getGenre(): string
    {
        $genreStr = implode(", ", $this->genre);
        return " Genre: " . $genreStr;
    }

    public function getlenguage(): string
    {
        return "Lenguage: " . $this->lenguage;
    }

    public function getYear(): string
    {
       return "Year: " . $this->year;
    }

}