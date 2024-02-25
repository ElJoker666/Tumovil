
<?php
require '../db_conexion.php';

if (isset($_POST['borrar'])) 
{  
    $ref=$_POST['ref'];
    $nombre=$_POST['nombre'];

        $sql=$cnnPDO->prepare("DELETE FROM pedidos WHERE ref = :ref and nombre = :nombre");

        $sql->bindParam(':ref',$ref);
         $sql->bindParam(':nombre',$nombre);

        $sql->execute();

    
}
header("location:pedidos.php");
?>