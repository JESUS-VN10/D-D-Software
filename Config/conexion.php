<?php

class Database
{
    // Propiedades privadas para almacenar los detalles de la conexión a la base de datos
    private $hostname = "localhost";
    private $database = "bd_d&dsoftware"; 
    private $username = "root";
    private $password = "";
    private $charset = "utf8";

    // Método para conectar a la base de datos
    public function conectar()
    {
        try {
            // Crear una nueva instancia de PDO para la conexión a la base de datos
            $conexion = new PDO("mysql:host=$this->hostname;dbname=$this->database;charset=$this->charset", $this->username, $this->password);
            // Configurar el modo de error de PDO para que lance excepciones
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Retornar la conexión establecida
            return $conexion;
        } catch (PDOException $e) {
            // Manejo de errores: mostrar un mensaje de error y finalizar el script
            echo "Error de conexión: " . $e->getMessage();
            exit();
        }
    }
}


