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

<body onload="ordenarArticulosGato()">
    <header>
        <?php include '../src/header.php'; ?>
    </header>

    <main>
        <section class="products">
            <div class="barra">
                <h2>AQUI ENCUENTRAS LOS MEJORES PRODUCTOS PARA EL CUIDADO Y AMOR POR TU GATO.</h2>

            </div>
            <li class="navegacion">
                <a href="../index.php" class="product__link">
                    <h3 class="menu__link"> <i class="fa-solid fa-house"> </i> Inicio</h3>
                </a>
            </li>
           <section class="container__home" id="productos-container">
                <div class="home__img" onclick="obtenerProductos('Juguetes')">
                    <img src="../assets/gato/juegueteGato.png" alt="">
                    <div class="home__hover">
                        <h1 class="home__title">Juguetes</h1>
                    </div>
                </div>
                <div class="home__img" onclick="obtenerProductos('Aseo y belleza')">
                    <img class="categoria-img" src="../assets/gato/aseoGato.jpg" alt="">
                    <div class="home__hover">
                        <h1 class="home__title">aseo</h1>
                    </div>
                </div>
                <div class="home__img" onclick="obtenerProductos('Anti_pulgas')">
                    <img src="../assets/gato/anti-pulgasGato.jpg" alt="">
                    <div class="home__hover">
                        <h1 class="home__title">Anti-pulgas</h1>
                    </div>
                </div>
                <div class="home__img" onclick="obtenerProductos('Comederos')">
                    <img src="../assets/gato/comederoGato.jpg" alt="">
                    <div class="home__hover">
                        <h1 class="home__title">Comederos</h1>
                    </div>
                </div>
                <div class="home__img" onclick="obtenerProductos('Accesorios')">
                    <img src="../assets/gato/accesoriosGato.jpg" alt="">
                    <div class="home__hover">
                        <h1 class="home__title">Accesorios</h1>
                    </div>
                </div>
                <div class="home__img" onclick="obtenerProductos('Camas y cargadores')">
                    <img src="../assets/gato/CamaGato.jpg" alt="">
                    <div class="home__hover">
                        <h1 class="home__title">Camas</h1>
                    </div>
                </div>
                <div class="home__img" onclick="obtenerProductos('Snack y premios')">
                    <img src="../assets/gato/SnacksGato.jpg" alt="">
                    <div class="home__hover">
                        <h1 class="home__title">Snack</h1>
                    </div>
                </div>
                <div class="home__img" onclick="obtenerProductos('Arena')">
                    <img src="../assets/gato/arenaGato.jpeg" alt="">
                    <div class="home__hover">
                        <h1 class="home__title">Arena</h1>
                    </div>
                </div>
            </section>
            <div class="products__select" onchange="ordenarArticulosGato()">
                <select id="select">
                    <option value="nombre_asc">Ordenar por nombre (A-Z)</option>
                    <option value="precio_asc">Ordenar por precio (menor a mayor)</option>
                    <option value="precio_desc">Ordenar por precio (mayor a menor)</option>
                </select>
            </div>

            <div class="container__products" id="productosContainer">
             
            </div>
        </section>

        </section>
    </main>
    <a href="https://api.whatsapp.com/send?phone=1234567890" class="btn-whatsapp">
        <img src="../assets/icon-whatsapp.svg" alt="Contactar por WhatsApp">
    </a>
    <footer>
        <?php include '../src/footer.php'; ?>
    </footer>
</body>
<script src="../js/ordenar.js"></script> 
</html>