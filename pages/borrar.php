
<?php
require '../db_conexion.php';

if (isset($_POST['borrar'])) 
{  
    $ref=$_POST['ref'];

        $sql=$cnnPDO->prepare("DELETE FROM carrito WHERE ref = :ref");

        $sql->bindParam(':ref',$ref);

        $sql->execute();

    
}
header("location:cart.php");
?>