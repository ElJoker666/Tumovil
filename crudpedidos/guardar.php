<?php
    include_once 'database.php';
    $conect = Conexion::conectar();

    try{
        
        if(isset($_POST['nombre'])) {

            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $ref = $_POST['ref'];
            $precio = $_POST['precio'];
            $producto = $_POST['producto'];
            $pedido = $_POST['pedido'];
            $query = "INSERT INTO pedidos (nombre, email, ref, precio, producto, pedido) VALUES ('$nombre','$email','$ref','$precio','$producto','$pedido')";
            $smt = $conect->prepare($query);
            $smt->execute();
        }
    }
    catch(Exception $e){
        die($e->getMessage());
    }
    

?>