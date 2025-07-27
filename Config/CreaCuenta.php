<?php
session_start();
include_once('../Config/conexion.php');

$database = new Database();
$conexion = $database->conectar();

if (isset($_POST['Nombre_U'], $_POST['Cedula_U'], $_POST['Correo_electronico'], $_POST['Contraseña'], $_POST['RContraseña'], $_POST['Continuar'])) {
    function validar($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $usuario = validar($_POST['Nombre_U']);
    $cedula = validar($_POST['Cedula_U']);
    $correo = validar($_POST['Correo_electronico']);
    $Password = validar($_POST['Contraseña']);
    $RPassword = validar($_POST['RContraseña']);

    if (empty($usuario) || empty($cedula) || empty($correo) || empty($Password) || empty($RPassword)) {
        header("location: ../crea_cuenta.php?error=Todos los campos son requeridos");
        exit();
    } elseif ($Password !== $RPassword) {
        header("location: ../crea_cuenta.php?error=Las contraseñas no coinciden");
        exit();
    } else {
        // Aplicar hashing a la contraseña antes de almacenarla en la base de datos
        $hashedPassword = password_hash($Password, PASSWORD_DEFAULT); 

        $sql = "INSERT INTO usuario (Nombre_U, Cedula_U, Correo_electronico, Contraseña) VALUES (?, ?, ?, ?)";
        $stmt = $conexion->prepare($sql);
        $result = $stmt->execute([$usuario, $cedula, $correo, $hashedPassword]);  

        if ($result) {
            header("location: ../crea_cuenta.php?success=Usuario creado con éxito");
            exit();
        } else {
            header("location: ../crea_cuenta.php?error=Ocurrió un error al crear el usuario");
            exit();
        }
    }
} else {
    header("location: ../crea_cuenta.php");
    exit();
}
?>


