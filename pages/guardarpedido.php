<?php 
require '../db_conexion.php';
require '../cdn.html';
?>
<?php
if (isset($_POST['guardar'])) 
{  
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $ref=$_POST['ref'];
    $precio=$_POST['precio'];
    $producto=$_POST['producto'];
    $pedido=$_POST['pedido'];


    if (!empty($nombre))
    {  
        $sql=$cnnPDO->prepare("INSERT INTO pedidos
            (nombre, email, ref, precio, producto, pedido) VALUES (:nombre, :email, :ref, :precio, :producto, :pedido)");
        
        $sql->bindParam(':nombre',$nombre);
        $sql->bindParam(':email',$email);
        $sql->bindParam(':ref',$ref);
        $sql->bindParam(':precio',$precio);
        $sql->bindParam(':producto',$producto);
        $sql->bindParam(':pedido',$pedido);

        $sql->execute();
        unset($sql);
        unset($cnnPDO);

    }

}
?>
<?php
require '../db_conexion.php';

if (isset($_POST['guardar'])) 
{  
        $sql="TRUNCATE TABLE carrito";

        $statement=$cnnPDO->prepare($sql);


        $statement->execute();

    
}
header("location:cart.php");
?>