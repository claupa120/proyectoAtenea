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
    <title>Comederos</title>
</head>

<body>
    <header>
        <?php include '../src/header.php'; ?>
    </header>

    <main>
        <section class="products">
            <h1 class="products__title">Comederos</h1>
            <div class="products__select" onchange="ordenarArticulos()">
                <select id="select">
                    <option value="nombre_asc">Ordenar por nombre (A-Z)</option>
                    <option value="precio_asc">Ordenar por precio (menor a mayor)</option>
                    <option value="precio_desc">Ordenar por precio (mayor a menor)</option>
                </select>

            </div>
            <div class="container__products">
                <?php
                

// Consulta para obtener los artículos
$sql = "SELECT * FROM articulo WHERE idcategoria = 4 ";
// Ejecutar la consulta y obtener los resultados
$result = $conn->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    // Recorrer los resultados y mostrar los artículos
    while ($row = $result->fetch_assoc()) {
        $idArticulo = $row["idarticulo"];
        $titulo = $row["nombre"];
        $imagen = $row["foto"];
        $precio = $row["precio_venta"];

        // Mostrar los datos del artículo en la tarjeta
        echo '<div class="card">';
        echo '<div class="card__img">';
        echo '<a href=".././products/description.php?id=' . $idArticulo . '">';
        echo '<img src="../assets/' . $imagen . '" alt="" />';
        echo '</div>';
        echo '</a>';
         echo '<div class="card__hover">';
        echo '<h3 class="card__title">' . $titulo . '</h3>';
        echo '<a href="https://wa.me/573197531345" class="card__link">solicitar información</a>';
        echo '<p class="card__paragraph">$ ' . $precio . '</p>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No se encontraron artículos.";
}
$result->free_result();
$conn->close();
?>


        </section>
        <a href="https://wa.me/573197531345" class="btn-whatsapp">
            <img src="../assets/icon-whatsapp.svg" alt="Contactar por WhatsApp">
        </a>
    </main>

    <footer>

        <?php include '../src/footer.php'; ?>

    </footer>
   
</body>

</html>