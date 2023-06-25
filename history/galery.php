<?php  include '../db/conexion.php';?>
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
        <?php  include '../src/header.php'; ?>
    </header>
         <div class="carousel-container">
        <button class="carousel-arrow prev">←</button>
        <div class="carousel">
          <?php
          $sql = "SELECT * FROM historiasmascotas";
          $result = $conn->query($sql);
          
          if ($result->num_rows > 0) {
            $stories = $result->fetch_all(MYSQLI_ASSOC);
          
            foreach ($stories as $story) {
              echo '<div class="carousel-item">';
              echo '<div class="card">';
              echo '<div class="card-body">';
              echo '<h1 class="card-title">' . $story['NombreMascota'] . '</h1>';
              echo '<p class="card-text">' . $story['Historia'] . '</p>';
              echo '<div class="card-img-top">';
              echo '<img src="../assets/historia/' . $story['foto'] . '" class="" alt="">';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
            }
          } else {
            echo "No se encontraron artículos.";
          }
          
          $result->free_result();
          $conn->close();
          ?>
        </div>
        <button class="carousel-arrow next">→</button>
      </div>


                <a href="https://wa.me/573197531345" class="btn-whatsapp">
                    <img src="../assets/icon-whatsapp.svg" alt="Contactar por WhatsApp">
                </a>
                <script src="../js/ordenar.js"></script> 
    <footer>
        <?php //include '../src/footer.php'; ?>
    </footer>
    
</body>
</html>