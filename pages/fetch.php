
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
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
              <div class='card__footer'>
              <div class='card__footer--left'>
                <form class='card__button' id='' name='formulario' method='post' action='guardar.php' enctype='multipart/formdata'><button class='button btn-solid-primary buy-button' type='submit' name='guardar' onclick='mialerta()'>Agrega al carrito</button>

                  <input name='ref' type='hidden' id='ref' value='".$ref."' />   
                  <input name='producto' type='hidden' id='producto' value='".$producto."' />                           
                  <input name='marca' type='hidden' id='marca' value='".$marca."' />
                  <input name='precio' type='hidden' id='precio' value='".$precio."' />
                  <input name='descripcion' type='hidden' id='descripcion' value='".$descripcion."' />

                
              </div>
              <div class='card__footer--right'>
                <a href='cart.php'><img class='icon-md icon-danger' src='https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/shopping-cart.svg' alt='heart-icon'/></a>
                </form>
                <a><img class='icon-md icon-success' src='https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/share.svg' alt='share-icon'/></a>
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



 
</body>
</html>