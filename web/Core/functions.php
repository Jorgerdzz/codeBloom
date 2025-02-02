<?php

function isValidEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false && strlen($email) <= 255;
}

function isValidString($string)
{
    return strlen($string) >= 2 && strlen($string) <= 255;
}

function validCredentials($name, $lastName, $email, $password)
{
    return isValidString($name)
        && isValidString($lastName)
        && isValidEmail($email)
        && isValidString($password);
}

function userExists($email)
{
    $users = Database::getUsers();
    foreach ($users as $user) {
        if ($user['correo'] === $email) {
            return true;
        }
    }
    return false;
}

function formatDate($date)
{
    $datetime = new DateTime($date);

    $months = [
        1 => 'enero',
        2 => 'febrero',
        3 => 'marzo',
        4 => 'abril',
        5 => 'mayo',
        6 => 'junio',
        7 => 'julio',
        8 => 'agosto',
        9 => 'septiembre',
        10 => 'octubre',
        11 => 'noviembre',
        12 => 'diciembre'
    ];

    $day = ltrim($datetime->format('d'), '0');
    $month = $months[(int)$datetime->format('m')];
    $year = $datetime->format('Y');

    return "{$day} de {$month} de {$year}";
}

function formatAgeRating($ageRating)
{
    if ($ageRating === 0) {
        return "Apta para todos los públicos";
    } else {
        return "No recomendada para menores de {$ageRating} años";
    }
}
