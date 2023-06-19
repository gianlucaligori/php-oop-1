<?php

include __DIR__ . "/genres.php";
include __DIR__ . "/movies.php";


$arrMovies = [
    new Movie("Pulp Fiction", "Quentin Tarantino", "1994", false, new Genres("Drama", "Action")),
    new Movie("Le Iene", "Quentin Tarantino", "1992", false, new Genres("Drama", "Action")),
];
