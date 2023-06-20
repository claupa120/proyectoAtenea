<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../css/products.css"> -->
</head>


<?php
include '../db/conexion.php';
$sql = "SELECT * FROM articulo";

 $sql = "SELECT * FROM articulo WHERE oferta=1";
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
?>