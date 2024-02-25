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

      <div class="header__item header-item__search">
        
      </div>

      </div>
      <div class="header__item header-button__wrapper">
        <a class="st-1 button btn-plain btn-danger" href="../crudprodu/crudproductos.php">Productos 📲</a>
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



      </div>

         
    </header>

      <!-------------------------------------
                    MAIN 
      -------------------------------------->
      <main class="main">



<div class="container">
        <table class="table" id="tabla">
            <caption>Usuarios registrados en TúMovil</caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Psw</th>
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
            <h1 class="h-5">Ingrese los datos para agregar o editar.</h1>
          </header>
          <main class="modal__body">
            <div class="input input__icons input__premium">
              <form id="tareas-form" method="post">
              <div class="input__email">
                <input class="input__field--text " type="text" placeholder="Escribe el email" name="email" id="email">
                <label class="input__label">Email</label> 
              </div>
            <div class="input__email">
                <input class="input__field--text " type="text" placeholder="Escribe el nombre" name="nombre" id="nombre">
                <label class="input__label">Nombre</label> 
              </div>
              <div class="input__email">
                <input class="input__field--text " type="date" placeholder="Escribe la fecha" name="fecha" id="fecha">
                <label class="input__label">Fecha</label> 
              </div>
              <div class="input__email">
                <input class="input__field--text " type="text" placeholder="Escribe la psw" name="psw" id="psw">
                <label class="input__label">Psw</label> 
              </div>
          <input type="hidden" id="id">
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
      if ($("#email").val() == ""){
               Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'No hay ningun correo!',
                      });
               return false;
      }  else if (!formatoemail.test($("#email").val())){
               Swal.fire({
                        icon: 'error',
                        title: 'Tienes un error',
                        text: 'Este correo no es valido!',
                      });
               return false;
      }  else if ($("#nombre").val() == ""){
               Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'No hay ningun nombre!',
                      });
               return false;
      }  else if (!nomape.test($("#nombre").val())){
               Swal.fire({
                        icon: 'error',
                        title: 'Tienes un error',
                        text: 'Solo letras y espacios!',
                      });
               return false;
      }  else if ($("#fecha").val() == ""){
               Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'No hay ninguna fecha de nacimiento!',
                      });
               return false;
      } else if ($("#psw").val() == ""){
               Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'No hay ninguna contraseña!',
                      });
               return false;
      } else if (!contra.test($("#psw").val())){
               Swal.fire({
                        icon: 'error',
                        title: 'Tienes un error',
                        text: 'La contraseña debe tener 6 caracteres con al menos una letra o un numero!',
                      });
               return false;
      } else if ($("#confirmar").val() == ""){
               Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'No hay ninguna contraseña a confirmar!',
                      });
               return false;
      } else {
        Swal.fire({
                        icon: 'success',
                        title: 'Todo salio con exito :)',
                        text: 'Registro guardado o editado!',
                      });
      }
    });
  });
</script>