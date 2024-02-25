<?php
require_once 'db_conexion.php';
if (isset($_POST['enviar'])) 
{  
    $nombre=$_POST['nombre'];
    $fecha=$_POST['fecha'];
    $email=$_POST['email'];
    $psw=$_POST['psw'];

    if (!empty($email) && !empty($nombre) && !empty($fecha) && !empty($psw))
    {  
        $sql=$cnnPDO->prepare("INSERT INTO users 
            (nombre, fecha, email, psw) VALUES (:nombre, :fecha, :email, :psw)");
        
        $sql->bindParam(':nombre',$nombre);
        $sql->bindParam(':email',$email);
        $sql->bindParam(':fecha',$fecha);
        $sql->bindParam(':psw',$psw);
        $sql->execute();
        unset($sql);
        unset($cnnPDO);

    header("location:index.php");
    }
}
?>