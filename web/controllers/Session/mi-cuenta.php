<?php

if (!isset($_SESSION['currentUser'])) {
    header('Location: /');
    exit();
}

$fullName = htmlspecialchars($_SESSION['currentUser']['name'] . " " . $_SESSION['currentUser']['lastName'], ENT_QUOTES);
$email = htmlspecialchars($_SESSION['currentUser']['email'], ENT_QUOTES);

$page = 'mi-cuenta';
require 'views/Session/mi-cuenta.view.php';
