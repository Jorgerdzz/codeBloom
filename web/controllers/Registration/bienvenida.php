<?php

if (empty($_SESSION['currentUser'])) {
    header('Location: /');
    exit();
}

$name = htmlspecialchars($_SESSION['currentUser']['name'], ENT_QUOTES);

$page = 'bienvenida';
require 'views/Registration/bienvenida.view.php';
