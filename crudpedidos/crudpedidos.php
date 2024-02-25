<?php 
  require '../db_conexion.php';
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


    <div class="header__item header-item__search">
        <div class="input input__icons">
          <input
            class="input__field--text search"
            type="search"
            placeholder="Search por nombre"
            id="search"
            name="search"
          />
        </div>
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
        <li class="breadcrumb__item ">
          <a class="breadcrumb__link" href="../crudprodu/crudproductos.php">Agregar productos</a>
        </li>
        <li class="breadcrumb__item">
          <img
            class="icon-md icon-grey breadcrumb-icon"
            src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/angle-up.svg"
            alt="arrow"
          />
        </li><li class="breadcrumb__item">
          <a class="breadcrumb__link" href="../crudprodu/mostrarproductos.php">Mostrar productos</a>
        </li><li class="breadcrumb__item">
          <img
            class="icon-md icon-grey breadcrumb-icon"
            src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/angle-up.svg"
            alt="arrow"
          />
        </li><li class="breadcrumb__item active">
          <a class="breadcrumb__link" href="../crudpedidos/crudpedidos.php">Mostrar pedidos</a>
        </li>

      </ul>
    </nav>

      <!-------------------------------------
                    MAIN 
      -------------------------------------->
      <main class="main">



<div class="container">
        <table class="table" id="tabla">
            <caption>Pedidos Registrados en TúMovil</caption>
            <thead>
                <tr>
                  <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Referencia</th>
                    <th>Precio</th>
                    <th>Producto</th>
                    <th>Pedido</th>
                    <th>Borrar</th>
                </tr>
            </thead>

            <tbody id="cuerpo">
                
            </tbody>
        </table>
    </div>
    <br><br><br><br>

    <center><div>
        <section class="modal mdl__icons mdl-warning" id="login-el">
          <header class="modal__title">
            <h1 class="h-5">Seleccione algun pedido o agregue uno.</h1>
          </header>
          <main class="modal__body">
            <div class="input input__icons input__premium">
              <form id="tareas-form" method="post">
              <div class="input__email">
                <input class="input__field--text " type="text" placeholder="Escribe un nombre" name="nombre" id="nombre">
                <label class="input__label">Nombre</label> 
              </div>
            <div class="input__email">
                <input class="input__field--text " type="text" placeholder="Escribe un email" name="email" id="email">
                <label class="input__label">Email</label> 
              </div>
              <div class="input__email">
                <input class="input__field--text " type="text" placeholder="Escribe una referencia" name="ref" id="ref">
                <label class="input__label">Referencia</label> 
              </div>
              <div class="input__email">
                <input class="input__field--text " type="text" placeholder="Escribe un precio" name="precio" id="precio">
                <label class="input__label">Precio</label> 
              </div>
              <div class="input__email">
                <input class="input__field--text " type="text" placeholder="Escribe un producto" name="producto" id="producto">
                <label class="input__label">Producto</label> 
              </div>

              <div class="input__email">
                <input class="input__field--text " type="text" placeholder="Escribe un pedido" name="pedido" id="pedido">
                <label class="input__label">Pedido</label> 
              </div>
            
              
              <input class="input__field--text " type="hidden" placeholder="Escribe un producto" name="id" id="id">
             
       
            </div>
            <div class="remember-me__container">
              
            </div>
          </main>
          <footer class="modal__footer">
            <button class="button btn-solid-warning modal__footer--btn" name="boton_guardar" id="boton_guardar" type="submit"><i class="fa-sharp fa-solid fa-floppy-disk"></i> Guardar</button>
            </form>
          </footer>
        </section>
      </div></center><br>


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

    let formatoemail = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    let nomape = /^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/;
    let contra = /^(?=.*\d)(?=.*[a-z]).{6,}$/;

    $('#boton_guardar').click(function(){
      if ($("#nombre").val() == ""){
               Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'No hay ningun nombre!',
                      });
               return false;
      }  else if ($("#email").val() == ""){
               Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'No hay ningun email!',
                      });
               return false;
      } else if ($("#ref").val() == ""){
               Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'No hay ninguna referencia!',
                      });
               return false;
      } else if ($("#precio").val() == ""){
               Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'No hay ningun precio!',
                      });
               return false;
      } else if ($("#producto").val() == ""){
               Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'No hay ningun producto!',
                      });
               return false;
      } else {
        Swal.fire({
                        icon: 'success',
                        title: 'Todo salio con exito :)',
                        text: 'Pedido guardado o editado!',
                      });
      }
    });
  });
</script>