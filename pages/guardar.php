<?php 
require '../db_conexion.php';
require '../cdn.html';
?>
<?php
if (isset($_POST['guardar'])) 
{  
    $ref=$_POST['ref'];
    $producto=$_POST['producto'];
    $marca=$_POST['marca'];
    $precio=$_POST['precio'];
    $descripcion=$_POST['descripcion'];


    if (!empty($ref))
    {  
        $sql=$cnnPDO->prepare("INSERT INTO carrito
            (ref, producto, marca, precio, descripcion) VALUES (:ref, :producto, :marca, :precio, :descripcion)");
        
        $sql->bindParam(':ref',$ref);
        $sql->bindParam(':producto',$producto);
        $sql->bindParam(':marca',$marca);
        $sql->bindParam(':precio',$precio);
        $sql->bindParam(':descripcion',$descripcion);

        $sql->execute();
        unset($sql);
        unset($cnnPDO);
    header("location:cart.php");
    }
}
?>