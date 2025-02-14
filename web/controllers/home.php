<?php
require 'models/Database.php';

$availableMovies = Database::getAvailableMovies();

$page = 'home';
require 'views/home.view.php';
