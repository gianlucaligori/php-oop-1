<?php


class Movie
{

    // VARIABILI
    public string $title;
    public string $filmDirector;
    public string $genre;
    public string $year;


    // CONSTRUCT
    function __construct($title, $filmDirector, $genre, $year)
    {
        $this->title = $title;
        $this->filmDirector = $filmDirector;
        $this->genre = $genre;
        $this->year = $year;
    }

    // METODI
    // public function infoMovie()
    // {
    //     return $this->title;
    // }
    // public function getFilmDirector()
    // {
    //     return $this->filmDirector;
    // }
    // public function getGenre()
    // {
    //     return $this->genre;
    // }
    // public function getYear()
    // {
    //     return $this->year;
    // }
}

$PulpFiction = new Movie("Pulp Fiction", "Quentin Tarantino", "Drama", "1994");




echo 'Movie title' - ':' . $PulpFiction->title;
echo '<br>';
echo 'Director' - ':' . $PulpFiction->filmDirector;
echo '<br>';
echo 'Genre' - ':' . $PulpFiction->genre;
echo '<br>';
echo 'Year' - ':' . $PulpFiction->year;
