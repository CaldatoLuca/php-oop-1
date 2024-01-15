<?php

require_once __DIR__ . '/models/Movie.php';
require __DIR__ . '/data/movies.php';

// foreach ($movies as $movie) {
//     $movie = new Movie($movie['title'], $movie['director'], $movie['year'], $movie['genres']);

//     echo $movie->title;
//     echo '<br>';
//     echo $movie->director;
//     echo '<br>';
//     echo $movie->year;
//     echo '<br>';
//     foreach ($movie->getGenre() as $genre) {
//         echo $genre . ' ';
//     }
//     echo '<br>';

//     echo '<hr />';
// }

require_once __DIR__ . '/components/head.php';
require_once __DIR__ . '/components/body.php';
