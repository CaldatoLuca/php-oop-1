<?php

class Movie
{
    public $title;
    public $director;
    public $year;
    public array $genre;
    public $description;
    function __construct(
        $_title,
        $_director,
        $_year,
        $_genre,
        $_description
    ) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->description = $_description;
    }
    /**
     * setGenre: funzione per scrivere genere
     *
     * @param  string 
     * @return void
     */
    public function setGenre($_genre)
    {
        $this->genre = $_genre;
    }


    /**
     * getGenre: funzione per leggere genere movie
     *
     * @return array
     */
    public function getGenre()
    {
        return $this->genre;
    }
}
