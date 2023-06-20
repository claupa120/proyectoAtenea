<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/products.css">
</head>

<?php
include '../db/conexion.php';


$categoria = $_POST['categoria'];


$sqlCategoria = "SELECT * FROM categoria WHERE nombre = '$categoria'";

$resultCategoria = $conn->query($sqlCategoria);


if ($resultCategoria->num_rows > 0) {
 
    $rowCategoria = $resultCategoria->fetch_assoc();
    $idCategoria = $rowCategoria['idcategoria'];
} else {
    
    echo "No se encontró la categoría seleccionada.";
    exit();
}

// Preparar la consulta SQL para obtener los artículos de la categoría y tipo especificados

$sqlArticulos = "SELECT * FROM articulo WHERE idcategoria = '$idCategoria' AND tipo = 'Perro'";
// Ejecutar la consulta para obtener los artículos
$resultArticulos = $conn->query($sqlArticulos);

// Verificar si se obtuvieron resultados
if ($resultArticulos->num_rows > 0) {
    // Mostrar los artículos encontrados
   
        // Mostrar los artículos encontrados
while ($rowArticulo = $resultArticulos->fetch_assoc()) {
    $idArticulo = $rowArticulo["idarticulo"];
    $titulo = $rowArticulo["nombre"];
    $imagen = $rowArticulo["foto"];
    $precio = $rowArticulo["precio_venta"];
    echo '<div class="card">';
    echo '<div class="card__img">';
    echo '<a href="description.php?id=' . $idArticulo . '">';
    echo '<img src="../assets/' . $imagen . '" alt="" />';
    echo '</a>';
    echo '</div>';
    echo '<div class="card__hover">';
    echo '<h3 class="card__title">' . $titulo . '</h3>';
    echo '<a href="https://wa.me/573197531345" class="card__link">solicitar información</a>';
    echo '<p class="card__paragraph">$ ' . $precio . '</p>';
    echo '</div>';
    echo '</div>';
}
    

} else {
    // No se encontraron artículos en la categoría y tipo especificados
    echo "No se encontraron artículos.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
