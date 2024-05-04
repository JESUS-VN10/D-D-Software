<?php

class Database
{
    private $hostname = "localhost";
    private $database = "bd_d&dsoftware";
    private $username = "root";
    private $password = "";
    private $charset = "utf8";

    public function conectar()
    {
        try {
            $conexion = new PDO("mysql:host=$this->hostname;dbname=$this->database;charset=$this->charset", $this->username, $this->password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            exit();
        }
    }
}
