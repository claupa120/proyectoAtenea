<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/description.css">
    <link rel="shortcut icon" href="../assets/pagina/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/cf9fd5b80a.js" crossorigin="anonymous"></script>
    <title>+ Que Mascotas</title>
</head>

<body>
<header>
        <?php include '../header.php'; ?>
    </header>

    <main>
        <main>


            <section class="description">
                <div class="navegacion">
                    <h2><a href="cats.php">Gatos / </a><a
                            href="description.php">Producto</a></h2>
                </div>
                <div class="container__description">

                    <div class="description__text">
                        <h1 class="description__title">descripcion</h1>
                        <p class="description__copy">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Blanditiis,
                            soluta architecto consectetur quo deserunt dicta odio dolores commodi officiis doloremque
                            dignissimos nam cum voluptatem at vel eius, itaque maxime molestias? Expedita eum, modi
                            eaque
                            consectetur quibusdam ex, reprehenderit dolores vel odit molestias alias officia vero dolore
                            excepturi esse, maxime magnam possimus accusamus delectus quae sunt ducimus optio facilis.
                            Repellat recusandae in expedita, incidunt vero voluptatum aliquid repellendus optio odit
                            placeat.</p>
                    </div>

                    <div class="description__img">
                        <img src=".././assets/gato/productoGato1.jpg" alt="">
                    </div>

                    <div class="description__order">
                        <div class="order__price">
                            <h2 class="title__price">precio</h2>
                            <h3 class="price">$60.000</h3>
                        </div>

                        <div class="description__size">
                            <h2 class="size__title">talla</h2>
                            <div class="container__size">
                                <button class="card__size">
                                    <p class="size">s </p>
                                </button>
                                <button class="card__size">
                                    <p class="size">m</p>
                                </button>
                                <button class="card__size">
                                    <p class="size">l</p>
                                </button>
                            </div>

                        </div>

                        <div class="order__color">
                            <h3 class="color__title">color</h3>
                            <div class="contianer__color">
                                <button class="buttom bnt__c1"></button>
                                <button class="buttom bnt__c2"></button>
                                <button class="buttom bnt__c3"></button>
                            </div>
                        </div>
                        <a href="https://wa.me/ + número prefijo país 573197531345" class="bnt__cta"><i
                                class="fa-brands fa-whatsapp"></i> ordena ahora</a>
                    </div>
                </div>
            </section>
        </main>

        <footer>

<?php include '../footer.php'; ?>

</footer>
</body>

</html>