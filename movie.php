<?php

include __DIR__ . "/genres.php";

class Movie
{

    // VARIABILI
    public $title;
    public $filmDirector;
    public $genre;
    public $year;


    // CONSTRUCT / COSTRUTTORE / METODO DI ISTANZA
    function __construct($title, $filmDirector, $genre, $year, $pegiAge)
    {
        $this->title = $title;
        $this->filmDirector = $filmDirector;
        $this->genre = $genre;
        $this->year = $year;
        $this->pegiAge = $pegiAge;

    }

    public function getMovieInfo()
    {
        return "<p>Title: " . $this->title . ", Year: " . $this->year . ",  Genre: " . $this->genre->genre1 . ", " . $this->genre->genre2 . ", PEGI: " . $this->pegiAge"</p>";
    }

    function isFilmForAdults($age) {
        if ($age >= 18) {
            return "Il film è visibile per i maggiorenni.";
        } else {
            return "Il film non è visibile per i maggiorenni.";
        }
    }
}

// $PulpFiction = new Movie("Pulp Fiction", "Quentin Tarantino", "Drama", "1994");
// echo 'Movie title' . ': ' . $PulpFiction->title;
// echo '<br>';
// echo 'Director' . ': ' . $PulpFiction->filmDirector;
// echo '<br>';
// echo 'Genre' . ': ' . $PulpFiction->genre;
// echo '<br>';
// echo 'Year' . ': ' . $PulpFiction->year;
// echo '<br>';


// $LeIene = new Movie("Le Iene", "Quentin Tarantino", "Drama", "1992");
// echo '<br>';
// echo 'Movie title' . ': ' . $LeIene->title;
// echo '<br>';
// echo 'Director' . ': ' . $LeIene->filmDirector;
// echo '<br>';
// echo 'Genre' . ': ' . $LeIene->genre;
// echo '<br>';
// echo 'Year' . ': ' . $LeIene->year;
// echo '<br>';
