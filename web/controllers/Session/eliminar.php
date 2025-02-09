<?php
require 'models/Database.php';
require 'Core/functions.php';

if (!isset($_SESSION['currentUser'])) {
    header('Location: /');
    exit();
}

$id = $_SESSION['currentUser']['id'];

$errorMessage;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];
    $user = Database::getUser($id);

    if (password_verify($password, $user['contrasena'])) {
        session_unset();
        session_destroy();
        Database::deleteUser($id);
        header('Location: /');
        exit();
    } else {
        $errorMessage = '<p class="text-center text-danger">La contraseña no es correcta</p>';
    }
}

$page = 'eliminar-cuenta';
require 'views/Session/eliminar.view.php';
