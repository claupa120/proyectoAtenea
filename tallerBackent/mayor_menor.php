<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mayor_menor.css">
    <!-- cnd bootstrap-bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Mayor o menor de edad</title>
</head>

<body>
<a href="index.html#section-respuestas">   
        <img class="home" src="img/hogar.png" alt="">
    </a>
    <div class="main__frame__cal">
        <form action="" method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1">Edad:</label>
                <input type="number" name="edad" class="form-control" id="exampleFormControlInput1"
                    placeholder="Digite la edad">
            </div>
            <button type="submit" name="verificar" class="btn btn-info">Operar</button>
        </form>
        <?php

        $edad = 0;

        if (isset($_POST['verificar'])) {
            $edad = $_POST['edad'];
          if($edad >=18){
            echo "<h1>Es mayor de edad</h1>";
          }  
         else  if($edad < 18 && $edad >=0){
            echo "<h1>Es menor de edad</h1>";
          } 
       
        else{
            echo "<h1>Digita la edad</h1>";
          }
          
        }
        ?>
    </div>
</body>

</html>