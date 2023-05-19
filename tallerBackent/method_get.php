<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/method_get.css">
    <title>Datos personales</title>
</head>

<body>
<a href="index.html#section-respuestas">   
        <img class="home" src="img/hogar.png" alt="">
    </a>
    <div class="main__frame__cal">
        <form action="" method="GET">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nombre:</label>
                <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1"
                    placeholder="Digite su nombre">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Apellido:</label>
                <input type="text" name="apellido" class="form-control" id="exampleFormControlInput1"
                    placeholder="Digite su apellido">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Cedula:</label>
                <input type="number" name="cedula" class="form-control" id="exampleFormControlInput1"
                    placeholder="Digite su Cedula">
            </div>

            <button type="submit" name="enviar" class="btn btn-outline-info">Enviar</button>
        </form>

        <?php

    $edad = 0;
    
    if (isset($_GET['enviar'])) {
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $cedula = $_GET['cedula'];

      echo "Nombre: ".$nombre."<br/>";
      echo "Apellido : ".$apellido."<br/>";
      echo "Cedula: ".$cedula."<br/>";

    }

    ?>

    </div>
</body>

</html>