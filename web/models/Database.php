<?php
class Database
{
    private $connection;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=cine;charset=utf8mb4";
        $user = "root";
        $password = "";
        $this->connection = new PDO($dsn, $user, $password);
    }
    private function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement;
    }

    public static function getMovie($id)
    {
        $instance = new self();
        $query = "SELECT * FROM Peliculas WHERE id = :id;";
        $params = ['id' => $id];
        return $instance->query($query, $params)->fetch(PDO::FETCH_ASSOC);
    }

    public static function getAvailableMovies()
    {
        $instance = new self();
        // $currentTime = date('H:i:s');
        // $currentDay = date('Y-m-d');
        // $currentDate = date('Y-m-d H:i:s');

        $currentDate = '2025-01-20 15:30:00';

        $query = "SELECT DISTINCT id_pelicula FROM Pases WHERE CONCAT(fecha, ' ', hora ) >= :currentDate
         AND CONCAT(fecha, ' ', hora ) <= DATE_ADD(DATE_ADD(:currentDate, INTERVAL 7 DAY), INTERVAL 12 HOUR)
         ORDER BY id_sala;";
        $params = [
            'currentDate' => $currentDate
        ];
        return $instance->query($query, $params)->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getUser($id)
    {
        $instance = new self();
        $query = "SELECT * FROM Usuarios WHERE id = :id;";
        $params = ['id' => $id];
        return $instance->query($query, $params)->fetch(PDO::FETCH_ASSOC);
    }

    public static function getUserByEmail($email)
    {
        $instance = new self();
        $query = "SELECT * FROM Usuarios WHERE correo = :email;";
        $params = ['email' => $email];
        return $instance->query($query, $params)->fetch(PDO::FETCH_ASSOC);
    }

    public static function getUsers()
    {
        $instance = new self();
        $query = "SELECT * FROM Usuarios;";
        return $instance->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function createUser($name, $lastname, $email, $password)
    {
        $instance = new self();
        $query = "INSERT INTO Usuarios(nombre, apellido, correo, contrasena) VALUES (:name, :lastname, :email, :password);";
        $params = [
            'name' => $name,
            'lastname' => $lastname,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ];
        $instance->query($query, $params);
    }

    public static function updateUser($id, $name, $lastName, $email, $password)
    {
        $instance = new self();
        $query = "UPDATE Usuarios SET nombre = :name, apellido = :lastname, correo = :email, contrasena = :password WHERE id = :id;";
        $params = [
            'name' => $name,
            'lastname' => $lastName,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'id' => $id
        ];
        $instance->query($query, $params);
    }

    public static function deleteUser($id)
    {
        $instance = new self();
        $query = "DELETE FROM Usuarios WHERE id = :id;";
        $params = ['id' => $id];
        $instance->query($query, $params);
    }
}
