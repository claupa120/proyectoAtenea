<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/calculadora.css">
    <!-- cnd bootstrap-bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Calculadora</title>
</head>

<body>
<a href="index.html#section-respuestas">   
        <img class="home" src="img/hogar.png" alt="">
    </a>
    <div class="main__frame__cal">
        <form action="" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Numero 1:</label>
                <input type="number" name="n1" class="form-control" id="exampleFormControlInput1"
                    placeholder="Digite numero 1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Numero 2:</label>
                <input type="number" name="n2" class="form-control" id="exampleFormControlInput1"
                    placeholder="Digite numero 2">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Seleccione la operacion a realizar</label>
                <select class="form-control" name="tipo" id="exampleFormControlSelect1">
                    <option value="1">Suma</option>
                    <option value="2">Resta</option>
                    <option value="3">Multiplicacion</option>
                    <option value="4">Division</option>
                </select>
            </div>
            <button type="submit" name="operar" class="btn btn-info">Operar</button>
        </form>
        <?php
        if (isset($_POST['operar'])) {
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $tipo = $_POST['tipo'];
            $result =0;
            switch ($tipo){
                case '1':
                    $result = $n1 + $n2;
                    break;
                case '2':
                    $result = $n1 - $n2;
                    break;
                case '3':
                    $result = $n1 * $n2;
                    break;
                case '4':
                    $result = $n1 / $n2;
                    break;
            }
            echo "<h1>".$result."</h1>";
            
        }
        ?>
    </div>
</body>

</html>