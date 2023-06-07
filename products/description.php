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
        <?php include '../src/header.php'; ?>
    </header>

    <body>
    <main>
        <section class="description">
            <div class="navegacion">
                <h2><a href="cats.php">Gatos / </a><a href="description.php">Producto</a></h2>
            </div>
            <div class="container__description">

                <div class="description__text">
                    <h1 class="description__title">descripcion</h1>
                    <p class="description__copy">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ultricies
                        leo eget metus ultricies, ut lacinia lectus congue. Fusce varius massa vel eleifend interdum. In hac
                        habitasse platea dictumst. Curabitur finibus tortor a urna maximus dictum. Proin lobortis augue vitae
                        libero tincidunt, ut efficitur est gravida. Maecenas tristique turpis at tortor commodo, vitae
                        lacinia sapien varius. Donec sollicitudin erat vitae ante aliquam dictum. Sed euismod nunc eu nunc
                        dignissim iaculis. Maecenas consectetur orci mauris, vitae lacinia arcu blandit sit amet. Cras sed
                        sagittis metus, id convallis leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                        posuere cubilia curae; Donec varius tellus sit amet aliquam dignissim. Morbi venenatis velit ut
                        mauris vulputate bibendum. Etiam mollis sem vel sagittis efficitur. Etiam sit amet semper erat.</p>
                </div>

                <div class="description__img">
                    <img src=".././assets/gato/anti-pulgasGato.jpg" alt="Producto">
                </div>

                <div class="description__order">
                    <div class="order__price">
                        <h3 class="title__price">Precio</h3>
                        <p>$99.99</p>
                    </div>

                    <div class="description__size">
                        <h3 class="size__title">Tamaño</h3>
                        <div class="container__size">
                            <button class="card__size"><span class="size">S</span></button>
                            <button class="card__size"><span class="size">M</span></button>
                            <button class="card__size"><span class="size">L</span></button>
                        </div>
                    </div>

                    <div class="order__color">
                        <h3 class="color__title">Color</h3>
                        <div class="contianer__color">
                            <button class="buttom bnt__c1"></button>
                            <button class="buttom bnt__c2"></button>
                            <button class="buttom bnt__c3"></button>
                        </div>
                    </div>

                    <a href="https://api.whatsapp.com/send?phone=1234567890" class="bnt__cta">Comprar ahora</a>
                </div>

            </div>
        </section>
    </main>

    <a href="https://wa.me/573197531345" class="btn-whatsapp">
            <img src="../assets/icon-whatsapp.svg" alt="Contactar por WhatsApp">
        </a>


    <footer>
        <?php include '../src/footer.php'; ?>

    </footer>
</body>

</html>