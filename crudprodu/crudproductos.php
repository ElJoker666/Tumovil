<?php 
  require '../db_conexion.php';
?>
<?php
if(isset($_POST["guardar"]))
{
    $des = $_POST['des'];
    $producto = $_POST['producto'];
    $marca = $_POST['marca'];
    $precioini = $_POST['precioini'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $size = getimagesize($_FILES["imagen"]["tmp_name"]);

    if($size !== false)
    {
        $cargarImagen = $_FILES['imagen']['tmp_name'];
        $imagen = fopen($cargarImagen,'rb');


        $sql=$cnnPDO->prepare("INSERT INTO productos
            (des, producto, marca, precioini, precio, descripcion, imagen) VALUES (:des, :producto, :marca, :precioini, :precio, :descripcion, :imagen )");

        //Asignar el contenido de las variables a los parametros
        $sql->bindParam(':des',$des);
         $sql->bindParam(':producto',$producto);
          $sql->bindParam(':marca',$marca);
           $sql->bindParam(':precioini',$precioini);
            $sql->bindParam(':precio',$precio);
             $sql->bindParam(':descripcion',$descripcion);
        $sql->bindParam(':imagen',$imagen, PDO::PARAM_LOB);

        //Ejecutar la variable $sql
        $sql->execute();
        unset($sql);  
        header("location:mostrarproductos.php"); 
    }

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VISKart</title>
    <link rel="stylesheet" href="../estilos.css">
    <!-- VENDORS STYLESHEET -->
    <link
      rel="stylesheet"
      href="https://vispaui-postdev-deploy.netlify.app/css/main.css"
    />

    <!-- MAIN STYLESHEET -->
    <link rel="stylesheet" href="../css/main.css" />

    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="../assets/logo.png" />

   <!-- script del sweetalert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  </head>
  <body class="products-page">
   <!-------------------------------------
                  NAVBAR 
    -------------------------------------->
    <header class="header">
      <div class="header__item header-logo">
        <img class="logo" src="../assets/logo.png" alt="logo" />
        <a href="../index.php" class="h-4 brandname">
          <span class="primary-font">Tú</span>Movil
        </a>
      </div>
      <div class="header__item header-button__wrapper">

        <div class="header__item header-item__search">
        <a class="st-1 button btn-plain btn-info" href="../index.php">Index 🤓</a>
      </div>


      </div>
      <div class="header__item header-button__wrapper">
        <a class="st-1 button btn-plain btn-danger" href="../crudus/crud.php">Usuarios 🧍</a>
      </div>
 



 
      
      <div class="header__item header-menu__wrapper">
        <ul class="header-menu__list">


          <button class="button btn-plain-icon theme-switcher" id="theme-switcher-btn">
            <img
              class="icon-dark"
              src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/moon.svg"
              alt="dark-light-icon"
              id="theme-icon"
            />
          </button>


        </ul>
      </div>


         
    </header>


      <!-------------------------------------
                  BREADCRUMB 
    -------------------------------------->
    <nav class="breadcrumb">
      <ul class="breadcrumb__list">
        <li class="breadcrumb__item active">
          <a class="breadcrumb__link" href="crudproductos.php">Agregar productos</a>
        </li>
        <li class="breadcrumb__item">
          <img
            class="icon-md icon-grey breadcrumb-icon"
            src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/angle-up.svg"
            alt="arrow"
          />
        </li><li class="breadcrumb__item">
          <a class="breadcrumb__link" href="mostrarproductos.php">Mostrar productos</a>
        </li><li class="breadcrumb__item">
          <img
            class="icon-md icon-grey breadcrumb-icon"
            src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/angle-up.svg"
            alt="arrow"
          />
        </li><li class="breadcrumb__item">
          <a class="breadcrumb__link" href="../crudpedidos/crudpedidos.php">Mostrar pedidos</a>
        </li>

      </ul>
    </nav>


      <!-------------------------------------
                    MAIN 
      -------------------------------------->
      <main class="main">





    <center><div>
        <section class="modal mdl__icons mdl-primary" id="login-el">
          <header class="modal__title">
            <h1 class="h-5">Agregar un producto a TúMovil</h1>
          </header>
          <main class="modal__body">
            <div class="input input__icons input__premium">
              <form method="post" enctype="multipart/form-data">
              <div class="input__email">
                <input class="input__field--text " type="number" placeholder="Escribe el valor descuento" name="des" id="des">
                <label class="input__label">Descuento</label> 
              </div>
              <div class="input__email">
                <input class="input__field--text " type="text" placeholder="Escribe el nombre del producto" name="producto" id="producto">
                <label class="input__label">Producto</label> 
              </div>
            <div class="input__email">
                <input class="input__field--text " type="text" placeholder="Escribe el nombre de la marca" name="marca" id="marca">
                <label class="input__label">Marca</label> 
              </div>
              <div class="input__email">
                <input class="input__field--text " type="number" placeholder="Escribe el precio inicial" name="precioini" id="precioini">
                <label class="input__label">Precio Inicial</label> 
              </div>
              <div class="input__email">
                <input class="input__field--text " type="number" placeholder="Escribe el precio final" name="precio" id="precio">
                <label class="input__label">Precio Final</label> 
              </div>
              <div class="input__email">
                <input class="input__field--text " type="text" placeholder="Escribe su descripcion" name="descripcion" id="descripcion">
                <label class="input__label">Descripcion</label> 
              </div>
               <div class="input__email">
                <input class="input__field--text " type="file" placeholder="" name="imagen" id="imagen">
                <label class="input__label">Imagen</label> 
              </div>
          <input type="hidden" id="ref">
            </div>
            <div class="remember-me__container">
              
            </div>
          </main>
          <footer class="modal__footer">
            <button class="button btn-solid-primary modal__footer--btn" name="guardar" id="guardar" type="submit"><i class="fa-sharp fa-solid fa-floppy-disk"></i> Guardar producto</button>
            </form>
          </footer>
        </section>
      </div></center><br><br><br><br><br><br><br><br><br><br>


      </main>


  </body>
  <!-- SCRIPT FILES -->
  <script src="../scripts/script.js" defer></script>

    <script src="js/jquery.js"></script>
    <script src="js/app.js"></script>
    <script src="js/bootstrap.js"></script>
</html>
<!-- SCRIPT PARA LAS VALIDACIONES -->
  <?php 
  require_once '../cdn.html';
   ?>
<script stype="text/javascript">
  $(document).ready(function(){

    $('#guardar').click(function(){
      if ($("#des").val() == ""){
               Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'No hay ningun valor en descuento!',
                      });
               return false;
      }  else if ($("#producto").val() == ""){
               Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'No hay ningun nombre de producto!',
                      });
               return false;
      } else if ($("#marca").val() == ""){
               Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'No hay ningun nombre de marca!',
                      });
               return false;
      }  else if ($("#precioini").val() == ""){
               Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'No hay ningun valor en precio inicial!',
                      });
               return false;
      } else if ($("#precio").val() == ""){
               Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'No hay ningun valor en el precio final!',
                      });
               return false;
      } else if ($("#descripcion").val() == ""){
               Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'No hay ninguna descripcion!',
                      });
               return false;
      } 
      else if ($("#imagen").val() == ""){
               Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'No hay ninguna imagen!',
                      });
               return false;
      } else {
        Swal.fire({
                        icon: 'success',
                        title: 'Todo salio con exito :)',
                        text: 'Producto registrado en TúMovil!',
                      });
      }
    });
  });
</script>