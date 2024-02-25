<?php

require '../db_conexion.php';
require '../cdn.html';

$salida='<div class="pala">';	

if (isset($_POST['consulta'])){
	$q = $_POST['consulta'];

	$query = "SELECT ref, producto, marca, precio, descripcion, imagen, des, precioini FROM productos WHERE producto LIKE '%$q%' OR marca LIKE '%$q%' OR precio LIKE '%$q%'";
}
else {
	$query = "SELECT * FROM productos ORDER BY ref";
}

$resultado = $cnnPDO->query($query);
$reg = $resultado->rowCount();  

if ($reg > 0 ){

	$salida.="<section class='main-products card-small'>";

	while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
		extract($fila);
		$salida.="<article class='card card__ecommerce'><div class='card__body'>
              <div class='card__badge'>
                <img class='badge__icon icon-danger' src='https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/bookmark.svg' alt='bookmark-icon'/>
                <span class='card__discount'>".$des."% OFF</span>
              </div><img src='data:image/png;base64," . base64_encode($fila['imagen']) . "' class='card__img' alt='card-image'/>
              <div class='card__title'>
                <h1 class='h-5'>".$producto."</h1>
                <p class='caption'>".$marca."</p>
              </div>
              <div class='card__content'>
                <p class='bd-5 card__price'>$<strike>".$precioini."</strike> <span class='card__content--newprice'>".$precio."</span> /-</p>
              </div>

              <center> <p class='caption'>".$descripcion."</p></center>
              <div class='card__footer'>
              <div class='card__footer--left'>
                <div>

                
              </div>
              <div class='card__footer--right'>
              <form method='post' action='borrar.php'>
              <input name='ref' type='hidden' id='ref' value='".$ref."' /> 
               <button class='btn btn-danger btn-sm delete' name='borrar' type='submit'><i class='fa-sharp fa-solid fa-trash-can'></i> Eliminar</button>

              </form>
              </div>

              </div>
            </div>
            </div></article>";
	}

	$salida.="</section></div>";

} else {

	$salida="<br><center><div class='alert alert-danger' role='alert'> <b>No se encontro ningún resultado que coincidan con está búsqueda</b> </center>";

}  
 echo $salida;

?>



 