<?php
require 'models/Database.php';
require 'Core/functions.php';

$errorMessage;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
        $user = Database::getUserByEmail($email);
        $_SESSION['currentUser'] = [
            'id' => $user['id'],
            'email' => $user['correo'],
            'name' => $user['nombre'],
            'lastName' => $user['apellido']
        ];
        header('Location: /bienvenida');
    } else {
        $errorMessage = '<p class="text-center text-danger">Ya existe un usuario con ese correo</p>';
    }
}

$page = 'crear-cuenta';
require 'views/Registration/crear-cuenta.view.php';
