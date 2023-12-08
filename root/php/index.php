<?php
$movie = "http://www.omdbapi.com/?apikey=f4196ce9";
if (isset($_GET["enter"])) {
    $type = $_GET["type"];
    $filmName = $_GET["text"];
    $movies = "$movie&type=$type&s=$filmName";
    $contents = file_get_contents($movies);
    $jsonMovies = json_decode($contents, true);
    // var_dump($movies);
    // var_dump($jsonMovies);
}
