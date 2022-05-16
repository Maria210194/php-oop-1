<!-- 
    - è definita una classe ‘Movie’
        => all'interno della classe sono dichiarate delle variabili d'istanza
        => all'interno della classe è definito un costruttore
        => all'interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
-->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Movies</title>
</head>
<body>

<?php

include './entities/movie.php';

$movie_1 = new Movie(9);
$movie_2 = new Movie(3);
$movie_3 = new Movie(6);

$movie_1->title = 'Interstellar';
$movie_1->genre = 'Sci-fi';
$movie_1->year = '2014';


$movie_2->title = 'Mr. Nobody';
$movie_2->genre = 'Drammatico';
$movie_2->year = '2009';

$movie_3->title = 'Matrix';
$movie_3->genre = 'Sci-fi';
$movie_3->year = '1999';



//first tests

echo('<pre><div class="card">'.
'<p> Title: ' . $movie_1->title . '</p>'.
'<p> Genre: ' . $movie_1->genre . '</p>'.
'<p> Year: ' . $movie_1->year . '</p>'.
'<p>'.$movie_1->ratingMovie().'</p>'.
'<p>'.$movie_1->yearMovie().'</p>'.
'</div></pre>');



echo('<pre><div class="card">'.
'<p> Title: ' . $movie_2->title . '</p>'.
'<p> Genre: ' . $movie_2->genre . '</p>'.
'<p> Year: ' . $movie_2->year . '</p>'.
'<p>'.$movie_2->ratingMovie().'</p>'.
'<p>'.$movie_2->yearMovie().'</p>'.
'</div></pre>');


?>


</body>
</html>