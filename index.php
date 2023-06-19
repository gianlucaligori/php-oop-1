<?php

class Movie
{

    // VARIABILI
    public $title;
    public $filmDirector;
    public $genre;
    public $year;


    // CONSTRUCT / COSTRUTTORE / METODO DI ISTANZA
    function __construct($title, $filmDirector, $genre, $year)
    {
        $this->title = $title;
        $this->filmDirector = $filmDirector;
        $this->genre = $genre;
        $this->year = $year;
    }
}

$PulpFiction = new Movie("Pulp Fiction", "Quentin Tarantino", "Drama", "1994");
echo 'Movie title' . ': ' . $PulpFiction->title;
echo '<br>';
echo 'Director' . ': ' . $PulpFiction->filmDirector;
echo '<br>';
echo 'Genre' . ': ' . $PulpFiction->genre;
echo '<br>';
echo 'Year' . ': ' . $PulpFiction->year;
echo '<br>';


$LeIene = new Movie("Le Iene", "Quentin Tarantino", "Drama", "1997");
echo 'Movie title' . ': ' . $LeIene->title;
echo '<br>';
echo 'Director' . ': ' . $LeIene->filmDirector;
echo '<br>';
echo 'Genre' . ': ' . $LeIene->genre;
echo '<br>';
echo 'Year' . ': ' . $LeIene->year;
echo '<br>';
