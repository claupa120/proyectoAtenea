<?php include '../db/conexion.php';?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cats.css">
    <link rel="shortcut icon" href="../assets/pagina/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/cf9fd5b80a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>+ Que Mascotas</title>
</head>

<body onload="ordenarArticulosPerro()">
    <header>
        <?php include '../src/header.php'; ?>
    </header>

    <main>
        <section class="products">
            <div class="barra">
                <h2>AQUI ENCUENTRAS LOS MEJORES PRODUCTOS PARA EL CUIDADO Y AMOR POR TU PERRO.</h2>

            </div>
            <div class="">
                <h2> <a href="../index.php" class="product__link">
                        <h3 class="menu__link"> <i class="fa-solid fa-house"> </i> Inicio</h3>
                    </a></h2>
            </div>

            <section class="container__home" id="productos-container">

                <div class="home__img" onclick="obtenerProductosPerro('Juguetes')">
                    <img src="../assets/perro/JuguetePerro.jpg" alt="">
                    <div class="home__hover">
                        <h1 class="home__title">Juguetes</h1>
                    </div>
                </div>
                <div class="home__img" onclick="obtenerProductosPerro('Aseo y belleza')">
                    <img class="categoria-img" src="../assets/perro/aseo.jpg" alt="">
                    <div class="home__hover">
                        <h1 class="home__title">aseo</h1>
                    </div>
                </div>
                <div class="home__img" onclick="obtenerProductosPerro('Anti_pulgas')">
                    <img src="../assets/perro/antipulgas.jpg" alt="">
                    <div class="home__hover">
                        <h1 class="home__title">Anti-pulgas</h1>
                    </div>
                </div>
                <div class="home__img" onclick="obtenerProductosPerro('Comederos')">
                    <img src="../assets/perro/comederoPerro.jpg" alt="">
                    <div class="home__hover">
                        <h1 class="home__title">Comederos</h1>
                    </div>
                </div>
                <div class="home__img" onclick="obtenerProductosPerro('Accesorios')">
                    <img src="../assets/perro/accesorio_perro.jpg" alt="">
                    <div class="home__hover">
                        <h1 class="home__title">Accesorios</h1>
                    </div>
                </div>
                <div class="home__img" onclick="obtenerProductosPerro('Camas y cargadores')">
                    <img src="../assets/perro/cama_carador_perro.png" alt="">
                    <div class="home__hover">
                        <h1 class="home__title">Camas</h1>
                    </div>
                </div>
                <div class="home__img" onclick="obtenerProductosPerro('Snack y premios')">
                    <img src="../assets/perro/snacks.jpg" alt="">
                    <div class="home__hover">
                        <h1 class="home__title">Snack</h1>
                    </div>
                </div>
                            </section>
            <div class="products__select" onchange="ordenarArticulosPerro()">
                <select id="select">
                    <option value="nombre_asc">Ordenar por nombre (A-Z)</option>
                    <option value="precio_asc">Ordenar por precio (menor a mayor)</option>
                    <option value="precio_desc">Ordenar por precio (mayor a menor)</option>
                </select>
            </div>

            <div class="container__products" id="productosContainer" >
   
            </div>
        </section>
        <a href="https://wa.me/573197531345" class="btn-whatsapp">
            <img src="../assets/icon-whatsapp.svg" alt="Contactar por WhatsApp">
        </a>
    </main>

    <footer>

        <?php include '../src/footer.php'; ?>

    </footer>
    <script src="../js/ordenar.js"></script> 
</body>

</html>