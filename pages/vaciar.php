
<?php
require '../db_conexion.php';

if (isset($_POST['vaciar'])) 
{  
        $sql="TRUNCATE TABLE carrito";

        $statement=$cnnPDO->prepare($sql);


        $statement->execute();

    
}
header("location:cart.php");
?>