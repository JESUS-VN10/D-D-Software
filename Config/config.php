<?php

if (!defined('CLIENT_ID')) {
    define("CLIENT_ID", "AXyY48Wl9I85tyxX3zc5_GVeCbOWc6atc7TpRzK4-O306LpFaAunCVkNAYXTfO_oQvYcEP6qsKlgU2JQ");
}

if (!defined('CURRENCY')) {
    define("CURRENCY", "USD");
}

if (!defined('KEY_TOKEN')) {
    define("KEY_TOKEN", "pCD&D30.*");
}

if (!defined('MONEDA')) {
    define("MONEDA", "$");
}

$num_cart = 0;
if (isset($_SESSION['carrito']['productos'])) {
    $num_cart = count($_SESSION['carrito']['productos']);
}

?>