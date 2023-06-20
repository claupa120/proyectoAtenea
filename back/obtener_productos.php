<?php
include '../db/conexion.php';

// Obtener el valor de orden seleccionado
$orden = $_POST['orden'];

// Consulta para obtener los artículos en oferta y ordenarlos según la opción seleccionada
$sql = "SELECT * FROM articulo WHERE oferta = 1";

if ($orden == 'nombre_asc') {
    $sql .= " ORDER BY nombre ASC";
} elseif ($orden == 'precio_asc') {
    $sql .= " ORDER BY precio_venta ASC";
} elseif ($orden == 'precio_desc') {
    $sql .= " ORDER BY precio_venta DESC";
}

// Ejecutar la consulta y obtener los resultados
$result = $conn->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    // Recorrer los resultados y mostrar los artículos
    while ($row = $result->fetch_assoc()) {
        $titulo = $row["nombre"];
        $imagen = $row["foto"];
        $precio = $row["precio_venta"];

        // Mostrar los datos del artículo en la tarjeta
        echo '<div class="card">';
        echo '<div class="card__img">';
        echo '<img src="../assets/' . $imagen . '" alt="" />';
        echo '</div>';
        echo '<div class="card__hover">';
        echo '<h3 class="card__title">' . $titulo . '</h3>';
        echo '<a href="https://wa.me/573197531345" class="card__link">solicitar información</a>';
        echo '<p class="card__paragraph">$ ' . $precio . '</p>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No se encontraron artículos en oferta.";
}

$result->free_result();
$conn->close();

?>
