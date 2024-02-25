<?php

require '../db_conexion.php';
require '../cdn.html';
session_start();

$salida='<div class="pala">';	

if (isset($_POST['consulta'])){
	$q = $_POST['consulta'];

	$query = "SELECT ref FROM carrito WHERE ref LIKE '%$q%'";
}
else {
	$query = "SELECT * FROM carrito ORDER BY ref";
}

$resultado = $cnnPDO->query($query);
$reg = $resultado->rowCount();  

if ($reg > 0 ){

	$salida.="<section class='my-products'>";

	while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
		extract($fila);
		$salida.="<article class='my-item horizontal-card'>
            
            <div class='card-body'>
              <div class='my-item__disc'>
                <h5 class='h-5'>".$producto."</h5>
                <p class='bd-5'>".$marca."</p>
                <p class='bd-10'>".$descripcion."</p>
              </div>
              <p class='bd-5'>$ <span class='card__content--newprice'>".$precio."</span> /-</p>
              <div class='card-button-wrapper'>
               <form method='post' action='borrar.php'>
               <input name='ref' type='hidden' id='ref' value='".$ref."' /> 
                <button class='button btn-solid-danger top-item__button' name='borrar' type='submit'>
                  Eliminar del carrito
                </button>
                </form>
              </div>
            </div>

          </article>";
	}

	$salida.="</section></div><br><br><div class='card'>
              <div class='price-desc'>
                <p class='cp card-caption'>Tienes un cupon a tu disposicion?</p>
                <button class='button txt-center apply-coupons-btn'>
                  <img
                    class='icon-md icon-success'
                    src='https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/tags.svg'
                    alt='tags'
                  />
                 Aplicar cupones
                </button>
              </div>
              <form method='post' action='guardarpedido.php'>
            <a class='card__button' href='#'>
              <button class='button btn-solid-primary' name='guardar' type='submit'>
              💸 Hacer pedido
              </button>
            </a>
            <input name='nombre' type='hidden' id='nombre' value='".$_SESSION['nombre']."' /> 
            <input name='email' type='hidden' id='email' value='".$_SESSION['email']."' /> 
            <input name='ref' type='hidden' id='ref' value='".$ref."' /> 
            <input name='precio' type='hidden' id='precio' value='".$precio."' /> 
            <input name='producto' type='hidden' id='producto' value='".$producto."' /> 
            <input name='pedido' type='hidden' id='pedido' value='Procesando...' /> 
            </form>
            </div>";

} else {

	$salida="<br><center><div class='alert alert-danger' role='alert'> <b>No se encontro ningún producto que coincidan con tu pedido</b> </center>";

}  
 echo $salida;

?>



 