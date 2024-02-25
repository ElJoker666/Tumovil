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

    <link rel="stylesheet" href="../css/wishlist.css" />


    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="../assets/logo.png" />

       <!-- script del sweetalert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </head>
  <body class="wishlist-page">
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
          <a class="breadcrumb__link" href="">Pedidos</a>
        </li>
      </ul>
    </nav>

      <!-------------------------------------
                    MAIN 
      -------------------------------------->
      <main class="main">
   

  <!-------------------------------------
                  CART PRODUCTS 
      -------------------------------------->
      <div class="products__heading">
         <h5 class="h-5">Mis pedidos</h5>
        </div>


          
          <input
            class="input__field--text search"
            type="hidden"
            placeholder="Search..."
            id="caja_busqueda"
            name="search"
            value="<?php echo $_SESSION['nombre']; ?>"
          />
        </div>
     



        <div id="div-pedidos"> 

        </div>


     


      
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
<script src="bootstrap/js/app4.js"></script>