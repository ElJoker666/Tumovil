<?php 
require_once 'db_conexion.php';
session_start();
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
        <a href="misesion.php" class="h-4 brandname">
          <span class="primary-font">Tú</span>Movil
        </a>
      </div>
      <div class="header__item header-button__wrapper">

        <div class="header__item header-item__search">
        <a class="st-1 button btn-plain btn-primary" href="./pages/perfil.php"><?php echo $_SESSION['nombre']; ?></a>
      </div>
        
      </div>
      <div class="header__item header-item__search">
        <a class="st-1 button btn-plain btn-primary" href="./pages/productossesion.php">PRODUCTOS 🛒</a>
      </div>
      
      
      <div class="header__item header-menu__wrapper">
        <ul class="header-menu__list">

            <a href="./pages/perfil.php"><button class="header-menu__item btn-login" id="alerta1" type="submit">
            <img
              class="icon-md icon-dark"
              src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/user.svg"
              alt="login"
            />
          </button></a>
      <a href="./pages/cart.php">
            <li class="txt-center header-menu__item " id="alerta2">

              <img
                class="icon-md icon-dark"
                src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/shopping-cart.svg"
                alt="cart"
              />
                       
            </li>
          </a>


                 <a href="./pages/pedidos.php">
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
    </header>


     <!-------------------------------------
                  BREADCRUMB 
    -------------------------------------->
    <nav class="breadcrumb wishlist-page__breadcrumb">
      <ul class="breadcrumb__list">
        <li class="breadcrumb__item">
          <a class="breadcrumb__link" href="misesion.php">Home</a>
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
        <a href="./pages/productossesion.php"><img
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
             Somos una empresa pequeña, donde nuestro principal objetivos es que nos compres con las mejores ofertas del estado.
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
