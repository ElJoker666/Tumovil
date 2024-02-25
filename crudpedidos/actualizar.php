<?php
    include_once 'database.php';
    $conect = Conexion::conectar();
    try{
        
        if(isset($_POST['id'])) {

           $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $ref = $_POST['ref'];
            $precio = $_POST['precio'];
            $producto = $_POST['producto'];
            $pedido = $_POST['pedido'];
            $id = $_POST['id'];
            $query = "UPDATE pedidos SET nombre = '$nombre', email = '$email', ref = '$ref', precio = '$precio' , producto = '$producto', pedido = '$pedido' WHERE id = '$id'";
            $smt = $conect->prepare($query);
            $smt->execute();
        }
    }
    catch(Exception $e){
        die($e->getMessage());
    }
    

?>