<?php

require '../db_conexion.php';
require '../cdn.html';
session_start();

$salida='<div>';	

if (isset($_SESSION['nombre'])){
	$q = $_SESSION['nombre'];
  $a = $_SESSION['email'];

	$query = "SELECT nombre, email, ref, precio, producto, pedido FROM pedidos WHERE nombre  LIKE '%$q%' OR email LIKE '%$q%'";
}

$resultado = $cnnPDO->query($query);
$reg = $resultado->rowCount();  

if ($reg > 0 ){

	$salida.="<div class='wishlist'>
        <section class='wishlist-items card-small'>";

	while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
		extract($fila);
		$salida.="<article class='card card__ecommerce'>
            <div class='card__body'>
              
        
              <div class='card__title'>
                <h1 class='h-5'>".$producto."</h1>
                <p class='caption'>Nombre: ".$nombre."</p>
              </div>
              <div class='card__content'>
                <p class='bd-5 card__price'><span class='card__content--newprice'>Por: ".$precio."</span></p>
              </div>
            </div>
            <div class='card__footer'>
              <div class='card__footer--left'>
                <a class='card__button' href='#''><button class='button btn-solid-primary buy-button'>".$pedido."</button></a>
                <form action='borrarpedido.php' method='post' class='card__button'>
               <button class='button btn-solid-danger remove-btn' name='borrar' type='submit'>Quitar el pedido</button>
               <input name='nombre' type='hidden' id='nombre' value='".$_SESSION['nombre']."' /> 
               <input name='ref' type='hidden' id='ref' value='".$ref."' /> 
                </form>
              </div>
              
            </div>
          </article>";
	}

	$salida.="</section>
      </div>";

} else {

	$salida="<br><center><div class='alert alert-danger' role='alert'> <b>No se encontro ningún producto que coincidan con tu pedido</b> </center>";

}  
 echo $salida;

?>
