<?php 
  session_start();
    if (isset($_POST['login'])) {
      require 'db_conexion.php';

      $correo=$_POST['correo'];
      $psw=$_POST['psw'];

      $query=$cnnPDO->prepare('SELECT * from admin WHERE correo=:correo and psw=:psw');

      $query->bindParam(':correo',$correo);
      $query->bindParam(':psw',$psw);

      $query->execute();

      $count=$query->rowCount();
      $campo = $query->fetch();
     
      if ($count) 
      {
        $_SESSION['correo'] = $campo['correo'];
        $_SESSION['psw'] = $campo['psw'];
        header("location:./crudus/crud.php");
      }      
    }
    ob_end_flush();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VISKart</title>

    <!-- VENDORS STYLESHEET -->
    <link
      rel="stylesheet"
      href="https://vispaui-postdev-deploy.netlify.app/css/main.css"
    />

    <!-- MAIN STYLESHEET -->
    <link rel="stylesheet" href="./css/main.css" />

    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="./assets/logo.png" />

   <!-- script del sweetalert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </head>
  <body class="products-page">
   <!-------------------------------------
                  NAVBAR 
    -------------------------------------->
    <header class="header">
      <div class="header__item header-logo">
        <img class="logo" src="./assets/logo.png" alt="logo" />
        <a href="../misesion.php" class="h-4 brandname">
          <span class="primary-font">Tú</span>Movil
        </a>
      </div>
      <div class="header__item header-button__wrapper">

        <div class="header__item header-item__search">
        <a class="st-1 button btn-plain btn-primary" href="index.php">Regresar ⬅</a>
      </div>
        
      </div>
      <div class="header__item header-item__search">
        <a class="st-1 button btn-plain btn-primary" href="./pages/products.php">PRODUCTOS 🛒</a>
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
                  BREADCRUMB 
    -------------------------------------->
    <nav class="breadcrumb">
      <ul class="breadcrumb__list">
        <li class="breadcrumb__item">
          <a class="breadcrumb__link" href="index.php">Home</a>
        </li>
        <li class="breadcrumb__item">
          <img
            class="icon-md icon-grey breadcrumb-icon"
            src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/angle-up.svg"
            alt="arrow"
          />
        </li>
        <li class="breadcrumb__item active">
          <a class="breadcrumb__link" href="">Modo administrador 👑</a>
        </li>
      </ul>
    </nav>

      <!-------------------------------------
                    MAIN 
      -------------------------------------->
      <main class="main">
   
    <center><div>
        <section class="modal mdl__icons mdl-warning" id="login-el">
          <header class="modal__title">
            <h1 class="h-5">Login Administrador</h1>
          </header>
          <main class="modal__body">
            <div class="input input__icons input__premium">
            	<form method="post">
              <div class="input__email">
                <input class="input__field--text email" type="text" placeholder="Escribe tu email de usuario admin" name="correo" required>
                <label class="input__label">Email</label> 
              </div>
            
              <div class="input__password">
                <input class="input__field--text password" type="password" placeholder="Escribe tu contraseña de usuario admin" name="psw" required>
                <label class="input__label">Contraseña</label>
              </div>
            </div>
            <div class="remember-me__container">
              
              <a href="index.php" class="cp">Regresar al index</a>
            </div>
          </main>
          <footer class="modal__footer">
            <button class="button btn-solid-warning modal__footer--btn" name="login" type="submit">Iniciar Sesión</button>
            </form>
          </footer>
        </section>
      </div></center><br>


   
        
        <!-------------------------------------
                      FOOTER 
        -------------------------------------->
      </main>
    </section>


   <!-------------------------------------
                  FOOTER 
    -------------------------------------->
    <footer class="footer">
      <section class="txt-center footer-content">
        <article class="footer-left">
            <a href="./index.php" class="h-4 brandname">
          <span class="primary-font">Tú</span>Movil
        </a>
          <p class="bd-5">
            Somos una empresa pequeña, donde nuestro pincipal objetivos es que nos compres con las mejores ofertas del estado.
          </p>
          <div class="footer-left__sociallinks">
            <a
              href="./index.php"
              class="button btn-socialmedia btn-solid-primary"
            >
              <img
                class="icon-light icon-md button__icon"
                src="https://vispaui-postdev-deploy.netlify.app/assets/twitter.svg"
                alt="twitter"
              />
            </a>

            <a
              href="./index.php/"
              class="button btn-socialmedia btn-solid-danger"
            >
              <img
                class="icon-light icon-md button__icon"
                src="https://vispaui-postdev-deploy.netlify.app/assets/instagram.svg"
                alt="instagram"
              />
            </a>
          </div>
        </article>
       
      </section>
      <p class="bd-5 footer-copyright">
        Copyright &copy; 2022
        <a href="https://aula.utc.edu.mx/"> Equipo TúMovil </a>
        . All Rights Reserved
      </p>
    </footer>
    
    <div class="sidebar-backdrop" id="sidebar-backdrop"></div>
  </body>
  <script src="../scripts/script.js" defer></script>
</html>
<!-- SCRIPT FILES -->
  <script src="./scripts/script.js" defer></script>
</html>
<!-- SCRIPT PARA LAS VALIDACIONES -->
  <?php 
  require_once 'cdn.html';
   ?>
<script stype="text/javascript">
  $(document).ready(function(){

     $('#alerta1').click(function(){
          
            Swal.fire({
                        icon: 'info',
                        title: 'Oops...',
                        text: 'Necesitas iniciar sesion para poder acceder a esta funcion!',
                      });
               return false;
     });
     $('#alerta2').click(function(){
          
            Swal.fire({
                        icon: 'info',
                        title: 'Oops...',
                        text: 'Necesitas iniciar sesion para poder acceder a esta funcion!',
                      });
               return false;
     });
     $('#alerta3').click(function(){
          
            Swal.fire({
                        icon: 'info',
                        title: 'Oops...',
                        text: 'Necesitas iniciar sesion para poder acceder a esta funcion!',
                      });
               return false;
     });
     $('#alerta4').click(function(){
          
            Swal.fire({
                        icon: 'info',
                        title: 'Oops...',
                        text: 'Necesitas iniciar sesion para poder acceder a esta funcion!',
                      });
               return false;
     });
     $('#alertaver1').click(function(){
          
            Swal.fire({
                        icon: 'info',
                        title: 'Oops...',
                        text: 'Necesitas iniciar sesion para poder acceder a esta funcion!',
                      });
               return false;
     });
      $('#alertaver2').click(function(){
          
            Swal.fire({
                        icon: 'info',
                        title: 'Oops...',
                        text: 'Necesitas iniciar sesion para poder acceder a esta funcion!',
                      });
               return false;
     });

 $('#alertaver3').click(function(){
          
            Swal.fire({
                        icon: 'info',
                        title: 'Oops...',
                        text: 'Necesitas iniciar sesion para poder acceder a esta funcion!',
                      });
               return false;
     });

 $('#alertaver4').click(function(){
          
            Swal.fire({
                        icon: 'info',
                        title: 'Oops...',
                        text: 'Necesitas iniciar sesion para poder acceder a esta funcion!',
                      });
               return false;
     });

 $('#alertaver5').click(function(){
          
            Swal.fire({
                        icon: 'info',
                        title: 'Oops...',
                        text: 'Necesitas iniciar sesion para poder acceder a esta funcion!',
                      });
               return false;
     });

 $('#alertaver6').click(function(){
          
            Swal.fire({
                        icon: 'info',
                        title: 'Oops...',
                        text: 'Necesitas iniciar sesion para poder acceder a esta funcion!',
                      });
               return false;
     });



    let formatoemail = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    let nomape = /^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/;
    let contra = /^(?=.*\d)(?=.*[a-z]).{6,}$/;

    $('#enviar').click(function(){
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
      }  else if ($("#confirmar").val() != $("#psw").val()){
               Swal.fire({
                        icon: 'error',
                        title: 'Tienes un error',
                        text: 'No son iguales las contraseñas!',
                      });
               return false;
      } 
    });
  });
</script>