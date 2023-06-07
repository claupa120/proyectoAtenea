<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/galery.css" />
    <link rel="shortcut icon" href="../assets/pagina/logo.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <script src="https://kit.fontawesome.com/cf9fd5b80a.js" crossorigin="anonymous"></script>

    <title>Galeria</title>
</head>

<body>
    <header>
        <?php include '../src/header.php'; ?>
    </header>
    <main>
        <section class="home">
            <div class="container__galery">

                <div class="titulo__galery">
                    <h1>Romeo</h1>
                </div>
                <div class="galery">
                    <div class="parrafo__galery">
                        <p>Romeo es un gatico, recogido de la calle siendo aun bebe, enfermo, solito y desamparado. El
                            ha llegado a alegrar nuestras vidas, es un nene caprichoso, amoroso.
                            Nos encanta su compañía.</p>
                    </div>
                    <div class="img__galery">
                        <img src="../assets/gato/Romeo.jpeg" alt="">
                    </div>
                </div>


            </div>
        </section>
        <a href="https://wa.me/573197531345" class="btn-whatsapp">
            <img src="../assets/icon-whatsapp.svg" alt="Contactar por WhatsApp">
        </a>
    </main>
    <footer>

        <?php include '../src/footer.php'; ?>

    </footer>
</body>