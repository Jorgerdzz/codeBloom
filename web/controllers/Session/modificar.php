<?php
require 'models/Database.php';

if (!isset($_SESSION['currentUser'])) {
    header('Location: /');
    exit();
}

$userId = $_SESSION['currentUser']['id'];
$email = $_SESSION['currentUser']['email'];

$errorMessage;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {   
    $password = $_POST['password'];
    $user = Database::getUser($email);
    if (password_verify($password, $user['contrasena'])) {
        $name = $_POST['name'];
        $lastName = $_POST['last-name'];
        $email = $_POST['email'];  
        $newPasword;
        if (!isset($_POST['new-password'])) {
            $newPassword = $password;
        } else {
            $newPassword = $_POST['new-password'];
        }       
        Database::updateUser($userId, $name, $lastName, $email, $newPassword);
        header('Location: /mi-cuenta');
        exit(); 
    } else {
        $errorMessage = '<p class="text-center text-danger">La contraseña no es correcta</p>';
    }
}

$name = $_SESSION['currentUser']['name'];
$lastName = $_SESSION['currentUser']['lastName'];


$page = 'modificar-cuenta';
require 'views/Session/modificar.view.php';
