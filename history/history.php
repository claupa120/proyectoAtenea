<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/history.css" />
    <link rel="shortcut icon" href="../assets/pagina/logo.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <script src="https://kit.fontawesome.com/cf9fd5b80a.js" crossorigin="anonymous"></script>

    <title>Sube tu historia</title>
</head>

<body>
    <header>
        <?php include '../src/header.php'; ?>
    </header>
    <main>
        <section class="home">
            <div class="container__history">
                <div class="titulo__history">
                    <h1>Nuestra historia</h1>
                </div>
                <form class="formulario">
                    <div class="name__history">
                        <label for="nombre">Nombre: </label>
                        <input type="text" id="nombre" name="name" placeholder="Escribe el nombre de tu hijo peludo">
                    </div>
                    <div class="cuenta__history">
                        <label for="historia">Cuentanos tu historia:</label>
                        <textarea id="historia" name="historia"
                            placeholder="Escribe aquí... tus anécdotas, consejos y picardías de tu mascota"
                            maxlength="2000"></textarea>
                    </div>
                    <div class="foto__history">
                        <div class="foto__history__1">
                            <p>Visualización de la foto antes de cargarla</p>
                        </div>
                    </div>
                    <div class="subir__history">
                        <label for="imagen">sube una foto en formato jpg o png.</label>
                        <input type="file" id="imagen" name="imagen" placeholder="sube una foto en formato jpg o png.">
                    </div>
                    <div class="button">
                        <button>Enviar</button>
                    </div>

                    <div class="text__history">
                        <p>
                            *las historias seran revisadas antes de publicar, dejamos tus datos para comunicarnos
                        </p>
                    </div>
            </div>
            </form>
        </section>


        <a href="https://wa.me/57319753134 5" class="btn-whatsapp">
            <img src="../assets/icon-whatsapp.svg" alt="Contactar por WhatsApp">
        </a>
        </div>
    </main>
    <footer>

        <?php include '../src/footer.php'; ?>

    </footer>
</body>