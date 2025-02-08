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
    $name = $_POST['name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $newPassword = (empty($_POST['new-password'])) ? $password : $_POST['new-password'];

    if (!validCredentials($name, $lastName, $email, $newPassword)) {
        var_dump($_POST);
        exit();
        header('Location: /mi-cuenta');
        exit();
    }

    $user = Database::getUser($id);
    if (password_verify($password, $user['contrasena'])) {
        Database::updateUser($id, $name, $lastName, $email, $newPassword);
        $_SESSION['currentUser'] = [
            'id' => $id,
            'email' => $email,
            'name' => $name,
            'lastName' => $lastName
        ];
        header('Location: /mi-cuenta');
        exit();
    } else {
        $errorMessage = '<p class="text-center text-danger">La contraseña no es correcta</p>';
    }
}

$name = $_SESSION['currentUser']['name'];
$lastName = $_SESSION['currentUser']['lastName'];
$email = $_SESSION['currentUser']['email'];

$page = 'modificar-cuenta';
require 'views/Session/modificar.view.php';
