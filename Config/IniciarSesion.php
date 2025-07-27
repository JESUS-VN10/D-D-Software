<?php
session_start();
include_once('../Config/conexion.php');

$database = new Database();
$conexion = $database->conectar();

// Verificar si ya hay una sesión activa
if (isset($_SESSION['Id'])) {
    // Si ya hay una sesión activa, redirigir al usuario a la página de inicio
    header("location: ../pagina_inicio.php");
    exit();
}

// Evitar el almacenamiento en caché por parte del navegador
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Fecha pasada

if (isset($_POST['Correo_electronico'], $_POST['Contraseña'])) {
    $correo = $_POST['Correo_electronico'];
    $password = $_POST['Contraseña'];

    // Consulta preparada para evitar inyección SQL
    $sql = "SELECT Contraseña FROM usuario WHERE Correo_electronico = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(1, $correo);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        $storedPassword = $result['Contraseña'];

        // Verificar la contraseña sin hashing
        if (password_verify($password, $storedPassword)) {
            // Si la contraseña es correcta, redirigir al usuario
            header("location: ../pagina_inicio.php");
            exit();
        } else {
            // Si las credenciales son incorrectas, mostrar un mensaje de error
            header("location: ../iniciar_sesion.php?error=Correo o la Contraseña Incorrectas");
            exit();
        }
    } else {
        // Si no se encuentra ningún usuario con el correo especificado, mostrar un mensaje de error
        header("location: ../iniciar_sesion.php?error=El Usuario no Existe");
        exit();
    }
} else {
    // Si no se proporcionan credenciales de inicio de sesión, redirigir al usuario a la página de inicio de sesión
    header("location: ../iniciar_sesion.php");
    exit();
}
?>








