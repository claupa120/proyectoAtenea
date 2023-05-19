<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Esta pagina te vende productos para mascotas(gato y perro)" />
    <meta name="robots" content="index,follow" />
    <meta name="author" content="Claudia Paola Suarez" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./assets/pagina/logo.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <script src="https://kit.fontawesome.com/cf9fd5b80a.js" crossorigin="anonymous"></script>
    <title>+ Que Mascotas</title>
</head>

<body>
    <header>
    <div class="container__header">
        <img src="./assets/pagina/logo.png" alt="" class="header__img" />

        <div class="header__category">
            <nav class="nav">
                <ul class="nav__item">
                    <li>
                        <i class="fa-sharp fa-solid fa-bars"></i>
                        <a class="category__copy">categorias</a>
                        <ul class="subitem">
                            <li><a href="./category/toy.php">Juguetes</a></li>
                            <li><a href="./category/toilet.php">Aseo y belleza</a></li>
                            <li><a href="./category/fleas.php">Anti-pulgas</a></li>
                            <li><a href="./category/feeder.php">Comederos</a></li>
                            <li><a href="./category/accesories.php">Accesorios</a></li>
                            <li><a href="./category/beds.php">Camas y cargadores</a></li>
                            <li><a href="./category/snack.php">Snack y premios</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="header__input">
            <input type="text" name="" id="" placeholder="¿Que estas buscando?" />
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>

        <div class="header__product">
          <a href="./products/products.php" class="product__link">
            <i class="fa-sharp fa-solid fa-cart-shopping"></i>
            <h3 class="product__copy">productos</h3>
          </a>
        </div>

        <div class="header__service">
            <p class="service__copy">estamos en linea</p>
            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            <p class="service__paragraph">servicio al cliente</p>
        </div>
    </div>
    </header>
    <main>
    <section class="home">
        <div class="container__home">
          <div class="home__img">
            <a href="./products/offers.php"
              ><img src="assets/pagina/olfateo.png" alt=""
            /></a>
           
          </div>
          <div class="home__img">
            <img src="assets/gato/gatos.jpg" alt="" />
            <div class="home__hover">
              <p class="home__copy">Hecha un vistazo a nuestra galeria</p>
              <a href="./history/galery.php">aqui</a>
            </div>
          </div>

          <div class="home__img">
            <img src="assets/pagina/Comparte a tu gat@.png" alt="" />
            <div class="home__hover">
              <p class="home__copy"></p>
              <a href="./history/history.php">aqui</a>
            </div>
          </div>
        </div>

        <section class="animals">
          <div class="home__inside">
            <div class="inside__img">
              <a href="./products/cats.php">
                <img src="assets/gato/gato-princ.png" alt="" />
              </a>
            </div>
            <div class="inside__img">
              <a href="./products/dogs.php">
                <img src="assets/perro/perro-princ.png" alt="" />
              </a>
            </div>
          </div>
          <div class="main__titulo">
            <h1>
              <span>O</span><span>F</span><span>E</span><span>R</span
              ><span>T</span><span>A</span><span>S</span>
            </h1>
          </div>
        </section>
      </section>

        <section class="product">

            <div class="container__product">
                <div class="product__img">
                    <a href="./products/descriptionp.php"><img src="assets/perro/producto1.jpg" alt="" /></a>

                </div>

                <div class="product__img">
                    <a href="./products/descriptionp.php"><img src="assets/perro/producto2.jpg" alt="" /></a>

                </div>
                <div class="product__img">
                    <a href="./products/descriptionp.php"><img src="assets/perro/producto3.jpg" alt="" /></a>

                </div>
                <div class="product__img">
                    <a href="./products/descriptionp.php"><img src="assets/perro/producto4.jpg" alt="" /></a>

                </div>
            </div>
        </section>
        <a href="https://wa.me/573197531345" class="btn-whatsapp">
	<img src="./icon-whatsapp.svg" alt="Contactar por WhatsApp">
</a> 
    </main>

    <footer>

    <div class="container__footer">
        
        <div class="footer__services">
          <h1 class="services__title">Preguntas frecuentes</h1>
          <a href="#" class="services__link">
            <p class="services__paragraph">Como es el pago?</p>
          </a>

          <a href="#" class="services__link">
            <p class="services__paragraph">Condiciones de entrega</p>
          </a>

          <a href="#" class="services__link">
            <p class="services__paragraph">Pedido minimo</p>
          </a>

          <a href="#" class="services__link">
            <p class="services__paragraph">ubicacion</p>
          </a>
        </div>

        <div class="footer__description">
          <h1 class="description__title">+ Que Mascotas</h1>
          <p class="description__copy">
            Somos la opción perfecta para cuidar a tus mascotas. En nuestra tienda encontrarás productos de alta calidad, enfocados en el bienestar y la felicidad de tu mejor amigo peludo
          </p>
        </div>

        <!-- <figure class="footer__figure">
            <a href="https://wa.me/ + número prefijo país 573197531345"><img src="./assets/pagina/whatsApp.png" alt="" /></a>
        </figure> -->

        <div class="footer__text">
                     
          <div class="footer__img">
            <a href="#">
              <img src="./assets/pagina/facebook.ico" alt="">
            </a>

            <a href="#">
              <img src="./assets/pagina/Instagram.ico" alt="">
            </a>

            <a href="#">
              <img src="./assets/pagina/tiktok.png" alt="">
            </a>
          </div>

          <div class="text__copy">
            <p class="text__paragraph">
              todos los derechos reservados &copy; -2023
            </p>
       
     
    </div>

    </footer>
</body>

</html>