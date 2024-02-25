<?php
    include_once 'database.php';
    $conect = Conexion::conectar();
    try{
        
        if(isset($_POST['id'])) {

           $email = $_POST['email'];
            $nombre = $_POST['nombre'];
            $fecha = $_POST['fecha'];
            $psw = $_POST['psw'];
            $id = $_POST['id'];
            $query = "UPDATE users SET email = '$email', nombre = '$nombre', fecha = '$fecha', psw = '$psw' WHERE id = '$id'";
            $smt = $conect->prepare($query);
            $smt->execute();
        }
    }
    catch(Exception $e){
        die($e->getMessage());
    }
    

?>