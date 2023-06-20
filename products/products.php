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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Productos</title>
</head>

<body onload="ordenarArticulos()">
    <header>
        <?php include '../src/header.php'; ?>
    </header>

    <main>
        <section class="products">
            <h1 class="products__title">productos</h1>
            <div class="products__select">
                <select id="select" onchange="ordenarArticulos()">
                    <option value="nombre_asc">Ordenar por nombre (A-Z)</option>
                    <option value="precio_asc">Ordenar por precio (menor a mayor)</option>
                    <option value="precio_desc">Ordenar por precio (mayor a menor)</option>
                </select>
            </div>
            <div class="container__products">
            <?php
include '../db/conexion.php';

$sql = "SELECT * FROM articulo";

if (isset($_GET['opcion'])) {
    $opcionSeleccionada = $_GET['opcion'];

    if ($opcionSeleccionada == "nombre_asc") {
        $sql .= " ORDER BY nombre ASC";
    } elseif ($opcionSeleccionada == "precio_asc") {
        $sql .= " ORDER BY precio_venta ASC";
    } elseif ($opcionSeleccionada == "precio_desc") {
        $sql .= " ORDER BY precio_venta DESC";
    }
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        //Código para mostrar los productos
        $idArticulo = $row["idarticulo"];
        $titulo = $row["nombre"];
        $imagen = $row["foto"];
        $precio = $row["precio_venta"];

       
        echo '<div class="card">';
        echo '<div class="card__img">';
        echo '<a href="./description.php?id=' . $idArticulo . '">';
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
?> <!-- Aquí se mostrarán los productos cargados por offers.php -->
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