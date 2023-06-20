<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "";
$password = "";
$dbname = "mas_quemascotas";

// Arreglo con los datos a insertar
$datos = array(
    array('1', 'COD001', 'Producto 1', '10.99', '0', '1', '100', 'Descripción del producto 1', 'S', 'M', 'imagen1.jpg'),
    array('2', 'COD002', 'Producto 2', '19.99', '0.5', '0', '50', 'Descripción del producto 2', 'L', 'Blanco', 'imagen2.jpg'),
    // Agregar más filas de datos aquí...
);

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Insertar los datos en la base de datos
foreach ($datos as $fila) {
    $idcategoria = $fila[0];
    $codigo = $fila[1];
    $nombre = $fila[2];
    $precio_venta = $fila[3];
    $descuento = $fila[4];
    $oferta = $fila[5];
    $stock = $fila[6];
    $descripcion = $fila[7];
    $talla = $fila[8];
    $color = $fila[9];
    $foto = $fila[10];

    $sql = "INSERT INTO articulo (idcategoria, codigo, nombre, precio_venta, descuento, oferta, stock, descripcion, talla, color, foto)
            VALUES ('$idcategoria', '$codigo', '$nombre', '$precio_venta', '$descuento', '$oferta', '$stock', '$descripcion', '$talla', '$color', '$foto')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro insertado correctamente<br>";
    } else {
        echo "Error al insertar registro: " . $conn->error . "<br>";
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
// <!-- <?php 
$sql = "SELECT * FROM articulo LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $titulo = $row["nombre"];
        $descripcion = $row["descripcion"];
        $imagen = $row["foto"];
        $precio = $row["precio_venta"];
        $talla = $row["talla"];
        $color = $row["color"];
        echo' <div class="description__text">';
        echo' <h1>' .$titulo . '</h1>';
        echo' <h2 class="description__title">descripcion </h2>';
        echo'<p> class="description__copy"' . $descripcion . '</p>';
        echo'/div>';
        echo'<div class="description__img">';
        echo '<img src="../assets/' . $imagen . '" alt="" />';
        echo '</div>';
        echo'<div class="description__order">';
        echo'<div class="order__price">';
        echo'<h3 class="title__price">Precio</h3>';
        echo'<p>$' . $precio .'</p>';
        echo'</div>';
        echo'<div class="description__size">';
        echo'<h3 class="size__title"> Tamaño </h3>';
        echo'<div class="container__size">';
        echo'<button class="card__size"><span class="size">' .$talla. '</span></button>';
        echo'</div>';
        echo'</div>';
        echo'<div class="order__color">';
        echo'<h3 class="color__title">Color</h3>';
        echo'<div class="contianer__color">';
        echo'<button class="buttom bnt__c1">' .$color .'</button>';
        echo'</div>';
        echo'</div>';
          
    }      
} else {
    echo "No se encontraron artículos.";
}
$result->free_result();
$conn->close();
?>  
 <div class="description__titulo">
                        <h1>titulo </h1>
                    </div>
  
  <!-- 
                