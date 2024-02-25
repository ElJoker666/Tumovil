<?php

    include_once 'database.php';
    $conect = Conexion::conectar();

    
   
    try{
        if(isset($_POST['id'])){
            $id = $_POST['id'];
            $query="DELETE FROM users WHERE id = '$id'";
            $smt = $conect->prepare($query);
            $smt->execute();
        }    
        
    }
    catch(Exception $e){
        die($e->getMessage());
    }

?>