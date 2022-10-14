<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabla</title>
    <link rel="stylesheet" href="../sty.css">
</head>
<body>
    <center>
    <body background="https://i.pinimg.com/564x/2d/0b/70/2d0b70f5ecb363d4e216fd766df8dfe0.jpg">
        <h1>Resultado de la Tabla</h1>
        <?php

        $tabla = $_GET["tabla"];

        echo "<h1>TABLA DE MULTIPLICAR DE $tabla </h1>";
        for ($i=1; $i <=10 ; $i++){
            echo "$i x $tabla = ", $i*$tabla, "<br>";
        }
        ?>

        
<a href="../TAB.HTML"><br>REGRESAR</a>
</body>
</html>