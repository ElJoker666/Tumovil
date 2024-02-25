<?php 
require_once '../db_conexion.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Products / VISKart</title>

   <!-- VENDORS STYLESHEET -->
    <link
      rel="stylesheet"
      href="https://vispaui-postdev-deploy.netlify.app/css/main.css"
    />

    <!-- MAIN STYLESHEET -->
    <link rel="stylesheet" href="../css/main.css" />

    <link rel="stylesheet" href="../css/products.css" />

    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="../assets/logo.png" />

       <!-- script del sweetalert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </head>
  <body class="products-page">
   <!-------------------------------------
                  NAVBAR 
    -------------------------------------->
    <header class="header">
      <div class="header__item header-logo">
        <img class="logo" src="../assets/logo.png" alt="logo" />
        <a href="../misesion.php" class="h-4 brandname">
          <span class="primary-font">Tú</span>Movil
        </a>
      </div>
      <div class="header__item header-button__wrapper">

        <div class="header__item header-item__search">
        <a class="st-1 button btn-plain btn-primary" href="perfil.php"><?php echo $_SESSION['nombre']; ?></a>
      </div>
        
      </div>
      <div class="header__item header-item__search">
        <a class="st-1 button btn-plain btn-primary" href="productossesion.php">PRODUCTOS 🛒</a>
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
      
          <a href="cart.php">
            <li class="txt-center header-menu__item " id="alerta2">
  

              <img
                class="icon-md icon-dark"
                src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/shopping-cart.svg"
                alt="cart"
              />
                       
            </li>
          </a>

           <a href="pedidos.php">
            <li class="txt-center header-menu__item">
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

           <a href="cerrar_sesion.php"><button class="st-1 button button btn-plain-icon theme-switcher btn-danger">Cerrar Sesion
          </button></a>

        </ul>
      </div>


 <div class="modal__container" id="login-container">
        <section class="modal mdl__icons mdl-warning" id="login-el">
          <header class="modal__title">
            <h1 class="h-5">Editar Informacion</h1>
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
                <form method="post" action="login.php">
                <input class="input__field--text" type="text" placeholder="Escribe tu email" name="email" required>
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
            <button class="button btn-solid-warning modal__footer--btn" name="login">Iniciar Sesión</button>
            </form>
          </footer>
        </section>
      </div>

      <div class="modal__container" id="signup-container">
        <section class="modal mdl__icons mdl-warning" id="signup-el">
          <header class="modal__title">
            <h1 class="h-5">Editar perfil</h1>
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
            <button class="button btn-solid-warning modal__footer--btn" name="enviar" type="submit" id="enviar">Registrate</button></form>
          </footer>
        </section>
      </div>

         
    </header>

    <!-------------------------------------
                  BREADCRUMB 
    -------------------------------------->
    <nav class="breadcrumb">
      <ul class="breadcrumb__list">
        <li class="breadcrumb__item">
          <a class="breadcrumb__link" href="../misesion.php">Home</a>
        </li>
        <li class="breadcrumb__item">
          <img
            class="icon-md icon-grey breadcrumb-icon"
            src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/angle-up.svg"
            alt="arrow"
          />
        </li>
        <li class="breadcrumb__item active">
          <a class="breadcrumb__link" href="">Perfil</a>
        </li>
      </ul>
    </nav>

      <!-------------------------------------
                    MAIN 
      -------------------------------------->
      <main class="main">
   
    <center><div>
        <section class="modal mdl__icons mdl-success">
          <header class="modal__title">
            <h1 class="h-5">Perfil</h1>
          </header>
         <main class="modal__body">
            <div class="input input__icons input__premium">
              <div class="input__email">
                <input class="input__field--text email" type="text" value="<?php echo $_SESSION['email']; ?>" name="email" id="email" disabled>
                <label class="input__label">Email</label> 
              </div>

              <div class="input__username">
                <input class="input__field--text user" type="text" value="<?php echo $_SESSION['nombre']; ?>" name="nombre" id="nombre" disabled>
                <label class="input__label">Nombre</label>
              </div>

              <div class="input__password">
                <input class="input__field--text user" type="text" name="fecha" id="fecha" value="<?php echo $_SESSION['fecha']; ?>" disabled>
                <label class="input__label">Fecha de nacimiento</label>
              </div>
            
              <div class="input__password">
                <input class="input__field--text password" type="text" value="<?php echo $_SESSION['psw']; ?>" name="psw" id="psw" disabled>
                <label class="input__label">Contraseña</label>
              </div>
            </div>
          </main>
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
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/app.js"></script>