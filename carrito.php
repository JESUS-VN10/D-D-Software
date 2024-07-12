<?php
session_start();
require 'Config/config.php';

// Verificar si se recibieron los datos necesarios
if (isset($_POST['id'], $_POST['token'])) {
    // Obtener los datos del formulario
    $id = $_POST['id'];
    $token = $_POST['token'];

    // Verificar la validez del token
    $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);

    if ($token == $token_tmp) {
        // Añadir el producto al carrito
        if (isset($_SESSION['carrito']['productos'][$id])) {
            $_SESSION['carrito']['productos'][$id] += 1;
        } else {
            $_SESSION['carrito']['productos'][$id] = 1;
        }
        
        // Obtener el número total de productos en el carrito
        $numero_productos = count($_SESSION['carrito']['productos']);

        // Preparar la respuesta JSON
        $response = [
            'ok' => true,
            'numero' => $numero_productos
        ];
    } else {
        // Token inválido
        $response = [
            'ok' => false,
            'error' => 'Token inválido'
        ];
    }
} else {
    // Datos incompletos
    $response = [
        'ok' => false,
        'error' => 'Datos incompletos'
    ];
}

// Enviar la respuesta JSON
header('Content-Type: application/json');
echo json_encode($response);
