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

    public static function getMovies()
    {
        $instance = new self();
        $query = "SELECT * FROM Peliculas";
        return $instance->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getUsers()
    {
        $instance = new self();
        $query = "SELECT * FROM Usuarios";
        return $instance->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getMovie($id)
    {
        $instance = new self();
        $query = "SELECT * FROM Peliculas WHERE id = :id";
        $params = ['id' => $id];
        return $instance->query($query, $params)->fetch(PDO::FETCH_ASSOC);
    }

    public static function createUser($name, $lastname, $email, $password)
    {
        $instance = new self();
        $query = "INSERT INTO Usuarios(nombre, apellido, correo, contrasena) VALUES (:name, :lastname, :email, :password)";
        $params = [
            'name' => $name,
            'lastname' => $lastname,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ];
        $instance->query($query, $params);
    }
}
