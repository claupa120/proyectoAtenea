<?php include '../db/conexion.php';?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/products.css">
    <link rel="shortcut icon" href="../assets/pagina/logo.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <script src="https://kit.fontawesome.com/cf9fd5b80a.js" crossorigin="anonymous"></script>
    <title>Aseo y belleza</title>
</head>

<body onload="ordenarArticulosToilet()">
    <header>
        <?php include '../src/header.php'; ?>
    </header>

    <main>
        <section class="products">
            <h1 class="products__title">Aseo y belleza</h1>
            <div class="products__select" onchange="ordenarArticulosToilet()">
                <select id="select">
                    <option value="nombre_asc">Ordenar por nombre (A-Z)</option>
                    <option value="precio_asc">Ordenar por precio (menor a mayor)</option>
                    <option value="precio_desc">Ordenar por precio (mayor a menor)</option>
                </select>

            </div>
            <div class="container__products">


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