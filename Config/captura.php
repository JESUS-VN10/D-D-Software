<?php
    // INCLUYE EL ENCABEZADO
    require_once '../header.php';
    // INCLUYE EL ARCHIVO DE CONFIGURACIÓN
    require '../Config/config.php';
    // INCLUYE LA CONEXIÓN
    include_once('../Config/conexion.php');
    
    // INICIA LA CONEXIÓN CON LA BASE DE DATOS
    $db = new Database();
    $con = $db->conectar();

    // OBTIENE LOS DATOS DEL CUERPO DE LA SOLICITUD
    $json = file_get_contents('php://input');
    $datos = json_decode($json, true);

    // IMPRIME LOS DATOS RECIBIDOS PARA DEPURACIÓN
    echo '<pre>';
    print_r($datos);
    echo '</pre>';

    // VERIFICA SI LOS DATOS RECIBIDOS SON UN ARREGLO
    if (is_array($datos)) {
        
        // OBTIENE LOS DETALLES DE LA TRANSACCIÓN
        $id_transaccion = $datos['detalles']['id'];
        $total = $datos['detalles']['purchase_units'][0]['amount']['value'];
        $status = $datos['detalles']['status'];
        $fecha = $datos['detalles']['update_time'];
        $fecha_nueva = date('Y-m-d H:i:s', strtotime($fecha));
        $email = $datos['detalles']['payer']['email_address'];
        $id_cliente = $datos['detalles']['payer']['payer_id'];
        
        // PREPARA E INSERTA LA INFORMACIÓN EN LA TABLA "compra"
        $sql = $con->prepare("INSERT INTO compra (ID_transaccion, Fecha, Status, Correo, ID_cliente, Total) VALUES (?,?,?,?,?,?)");
        $sql->execute([$id_transaccion, $fecha_nueva, $status, $email, $id_cliente, $total]);
        $id = $con->lastInsertId();

        // VERIFICA SI LA INSERCIÓN EN "compra" FUE EXITOSA
        if ($id > 0) {
            // VERIFICA SI HAY PRODUCTOS EN EL CARRITO DE LA SESIÓN
            if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito']['productos'])) {
                $productos = $_SESSION['carrito']['productos'];

                $lista_carrito = array();

                // RECUPERA LOS PRODUCTOS DEL CARRITO DESDE LA BASE DE DATOS
                foreach ($productos as $clave => $cantidad) {
                    $sql = $con->prepare("SELECT Producto_ID, Nombre, Precio, Descuento FROM productos WHERE Producto_ID=? AND Activo=1");
                    $sql->execute([$clave]);
                    $producto = $sql->fetch(PDO::FETCH_ASSOC);
                    if ($producto) {
                        $producto['cantidad'] = $cantidad;
                        $lista_carrito[] = $producto;
                    }
                }

                // VERIFICA SI LA LISTA DE PRODUCTOS DEL CARRITO NO ESTÁ VACÍA
                if (!empty($lista_carrito)) {
                    // INSERTA CADA PRODUCTO EN LA TABLA "detalle_compra"
                    foreach ($lista_carrito as $producto) {
                        $precio = $producto['Precio'];
                        $descuento = $producto['Descuento'];
                        $cantidad = $producto['cantidad'];
                        $precio_desc = ($descuento > 0) ? $precio * (1 - $descuento / 100) : $precio;

                        // PREPARA E INSERTA LA INFORMACIÓN EN LA TABLA "detalle_compra"
                        $sql_insert = $con->prepare("INSERT INTO detalle_compra (ID_compra, ID_producto, Nombre, Precio, Cantidad) VALUES (?,?,?,?,?)");
                        $sql_insert->execute([$id, $producto['Producto_ID'], $producto['Nombre'], $precio_desc, $cantidad]);

                        // DEPURACIÓN: VERIFICA LOS DATOS QUE SE ESTÁN INSERTANDO
                        echo 'Insertando en detalle_compra: ' . print_r([$id, $producto['Producto_ID'], $producto['Nombre'], $precio_desc, $cantidad], true);
                    }
                } 
                // ELIMINA EL CARRITO DE LA SESIÓN
                unset($_SESSION['carrito']);
            } 
        }
    } 
?>


