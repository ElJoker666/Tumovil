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
    <link rel="stylesheet" href="https://vispaui-postdev-deploy.netlify.app/css/main.css"/>

    <!-- MAIN STYLESHEET -->
    <link rel="stylesheet" href="./css/main.css" />

    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="./assets/logo.png" />

   <!-- script del sweetalert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <?php include("alerta.php"); ?> 



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
                  MAIN 
    -------------------------------------->
    <main class="main">
      <!-------------------------------------
                  MAIN CAROUSEL 
      -------------------------------------->
      <figure class="main-carousel">
        <a href="conocenossesion.php"><img
          class="main-carousel__image"
          src="./assets/promo1.png"
          alt="hero-image"
        />
        <figcaption class="h-5 main-carousel__caption">
          Conócenos 🧐 
        </figcaption>
        </a>
      </figure>


       <!-------------------------------------
                  TOP PRODUCTS 
      -------------------------------------->
      <div class="products__heading">
        <h5 class="h-5">Top Marcas 🔥</h5>
        <a class="st-1 button btn-plain btn-primary" href="./pages/productossesion.php">Ver todos los productos</a>
      </div>
      <section class="top-products">
        <article class="top-item">
          <img
            class="top-item__image"
            src="./assets/apple.png"
            alt="fallguys"
          />
          <div class="top-item__disc">
            <p class="st-1">Apple</p>
            <p class="cp">Checa todos nuestros productos disponibles de la marca Apple</p>
          </div>
        </article>

        <article class="top-item">
          <img
            class="top-item__image"
            src="./assets/samsung.png"
            alt="minecraft"
          />
          <div class="top-item__disc">
            <p class="st-1">Samsung</p>
            <p class="cp">Checa todos nuestros productos disponibles de la marca Samsung</p>
          </div>
        </article>

        <article class="top-item">
          <img
            class="top-item__image"
            src="./assets/xiaomi.png"
            alt="dyinglight2"
          />
          <div class="top-item__disc">
            <p class="st-1">Xiaomi</p>
            <p class="cp">Checa todos nuestros productos disponibles de la marca Xiaomi</p>
          </div>
        </article>

        <article class="top-item">
          <img
            class="top-item__image"
            src="./assets/huawei.png"
            alt="fallguys"
          />
          <div class="top-item__disc">
            <p class="st-1">Huawei</p>
            <p class="cp">Checa todos nuestros productos disponibles de la marca Huawei</p>
          </div>

        </article>
      </section>

      
      
       <!-------------------------------------
                  MAIN PRODUCTS 
      -------------------------------------->
      <div class="products__heading">
        <h5 class="h-5">Destacado 👀</h5>
        <a class="st-1 button btn-plain btn-primary" href="./pages/productossesion.php">Ver todos los productos</a>
      </div>
      <section class="main-products">
        <article class="card card__ecommerce">
            <div class="card__body">
              <a href="./pages/productossesion.php">
              <div class="card__badge">
                <img class="badge__icon icon-danger" src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/bookmark.svg" alt="bookmark-icon"/>
                <span class="card__discount">10% OFF</span>
              </div>
              <img src="./assets/iphone14.png" class="card__img" alt="card-image"/>
              <div class="card__title">
                <h1 class="h-5">iPhone 14 Pro Max 256 GB Morado</h1>
                <p class="caption">Apple</p>
              </div>
              <div class="card__content">
                <p class="bd-5">$<strike>31,999</strike> <span class="card__content--newprice">29,999</span> /-</p>
              </div>
              </a>
            </div>
           
        </article>

        <article class="card card__ecommerce">
          <div class="card__body">
            <a href="./pages/productossesion.php">
            <div class="card__badge">
              <img class="badge__icon icon-danger" src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/bookmark.svg" alt="bookmark-icon"/>
              <span class="card__discount">10% OFF</span>
            </div>
            <img src="./assets/iphone14n.png" class="card__img" alt="card-image"/>
            <div class="card__title">
              <h1 class="h-5">iPhone 14 Pro 256 GB Negro</h1>
              <p class="caption">Apple</p>
            </div>
            <div class="card__content">
              <p class="bd-5">$<strike>28,999</strike> <span class="card__content--newprice">27,000</span> /-</p>
            </div>
            </a>
          </div>
        
        </article>

        <article class="card card__ecommerce">
          <div class="card__body">
            <a href="./pages/productossesion.php">
            <div class="card__badge">
              <img class="badge__icon icon-danger" src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/bookmark.svg" alt="bookmark-icon"/>
              <span class="card__discount">10% OFF</span>
            </div>
            <img src="./assets/iphone14p.png" class="card__img" alt="card-image"/>
            <div class="card__title">
              <h1 class="h-5">iPhone 14 Pro Max 256 GB Plata</h1>
              <p class="caption">Apple</p>
            </div>
            <div class="card__content">
              <p class="bd-5">$<strike>28,999</strike> <span class="card__content--newprice">27,000</span> /-</p>
            </div>
            </a>
          </div>
         
        </article>

        <article class="card card__ecommerce">
          <div class="card__body">
            <a href="./pages/productossesion.php">
            <div class="card__badge">
              <img class="badge__icon icon-danger" src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/bookmark.svg" alt="bookmark-icon"/>
              <span class="card__discount">10% OFF</span>
            </div>
            <img src="./assets/iphone14m.png" class="card__img" alt="card-image"/>
            <div class="card__title">
              <h1 class="h-5">iPhone 14 Plus 128 GB Medianoche</h1>
              <p class="caption">Apple</p>
            </div>
            <div class="card__content">
              <p class="bd-5">$<strike>20,999</strike> <span class="card__content--newprice">19,999</span> /-</p>
            </div>
            </a>
          </div>
          
        </article>

        <article class="card card__ecommerce">
          <div class="card__body">
            <a href="./pages/productossesion.php">
            <div class="card__badge">
              <img class="badge__icon icon-danger" src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/bookmark.svg" alt="bookmark-icon"/>
              <span class="card__discount">10% OFF</span>
            </div>
            <img src="./assets/samsung1rosa.png" class="card__img" alt="card-image"/>
            <div class="card__title">
              <h1 class="h-5">Samsung S22 Plus 256 GB Rosa</h1>
              <p class="caption">Samsung</p>
            </div>
            <div class="card__content">
              <p class="bd-5">$<strike>27,999</strike> <span class="card__content--newprice">26,999</span> /-</p>
            </div>
            </a>
          </div>
        
        </article>

        <article class="card card__ecommerce">
          <div class="card__body">
            <a href="./pages/productossesion.php">
            <div class="card__badge">
              <img class="badge__icon icon-danger" src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/bookmark.svg" alt="bookmark-icon"/>
              <span class="card__discount">10% OFF</span>
            </div>
            <img src="./assets/samsung1morado.png" class="card__img" alt="card-image"/>
            <div class="card__title">
              <h1 class="h-5">Samsung S22 Plus 256 GB Morado</h1>
              <p class="caption">Samsung</p>
            </div>
            <div class="card__content">
              <p class="bd-5">$<strike>27,999</strike> <span class="card__content--newprice">26,999</span> /-</p>
            </div>
            </a>
          </div>
         
        </article>
      </section><br><br><br>

            <!-------------------------------------
                  MAIN CAROUSEL 
      -------------------------------------->
      <figure class="main-carousel">
        <a href="./pages/productossesion.php"><img
          class="main-carousel__image"
          src="./assets/promo2.png"
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
            <a href="../index.php" class="h-4 brandname">
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


</body>
</html>