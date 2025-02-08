<?php

if (!isset($_SESSION['currentUser'])) {
    header('Location: /');
    exit();
}

$fullName = "{$_SESSION['currentUser']['name']} {$_SESSION['currentUser']['lastName']}";
$email = $_SESSION['currentUser']['email'];

$page = 'mi-cuenta';
require 'views/Session/mi-cuenta.view.php';
