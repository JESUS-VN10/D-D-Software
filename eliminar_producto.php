<?php
require 'Config/config.php';
session_start();

$response = array('ok' => false);

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    if (isset($_SESSION['carrito']['productos'][$id])) {
        unset($_SESSION['carrito']['productos'][$id]);
        $response['ok'] = true;
        $response['numero'] = count($_SESSION['carrito']['productos']);
    }
}

header('Content-Type: application/json');
echo json_encode($response);
