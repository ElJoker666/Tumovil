<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wishlist / VISKart</title>

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
    <link rel="icon" type="image/x-icon" href="../assets/logo.svg" />
  </head>
  <body class="wishlist-page">
    <!-------------------------------------
                  NAVBAR 
    -------------------------------------->
    <header class="header">
      <div class="header__item header-logo">
        <img class="logo" src="../assets/logo.svg" alt="logo" />
        <a href="../index.php" class="h-4 brandname">
          <span class="primary-font">VIS</span>KART
        </a>
      </div>
      <div class="header__item header-button__wrapper">
        <a class="button btn-solid-primary" href="../pages/products.php">
          Featured
        </a>
        <a class="button btn-plain btn-primary" href="../pages/products.php">
          Top
        </a>
      </div>
      <div class="header__item header-item__search">
        <div class="input input__icons">
          <input
            class="input__field--text search"
            type="text"
            placeholder="Search..."
          />
        </div>
      </div>
      <div class="header__item header-menu__wrapper">
        <ul class="header-menu__list">
          <a href="../pages/cart.php">
            <li class="txt-center header-menu__item">
              <img
                class="icon-md icon-dark"
                src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/shopping-cart.svg"
                alt="cart"
              />
            </li>
          </a>
          <a href="../pages/wishlist.php">
            <li class="txt-center header-menu__item">
              <img
                class="icon-md icon-dark"
                src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/heart.svg"
                alt="heart"
              />
            </li>
          </a>
          <a href="#">
            <li class="txt-center header-menu__item">
              <img
                class="icon-md icon-dark"
                src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/bell.svg"
                alt="notification"
              />
            </li>
          </a>

          <a href="#">
            <li class="txt-center header-menu__item">
              <img
                class="icon-md icon-dark"
                src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/cog.svg"
                alt="settings"
              />
            </li>
          </a>

          <button class="header-menu__item btn-login" id="login-btn">
            <img
              class="icon-md icon-dark"
              src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/user.svg"
              alt="login"
            />
          </button>

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
    <nav class="breadcrumb wishlist-page__breadcrumb">
      <ul class="breadcrumb__list">
        <li class="breadcrumb__item">
          <a class="breadcrumb__link" href="../index.php">Home</a>
        </li>
        <li class="breadcrumb__item">
          <img
            class="icon-md icon-grey breadcrumb-icon"
            src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/angle-up.svg"
            alt="arrow"
          />
        </li>
        <li class="breadcrumb__item active">
          <a class="breadcrumb__link" href="./wishlist.php">Wishlist</a>
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
        <h5 class="h-5">My Wishlist</h5>
      </div>
      <div class="wishlist">
        <section class="wishlist-items card-small">
          <article class="card card__ecommerce">
            <div class="card__body">
              <div class="card__badge">
                <img class="badge__icon icon-danger" src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/bookmark.svg" alt="bookmark-icon"/>
                <span class="card__discount">40% OFF</span>
              </div>
              <img src="../assets/cricket07.png" class="card__img" alt="card-image"/>
              <div class="card__title">
                <h1 class="h-5">Cricket 2007</h1>
                <p class="caption">EA Sports</p>
              </div>
              <div class="card__content">
                <p class="bd-5 card__price">$<strike>99.99</strike> <span class="card__content--newprice">59.99</span> /-</p>
              </div>
            </div>
            <div class="card__footer">
              <div class="card__footer--left">
                <a class="card__button" href="#"><button class="button btn-solid-primary buy-button">Buy - $49.99</button></a>
                <a class="card__button" href="#"><button class="button btn-solid-danger remove-btn">Remove from Wishlist</button></a>
              </div>
              <div class="card__footer--right">
                <a><img class="icon-md icon-danger" src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/heart.svg" alt="heart-icon"/></a>
                <a><img class="icon-md icon-success" src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/share.svg" alt="share-icon"/></a>
                <a><img class="icon-md icon-primary" src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/menu.svg" alt="menu-icon"/></a>
              </div>
            </div>
          </article>

          <article class="card card__ecommerce">
            <div class="card__body">
              <div class="card__badge">
                <img class="badge__icon icon-danger" src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/bookmark.svg" alt="bookmark-icon"/>
                <span class="card__discount">20% OFF</span>
              </div>
              <img src="../assets/crazytaxi.png" class="card__img" alt="card-image"/>
              <div class="card__title">
                <h1 class="h-5">Crazy Taxi</h1>
                <p class="caption">Dreamcast Games</p>
              </div>
              <div class="card__content">
                <p class="bd-5 card__price">$<strike>39.99</strike> <span class="card__content--newprice">31.99</span> /-</p>
              </div>
            </div>
            <div class="card__footer">
              <div class="card__footer--left">
                <a class="card__button" href="#"><button class="button btn-solid-primary buy-button">Buy - $49.99</button></a>
                <a class="card__button" href="#"><button class="button btn-solid-danger remove-btn">Remove from Wishlist</button></a>
              </div>
              <div class="card__footer--right">
                <a><img class="icon-md icon-danger" src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/heart.svg" alt="heart-icon"/></a>
                <a><img class="icon-md icon-success" src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/share.svg" alt="share-icon"/></a>
                <a><img class="icon-md icon-primary" src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/menu.svg" alt="menu-icon"/></a>
              </div>
            </div>
          </article>
  
          <article class="card card__ecommerce">
            <div class="card__body">
              <div class="card__badge">
                <img class="badge__icon icon-danger" src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/bookmark.svg" alt="bookmark-icon"/>
                <span class="card__discount">50% OFF</span>
              </div>
              <img src="../assets/nfsmw.webp" class="card__img" alt="card-image"/>
              <div class="card__title">
                <h1 class="h-5">NFS Most Wanted</h1>
                <p class="caption">EA Games</p>
              </div>
              <div class="card__content">
                <p class="bd-5 card__price">$<strike>99.99</strike> <span class="card__content--newprice">49.99</span> /-</p>
              </div>
            </div>
            <div class="card__footer">
              <div class="card__footer--left">
                <a class="card__button" href="#"><button class="button btn-solid-primary buy-button">Buy - $49.99</button></a>
                <a class="card__button" href="#"><button class="button btn-solid-danger remove-btn">Remove from Wishlist</button></a>
              </div>
              <div class="card__footer--right">
                <a><img class="icon-md icon-danger" src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/heart.svg" alt="heart-icon"/></a>
                <a><img class="icon-md icon-success" src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/share.svg" alt="share-icon"/></a>
                <a><img class="icon-md icon-primary" src="https://raw.githubusercontent.com/VishalPatil18/VISPA-UI/main/assets/menu.svg" alt="menu-icon"/></a>
              </div>
            </div>
          </article>
        </section>
      </div>
    </main>

    <!-------------------------------------
                  FOOTER 
    -------------------------------------->
    <footer class="footer">
      <section class="txt-center footer-content">
        <article class="footer-left">
          <a href="https://github.com/VishalPatil18/VISKart" class="h-5">
            Contribute to VISKart
          </a>
          <p class="bd-5">
            We are an Open Source Project. Join us to create this beautiful E-Commerce Platform and serve the community of Gamers.
          </p>
          <div class="footer-left__sociallinks">
            <a
              href="https://twitter.com/VishalPatil1810"
              class="button btn-socialmedia btn-solid-primary"
            >
              <img
                class="icon-light icon-md button__icon"
                src="https://vispaui-postdev-deploy.netlify.app/assets/twitter.svg"
                alt="twitter"
              />
            </a>

            <a
              href="https://www.linkedin.com/in/vishalrameshpatil"
              class="button btn-socialmedia btn-solid-secondary"
            >
              <img
                class="icon-light icon-md button__icon"
                src="https://vispaui-postdev-deploy.netlify.app/assets/linkedin.svg"
                alt="linkedin"
              />
            </a>

            <a
              href="https://www.instagram.com/_vishal_._lahsiv_/"
              class="button btn-socialmedia btn-solid-danger"
            >
              <img
                class="icon-light icon-md button__icon"
                src="https://vispaui-postdev-deploy.netlify.app/assets/instagram.svg"
                alt="instagram"
              />
            </a>

            <a
              href="https://medium.com/@vishalpatil18"
              class="button btn-socialmedia btn-solid-dark"
              style="background-color: black"
            >
              <img
                class="icon-light icon-md button__icon"
                src="https://vispaui-postdev-deploy.netlify.app/assets/medium.svg"
                alt="medium"
              />
            </a>
          </div>
        </article>
        <article class="footer-center">
          <a href="../index.php">Home</a>
          <a href="./products.php">Products</a>
          <a href="#">Featured</a>
          <a href="#">Top</a>
        </article>
        <article class="footer-right">
          <a href="./cart.php">My Cart</a>
          <a href="./wishlist.php">Wishlist</a>
          <a href="#">About</a>
          <a href="#">Settings</a>
        </article>
      </section>
      <p class="bd-5 footer-copyright">
        Copyright &copy; 2022
        <a href="https://github.com/VishalPatil18"> Vishal Patil </a>
        . All Rights Reserved
      </p>
    </footer>
  </body>
  <!-- SCRIPT FILES -->
  <script src="../scripts/script.js" defer></script>
</html>
