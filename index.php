<?php

require_once __DIR__ . '/models/movie.php';

$tre_uomini_e_una_gamba = new Movie('Tre uomini e una gamba', 'Aldo, Giovanni e Giacomo', 1997, 'Commedia');
$quo_vado = new Movie('Quo vado?', 'Checco Zalone', 2016, 'Commedia');


echo $tre_uomini_e_una_gamba->title;
echo '<br>';
echo $tre_uomini_e_una_gamba->director;
echo '<br>';
echo $tre_uomini_e_una_gamba->year;
echo '<br>';
echo $tre_uomini_e_una_gamba->getGenre();
echo '<br>';

echo '<hr />';

echo $quo_vado->title;
echo '<br>';
echo $quo_vado->director;
echo '<br>';
echo $quo_vado->year;
echo '<br>';
echo $quo_vado->getGenre();
echo '<br>';
