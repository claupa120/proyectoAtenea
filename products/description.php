<?php include('../db/conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/description.css">
    <link rel="shortcut icon" href="./assets/pagina/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/cf9fd5b80a.js" crossorigin="anonymous"></script>
    <title>+ Que Mascotas</title>
</head>

<body>
    <header>
        <?php include '../src/header.php'; ?>
    </header>

    <main>
        <section class="description">
            <div class="navegacion">
                <h2><a href="cats.php">Gatos / </a><a href="description.php">Producto</a></h2>
            </div>
            <?php 
            if(isset($_GET['id'])){
                $idArticulo = $_GET['id'];
                $sql = "SELECT * FROM articulo WHERE idarticulo = $idArticulo";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $titulo = $row["nombre"];
                        $descripcion = $row["descripcion"];
                        $imagen = $row["foto"];
                        $precio = $row["precio_venta"];
                        $talla = $row["talla"];
                        $color = $row["color"];
                        echo '<div class="description__titulo">';
                        echo '<h1 class="description__ti">' . $titulo . '</h1>';
                        echo '</div>';
                        echo '<div class="container__description">';
                        echo '<div class="description__text">';
                        echo '<h1 class="description__title"> Descripcion </h1>';
                        echo '<p class="description__copy">' . $descripcion . '</p>';
                        echo '</div>';
                        echo '<div class="description__img">';
                        echo '<img src="../assets/' . $imagen . '" alt="" />';
                        echo '</div>';
                        echo '<div class="description__order">';
                        echo '<div class="order__price">';
                        echo '<h3 class="title__price">Precio</h3>';
                        echo '<p>$' . $precio . '</p>';
                        echo '</div>';
                        echo '<div class="description__size">';
                        echo '<h3 class="size__title"> Tamaño </h3>';
                        echo '<div class="container__size">';
                        echo '<button class="card__size"><span class="size">' . $talla . '</span></button>';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="order__color">';
                        echo '<h3 class="color__title"> Color </h3>';
                        echo '<div class="container__color">';
                        echo '<button class="card__color" style="background-color:' . $color . '"></button>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "No se encontró el artículo.";
                }
                $result->free_result();
            } else {
                echo "No se encontró el ID del artículo.";
            }
            $conn->close();
            ?>
             <a href="https://api.whatsapp.com/send?phone=1234567890" class="bnt__cta">Comprar ahora</a>
                </div>
                    
        </section>
    </main>

    <a href="https://api.whatsapp.com/send?phone=1234567890" class="btn-whatsapp">
            <img src="../assets/icon-whatsapp.svg" alt="Contactar por WhatsApp">
        </a>

    <footer>
        <?php include '../src/footer.php'; ?>
    </footer>
</body>

</html>
