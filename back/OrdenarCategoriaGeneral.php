<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

include '../db/conexion.php';


$categoria = isset($_GET['categoria']) ? $_GET['categoria'] : null;
$opcionSeleccionada = isset($_GET['opcion']) ? $_GET['opcion'] : null;

$sqlCategoria = "";
$tableTitle = "";

switch ($categoria) {
    case 1:
        $sqlCategoria = "SELECT * FROM articulo WHERE idcategoria = 1";
        break;
    case 2:
        $sqlCategoria = "SELECT * FROM articulo WHERE idcategoria = 2";
        break;
     case 3:
        $sqlCategoria = "SELECT * FROM articulo WHERE idcategoria = 3";        
        break;
    case 4:
        $sqlCategoria = "SELECT * FROM articulo WHERE idcategoria = 4";      
        break;
    case 5:
        $sqlCategoria = "SELECT * FROM articulo WHERE idcategoria = 5";          
        break;
    case 6:
        $sqlCategoria = "SELECT * FROM articulo WHERE idcategoria = 6";          
        break;
    case 7:
        $sqlCategoria = "SELECT * FROM articulo WHERE idcategoria = 7";                 
        break;
    case 8:
        $sqlCategoria = "SELECT * FROM articulo WHERE idcategoria = 8";                        
        break;
                       
    
    default:
        // Categoría no válida, mostrar mensaje de error o realizar otra acción
        exit("Categoría no válida.");
}

if ($opcionSeleccionada == "nombre_asc") {
    $sqlCategoria .= " ORDER BY nombre ASC";
} elseif ($opcionSeleccionada == "precio_asc") {
    $sqlCategoria .= " ORDER BY precio_venta ASC";
} elseif ($opcionSeleccionada == "precio_desc") {
    $sqlCategoria .= " ORDER BY precio_venta DESC";
}

$resultCategoria = $conn->query($sqlCategoria);

if ($resultCategoria->num_rows > 0) {
       while ($row = $resultCategoria->fetch_assoc()) {
        $idArticulo = $row["idarticulo"];
        $titulo = $row["nombre"];
        $imagen = $row["foto"];
        $precio = $row["precio_venta"];

        echo '<div class="card">';
        echo '<div class="card__img">';
        echo '<a href="../products/description.php?id=' . $idArticulo . '">';
        echo '<img src="../assets/' . $imagen . '" alt="" />';
        echo '</a>';
        echo '</div>';       
        echo '<div class="card__hover">';
        echo '<h3 class="card__title">' . $titulo . '</h3>';
        echo '<a href="https://wa.me/573197531345" class="card__link">Solicitar información</a>';
        echo '<p class="card__paragraph">$' . $precio . '</p>';
        echo '</div>';
        echo '</div>';
    }
    $resultCategoria->free_result();
} else {
    echo "No se encontraron artículos.";
}
$conn->close();

?>