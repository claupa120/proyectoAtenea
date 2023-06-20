<?php include('../db/conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/offers.css">
    <link rel="shortcut icon" href="./assets/pagina/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/cf9fd5b80a.js" crossorigin="anonymous"></script>
    <title>+ Que Mascotas</title>
</head>

<body onload="ordenarArticulosOferta()">
    <header>
        <?php include '../src/header.php'; ?>
    </header>

    <main>
        <section class="products">
            <div class="barra">
                <h2>AQUI ENCUENTRAS LOS MEJORES PRODUCTOS CON PRECIOS INCREIBLES.</h2>

            </div>
            <div class="">
                <h2> <a href="../index.php" class="product__link">
                        <h3 class="menu__link"> <i class="fa-solid fa-house"> </i> Inicio</h3>
                    </a></h2>
            </div>
            <h1 class="products__title">Ofertazos</h1>
            <div class="products__select" onchange="ordenarArticulosOferta()">
                <select id="select">
                    <option value="nombre_asc">Ordenar por nombre (A-Z)</option>
                    <option value="precio_asc">Ordenar por precio (menor a mayor)</option>
                    <option value="precio_desc">Ordenar por precio (mayor a menor)</option>
                </select>

            </div>
            <div class="container__products">
     
            </div>
        </section>
    </main>

    <a href="https://api.whatsapp.com/send?phone=1234567890" class="btn-whatsapp">
        <img src="../assets/icon-whatsapp.svg" alt="Contactar por WhatsApp">
    </a>

    <footer>
        <?php include '../src/footer.php'; ?>
    </footer>
    <script src="../js/ordenar.js"></script> 
</body>

</html>