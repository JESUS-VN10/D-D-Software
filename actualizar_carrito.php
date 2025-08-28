<?php
session_start();
require 'Config/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
    $cantidad = isset($_POST['cantidad']) ? intval($_POST['cantidad']) : 0;

    if ($id > 0 && $cantidad > 0) {
        if (isset($_SESSION['carrito']['productos'][$id])) {
            $_SESSION['carrito']['productos'][$id] = $cantidad;
            $response = array('ok' => true);
        } else {
            $response = array('ok' => false, 'error' => 'Producto no encontrado en el carrito');
        }
    } else {
        $response = array('ok' => false, 'error' => 'Datos incompletos');
    }

    echo json_encode($response);
}
?>
