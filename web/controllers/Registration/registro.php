<?php
require 'models/Database.php';
require 'Core/functions.php';

$name = $_POST['name'];
$lastName = $_POST['last-name'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!validCredentials($name, $lastName, $email, $password)) {
    header('Location: /crear-cuenta');
    exit();
}

$userExists = userExists($email);

if (!$userExists) {
    Database::createUser($name, $lastName, $email, $password);
}

$page = 'registro';
require 'views/Registration/registro.view.php';
