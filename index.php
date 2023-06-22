<?php include './db/conexion.php';?>
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
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="shortcut icon" href="./assets/pagina/logo.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <script src="https://kit.fontawesome.com/cf9fd5b80a.js" crossorigin="anonymous"></script>
    <title>+ Que Mascotas</title>
</head>

<body>
    <header>
        <nav class="menu">
            <section class="menu__container">
                <img src="./assets/pagina/logo.png" alt="" class="header__img" />
                <div class="header__input__container">
                    <form method="GET" action="./back/buscar.php">
                        <div class="header__input ">
                            <input type="text" placeholder="QUE ESTAS BUSCANDO?" name="busqueda">
                            <button type="submit" value="Buscar"><i class="fa fa-search"></i></button>
                        </div>
                    </form>


                </div>

                <ul class="menu__links">
                    <li class="menu__item">
                        <a href="./products/products.php" class="product__link">

                            <h3 class="menu__link"> <i class="fa-sharp fa-solid fa-cart-shopping"> </i> Productos</h3>
                        </a>
                    </li>


                    <li class="menu__item  menu__item--show">
                        <a href="#" class="menu__link">Categorias <img src="./assets/arrow.svg" class="menu__arrow"></a>

                        <ul class="menu__nesting" >
                            <li class="menu__inside">
                                <a href="./category/toy.php" class="menu__link menu__link--inside">Juguetes</a>
                            </li>
                            <li class="menu__inside">
                                <a href="./category/toilet.php" class="menu__link menu__link--inside">Aseo y belleza</a>
                            </li>
                            <li class="menu__inside">
                                <a href="./category/fleas.php" class="menu__link menu__link--inside">Anti-pulgas</a>
                            </li>
                            <li class="menu__inside">
                                <a href="./category/feeder.php" class="menu__link menu__link--inside">Comederos</a>
                            </li>
                            <li class="menu__inside">
                                <a href="./category/accesories.php" class="menu__link menu__link--inside">Accesorios</a>
                            </li>
                            <li class="menu__inside">
                                <a href="./category/beds.php" class="menu__link menu__link--inside">Camas y
                                    cargadores</a>
                            </li>
                            <li class="menu__inside">
                                <a href="./category/snack.php" class="menu__link menu__link--inside">Snack y premios</a>
                            </li>
                            <li class="menu__inside">
                                <a href="./category/sand.php" class="menu__link menu__link--inside">Arenas y
                                    areneras</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu__item">
                        <a href="https://wa.me/573197531345" class="menu__link">Estamos en linea<i
                                class="fa-brands fa-whatsapp"></i></a>

                    </li>

                </ul>

                <div class="menu__hamburguer">
                    <img src="./assets/menu.svg" class="menu__img">
                </div>
            </section>


        </nav>
    </header>
    <main>
        <section class="home">
            <div class="container__home">
                <div class="home__img">
                    <a href="./products/offers.php"><img src="assets/pagina/olfateo.png" alt="" /></a>

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
            </section>
            <div class="main__titulo">
                <h1>
                    <span>O</span><span>F</span><span>E</span><span>R</span><span>T</span><span>A</span><span>S</span>
                </h1>
            </div>
        </section>
        <section class="products">
    <div class="container__product">
        <?php
        // Consulta para obtener los artículos en oferta
        $sql = "SELECT * FROM articulo WHERE oferta = 1 LIMIT 3";
        $result = $conn->query($sql);

        // Verificar si hay resultados
        if ($result->num_rows > 0) {
            // Recorrer los resultados y mostrar los artículos
            while ($row = $result->fetch_assoc()) {
                $idArticulo = $row["idarticulo"];
                $titulo = $row["nombre"];
                $imagen = $row["foto"];
                $precio = $row["precio_venta"];
                echo '<div class="card">';
                echo '<div class="card__img">';
                echo '<a href="./products/description.php?id=' . $idArticulo . '">';
                echo '<img src="./assets/' . $imagen . '" alt="" />';
                echo '</a>';
                echo '</div>';
                echo '<div class="card__hover">';
                echo '<h3 class="card__title">' . $titulo . '</h3>';
                echo '<a href="https://wa.me/573197531345" class="card__link">solicitar información</a>';
                echo '<p class="card__paragraph">$ ' . $precio . '</p>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "No se encontraron artículos en oferta.";
        }

        $result->free_result();
        $conn->close();
        ?>
    </div>
</section>


         </main>

    <a href="https://wa.me/573197531345" class="btn-whatsapp">
        <img src="./assets/icon-whatsapp.svg" alt="Contactar por WhatsApp">
    </a>


 
    <footer>
        <?php include './src/footer.php'; ?>
    </footer>
    <script src="./js/app.js"></script>
    
</body>

</html>