<?php

include __DIR__ . "/genres.php";

class Movie
{

    // VARIABILI
    public $title;
    public $filmDirector;
    public $genre;
    public $year;
    public $isForbiddenToMinors;


    // CONSTRUCT / COSTRUTTORE / METODO DI ISTANZA
    function __construct($title, $filmDirector, $genre, $year, $isForbiddenToMinors)
    {
        $this->title = $title;
        $this->filmDirector = $filmDirector;
        $this->genre = $genre;
        $this->year = $year;
        $this->isForbiddenToMinors = $isForbiddenToMinors;
    }

    public function verifyPEGI($age)
    {
        if ($age < $this->isForbiddenToMinors) {
            echo "Età minima:" . " " . $this->isForbiddenToMinors;
        }
    }
}

$PulpFiction = new Movie("Pulp Fiction", "Quentin Tarantino", "Drama", "1994", 16);
echo 'Movie title' . ': ' . $PulpFiction->title;
echo '<br>';
echo 'Director' . ': ' . $PulpFiction->filmDirector;
echo '<br>';
echo 'Genre' . ': ' . $PulpFiction->genre;
echo '<br>';
echo 'Year' . ': ' . $PulpFiction->year;
echo '<br>';
$PulpFiction->verifyPEGI(14);
echo '<br>';



$LeIene = new Movie("Le Iene", "Quentin Tarantino", "Drama", "1992", 16);
echo '<br>';
echo 'Movie title' . ': ' . $LeIene->title;
echo '<br>';
echo 'Director' . ': ' . $LeIene->filmDirector;
echo '<br>';
echo 'Genre' . ': ' . $LeIene->genre;
echo '<br>';
echo 'Year' . ': ' . $LeIene->year;
echo '<br>';
$LeIene->verifyPEGI(14);
