<?php

include __DIR__ . "/genres.php";
include __DIR__ . "/movies.php";


$arrMovies = [

    $pulpfiction = new Movie("Pulp Fiction", "Quentin Tarantino", "1994", "PEGI: 18", new Genres("Drama", "Action")),
    $LeIene = new Movie("Le Iene", "Quentin Tarantino", "1992", "PEGI: 18", new Genres("Drama", "Action")),
];
