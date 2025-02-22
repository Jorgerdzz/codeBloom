<?php

$name;
$lastName;
$email;

if (isset($_SESSION['currentUser'])) {
    $name = $_SESSION['currentUser']['name'];
    $lastName = $_SESSION['currentUser']['lastName'];
    $email = $_SESSION['currentUser']['email'];
}

$page = 'contacto';
require 'views/contacto.view.php';
