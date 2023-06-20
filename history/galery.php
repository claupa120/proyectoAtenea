<?php include '../db/conexion.php';?>
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
<?php
$sql = "SELECT * FROM historiasmascotas";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $titulo = $row["NombreMascota"];
        $historia = $row["Historia"];
        $imagen = $row["foto"];

        echo' <div class="titulo__galery"><h1>' .$titulo . '</h1>';
        echo'</div>';
        echo'<div class="galery">';
        echo'<div class="parrafo__galery">';
        echo '<p>'. $historia . '</p>';
        echo '</div>';
        echo '<div class="img__galery">';
        echo '<img src="../assets/historia/' . $imagen . '" alt="" />';
        echo '</div>';
        echo '</div>';  
    }      
} else {
    echo "No se encontraron artículos.";
}
$result->free_result();
$conn->close();
?>

           
        <a href="https://wa.me/573197531345" class="btn-whatsapp">
            <img src="../assets/icon-whatsapp.svg" alt="Contactar por WhatsApp">
        </a>
    </main>
    <footer>

        <?php include '../src/footer.php'; ?>

    </footer>
</body>