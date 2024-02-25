<?php
    include_once 'database.php';
    $conect = Conexion::conectar();

    try{
        
        if(isset($_POST['email'])) {

            $email = $_POST['email'];
            $nombre = $_POST['nombre'];
            $fecha = $_POST['fecha'];
            $psw = $_POST['psw'];
            $query = "INSERT INTO users (email, nombre, fecha, psw) VALUES ('$email','$nombre','$fecha','$psw')";
            $smt = $conect->prepare($query);
            $smt->execute();
        }
    }
    catch(Exception $e){
        die($e->getMessage());
    }
    

?>