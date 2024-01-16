# PHP OOP Movie

Creare una classe Movie con all' interno delle variabili di istanza, un costruttore e almento un metodo.

Stampare a schermo ( con echo ) due istanze create a partire dalla classe.

#### Bonus 1

Modificare la classe Movie in modo che accetti più di un genere.

#### Bonus 2

Creare un layout completo per stampare a schermo una lista di movies.

## Svolgimento

Seguendo le slide della lezione creo la mia classe Movie `Movie.php`

Creo poi due istanze che stamperò con echo

```php
<?php
  $movie1 = new Movie('titolo movie1', 'director movie1', 1946 , 'genere movie1');
  $movie2 = new Movie('titolo movie2', 'director movie2', 2004 , 'genere movie2'););

  //per stampare

  echo $movie1->title;
  ...
  ...
?>
```

#### Bonus 1

Per poter accettare più di un genere cambio la classe in modo che la variabile `genre` diventi un array, andando poi a cambiare le due istanze per non incontare errori.

```php
<?php
 public array $genre;

  $movie1 = new Movie('titolo movie1', 'director movie1', 1946 , ['genere1, genere2']);
  $movie2 = new Movie('titolo movie2', 'director movie2', 2004 ,  ['genere1, genere2']););
?>
```

Ovviamente la stampa non potrà più avvenire con un semplice echo, per questo ho usato un `foreach` che farà poi echo sui singoli generi.

#### Bonus 2

Per questo bonus ho creato un 'database' `database/db.php` dove raccolgo tutti i movies necessari tramite array.

Per stamparli a schermo con dello style inserisco il `foreach` nella pagina `components/body.php`, che sarà il body della pagina `index.php`.

Il `foreach` andrà a creare a ogni ciclo una nuova istanza che verrà usata per riempire il contenuto degli elementi html principali della pagina.

```php
<?php
 <?php foreach ($movies as $movie) : ?>
    <?php $movie = new Movie($movie['title'], $movie['director'], $movi['year'], $movie['genres'], $movie['description']); ?>
 <?php endforeach; ?>
?>
```
