<?php
require 'models/Database.php';
require 'Core/functions.php';

if (!isset($_GET['id'])) {
    header('Location: /');
    exit();
}

$id = $_GET['id'];

$movie = Database::getMovie($id);

if (!$movie) {
    http_response_code(404);
    $page = '404';
    require 'views/404.php';
    exit();
}

$title = $movie['titulo'];
$director = $movie['direccion'];
$releaseDate = $movie['fecha_estreno'];
$runningTime = $movie['duracion'];
$cast = $movie['reparto'];
$ageRating = $movie['calificacion_edad'];
$summary = $movie['sinopsis'];

$releaseDate = formatDate($releaseDate);

$page = 'pelicula';
require 'views/pelicula.view.php';
