<?php
require 'models/Database.php';
require 'Core/functions.php';

$errorMessage;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = Database::getUser($email);

    if ($user && password_verify($password, $user['contrasena'])) {
        $_SESSION['currentUser'] = [
            'id' => $user['id'],
            'email' => $user['correo'],
            'name' => $user['nombre']
        ];
        header('Location: /');
        exit();
    } else {
        $errorMessage = '<p class="text-center text-danger">Los datos de inicio de sesión no son correctos</p>';
    }
}

$page = 'iniciar-sesion';
require 'views/Sessions/iniciar-sesion.view.php';
