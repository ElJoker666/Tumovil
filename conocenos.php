<?php require 'db_conexion.php'; ?>
<?php 
  session_start();
    if (isset($_POST['login'])) {

      $email=$_POST['email'];
      $psw=$_POST['psw'];

      $query=$cnnPDO->prepare('SELECT * from users WHERE email=:email and psw=:psw');

      $query->bindParam(':email',$email);
      $query->bindParam(':psw',$psw);

      $query->execute();

      $count=$query->rowCount();
      $campo = $query->fetch();
     
      if ($count) 
      {
        $_SESSION['email'] = $campo['email'];
        $_SESSION['nombre'] = $campo['nombre'];
        $_SESSION['fecha'] = $campo['fecha'];
        $_SESSION['psw'] = $campo['psw'];
        header("location:misesion.php");
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
     <link rel="stylesheet" href="./css/singleproduct.css" />

    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="./assets/logo.png" />

   <!-- script del sweetalert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </head>
  <body class="landing-page">
    <!-------------------------------------
                  NAVBAR 
    -------------------------------------->
    <header class="header">
      <div class="header__item header-logo">
        <img class="logo" src="./assets/logo.png" alt="logo" />
        <a href="./index.php" class="h-4 brandname">
          <span class="primary-font">Tú</span>Movil
        </a>
      </div>
      <div class="header__item header-button__wrapper">
        <a class="button btn-solid-primary" id="login-btn">
          Iniciar sesion
        </a>
        <a class="button btn-plain btn-primary" id="signup-btn">
          Registrate
        </a>
      </div>
      <div class="header__item header-item__search">
        <a class="st-1 button btn-plain btn-primary" href="./pages/products.php">PRODUCTOS 🛒</a>
      </div>
      
      <div class="header__item header-menu__wrapper">
        <ul class="header-menu__list">

            <button class="header-menu__item btn-login" id="alerta1" type="submit">
            <img
              class="icon-md icon-dark"
              src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/user.svg"
              alt="login"
            />
          </button>
      
          <a href="">
            <li class="txt-center header-menu__item " id="alerta2">
              <img
                class="icon-md icon-dark"
                src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/shopping-cart.svg"
                alt="cart"
              />
            </li>
          </a>
              <a href="">
            <li class="txt-center header-menu__item" id="alertacorazon">
              <img
                class="icon-md icon-dark"
                src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/heart.svg"
                alt="heart"
              />
            </li>
          </a>

        

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

      <div class="modal__container" id="login-container">
        <section class="modal mdl__icons mdl-primary" id="login-el">
          <header class="modal__title">
            <h1 class="h-5">Login</h1>
            <button class="button btn-action btn-plain-icon modal__title--close" id="login-close-btn">
              <img
                  class="icon-light icon-lg button__icon"
                  src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/close.svg"
                  alt="close">
            </button>
          </header>
          <main class="modal__body">
            <div class="input input__icons input__premium">
              <div class="input__email">
                <form method="post">
                <input class="input__field--text email" type="text" placeholder="Escribe tu email" name="email" required>
                <label class="input__label">Email</label> 
              </div>
            
              <div class="input__password">
                <input class="input__field--text password" type="password" placeholder="Escribe tu contraseña" name="psw" required>
                <label class="input__label">Contraseña</label>
              </div>
            </div>
            <div class="remember-me__container">
              <div class="checkbox">
                <label class="radio__label" for="unchecked-box">
                  <input class="input__field--checkbox" id="unchecked-box" name="unchecked" type="checkbox">
                  Recuerdame!   
                </label>
              </div>
              <a href="#" class="cp">Forget Password?</a>
            </div>
          </main>
          <footer class="modal__footer">
            <button class="button btn-solid-primary modal__footer--btn" name="login" type="submit">Iniciar Sesión</button>
            </form>
          </footer>
        </section>
      </div>

      <div class="modal__container" id="signup-container">
        <section class="modal mdl__icons mdl-primary" id="signup-el">
          <header class="modal__title">
            <h1 class="h-5">Registrate</h1>
            <button class="button btn-action btn-plain-icon modal__title--close" id="signup-close-btn">
              <img
                  class="icon-light icon-lg button__icon"
                  src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/close.svg"
                  alt="close">
            </button>
          </header>
         <main class="modal__body">
            <div class="input input__icons input__premium">
              <form method="post" action="registro.php">
              <div class="input__email">
                <input class="input__field--text email" type="text" placeholder="Escribe tu email" name="email" id="email">
                <label class="input__label">Email</label> 
              </div>

              <div class="input__username">
                <input class="input__field--text user" type="text" placeholder="Escribe tu nombre" name="nombre" id="nombre">
                <label class="input__label">Nombre</label>
              </div>

              <div class="input__password">
                <input class="input__field--text password" type="date" name="fecha" id="fecha">
                <label class="input__label">Fecha de nacimiento</label>
              </div>
            
              <div class="input__password">
                <input class="input__field--text password" type="password" placeholder="Escribe tu contraseña" name="psw" id="psw">
                <label class="input__label">Contraseña</label>
              </div>

              <div class="input__password">
                <input class="input__field--text password" type="password" placeholder="Escribe tu contraseña" id="confirmar">
                <label class="input__label">Confirma la contraseña</label>
              </div>

            </div>
          </main>
          <footer class="modal__footer">
            <button class="button btn-solid-primary modal__footer--btn" name="enviar" type="submit" id="enviar">Registrate</button></form>
          </footer>
        </section>
      </div>
    </header>


     <!-------------------------------------
                  BREADCRUMB 
    -------------------------------------->
    <nav class="breadcrumb wishlist-page__breadcrumb">
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
          <a class="breadcrumb__link" href="./conocenos.php">Conocenos</a>
        </li>
      </ul>
    </nav>

    <!-------------------------------------
                  MAIN 
    -------------------------------------->
    <main class="main">
  



         <!-------------------------------------
                  SINGLE PRODUCT
      -------------------------------------->
      <section class="single-product-wrapper">
        <div class="product-image-wrapper">
          <img src="./assets/promo4.png" class="product-image" alt="card-image"/>
        </div>
        <div class="product-details-wrapper">
          <div class="product-title">
            <h3 class="h-3">TúMovil</h3>
            <p class="bd-3">Empresa Mexicana</p>
          </div>
     <br>

          <div class="product-desc">
            Somos una pequeña empresa de venta de celulares donde lo unico que nos importa es que tengas el mejor servicio disponible de nuestras propias ventas!!!! uwu
          </div>

        </div>
      </section><br><br><br>



                  <!-------------------------------------
                  MAIN CAROUSEL 
      -------------------------------------->
      <figure class="main-carousel">
        <a href="./pages/products.php"><img
          class="main-carousel__image"
          src="./assets/promo3.png"
          alt="hero-image"
        /></a>
         <figcaption class="h-5 main-carousel__caption">
          Ofertas 💸
        </figcaption>
      </figure><br><br><br>
    
    </main>

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
        <article class="footer-center">
        </article>
        <article class="footer-right">
          <a  href="login_admin.php">Modo administrador 👑</a>
        </article>
      </section>
      <p class="bd-5 footer-copyright">
        Copyright &copy; 2022
        <a href="https://aula.utc.edu.mx/"> Equipo TúMovil </a>
        . All Rights Reserved
      </p>
    </footer>
  </body>
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
     $('#alertacorazon').click(function(){
          
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