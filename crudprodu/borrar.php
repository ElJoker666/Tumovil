
<?php
require '../db_conexion.php';

if (isset($_POST['borrar'])) 
{  
    $ref=$_POST['ref'];

        $sql=$cnnPDO->prepare("DELETE FROM productos WHERE ref = :ref");

        $sql->bindParam(':ref',$ref);

        $sql->execute();

    
}
header("location:mostrarproductos.php");
?>