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
    $emailWasModified = $_SESSION['currentUser']['email'] !== $email;    

    if (!validCredentials($name, $lastName, $email, $newPassword)) {
        var_dump($_POST);
        exit();
        header('Location: /mi-cuenta');
        exit();
    }

    $user = Database::getUser($id);

    if ($emailWasModified && userExists($email)) {
        $errorMessage = '<p class="text-center text-danger">Ya existe un usuario con ese correo</p>';
    } else if (!password_verify($password, $user['contrasena'])) {
        $errorMessage = '<p class="text-center text-danger">La contraseña no es correcta</p>';
    } else {
        Database::updateUser($id, $name, $lastName, $email, $newPassword);
        $_SESSION['currentUser'] = [
            'id' => $id,
            'email' => $email,
            'name' => $name,
            'lastName' => $lastName
        ];
        header('Location: /mi-cuenta');
        exit();
    }
}

$name = htmlspecialchars($_SESSION['currentUser']['name'], ENT_QUOTES);
$lastName = htmlspecialchars($_SESSION['currentUser']['lastName'], ENT_QUOTES);
$email = htmlspecialchars($_SESSION['currentUser']['email'], ENT_QUOTES);

$page = 'modificar-cuenta';
require 'views/Session/modificar.view.php';