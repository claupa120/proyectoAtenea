<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="shortcut icon" href="../assets/pagina/logo.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <script src="https://kit.fontawesome.com/cf9fd5b80a.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="menu">
            <section class="menu__container">
                <img src="../assets/pagina/logo.png" alt="" class="header__img" />
              
                <div class="header__input__container">
                    <form action="#">
                        <div class="header__input ">
                            <input type="text" placeholder="Buscar..." name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>


                <ul class="menu__links">
                    <li class="menu__item">
                        <a href="../index.php" class="product__link">
                            <h3 class="menu__link"> <i class="fa-solid fa-house"> </i> Inicio</h3>
                        </a>
                    </li>


                    <li class="menu__item  menu__item--show">
                        <a href="#" class="menu__link">Categorias <img src="../assets/arrow.svg"
                                class="menu__arrow"></a>

                        <ul class="menu__nesting">
                            <li class="menu__inside">
                                <a href="../category/toy.php" class="menu__link menu__link--inside">Juguetes</a>
                            </li>
                            <li class="menu__inside">
                                <a href="../category/toilet.php" class="menu__link menu__link--inside">Aseo y
                                    belleza</a>
                            </li>
                            <li class="menu__inside">
                                <a href="../category/fleas.php" class="menu__link menu__link--inside">Anti-pulgas</a>
                            </li>
                            <li class="menu__inside">
                                <a href="../category/feeder.php" class="menu__link menu__link--inside">Comederos</a>
                            </li>
                            <li class="menu__inside">
                                <a href="../category/accesories.php"
                                    class="menu__link menu__link--inside">Accesorios</a>
                            </li>
                            <li class="menu__inside">
                                <a href="../category/beds.php" class="menu__link menu__link--inside">Camas y
                                    cargadores</a>
                            </li>
                            <li class="menu__inside">
                                <a href="../category/snack.php" class="menu__link menu__link--inside">Snack y
                                    premios</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu__item">
                        <a href="https://wa.me/573197531345" class="menu__link">Estamos en linea<i class="fa-brands fa-whatsapp"></i></a>

                    </li>

                </ul>

                <div class="menu__hamburguer">
                    <img src="../assets/menu.svg" class="menu__img">
                </div>
            </section>


        </nav>
    </header>
    <script src="../js/app.js"></script>
</body>

</html>