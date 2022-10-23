<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>
<?php
/*
Descripción: componente los datos de formulario
autor- RUBI
fecha- 12/10/2022
*/
//obtiene nombre de formulario 
$name = $_GET["nombre"]; 
$edad = $_GET["edad"];
$numero = $_GET["numero"];


echo "Holaaa!! $name <br>" ;
echo "Tienes $edad años <br>"; 
echo "Tu número es $numero <br>";

?>
<a href="../html/greetingForm.html"><br>REGRESAR</a>
    <body background="https://i.pinimg.com/564x/4e/06/29/4e062975da6715a53d2131086c3ad976.jpg"
</body>
</html>
