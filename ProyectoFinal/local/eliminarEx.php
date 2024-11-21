

<?php

include "./logica/conexion.php";
mysqli_set_charset($conexion,'utf8');
//Verificar si se inició sesión.
session_start();
$no_cuenta= $_SESSION['usermane'];
if(!isset($no_cuenta))
{
        header("location: ./index.php");
}else
{}

    include "styles/header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar usuario</title>
</head>

<body>

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h1 style="text-align: center;">Se ha eliminado al usuario.</h1>
        <form style="text-align: center;" method="POST" action="./eliUsu.php">
            <input type="text" name="no_cuenta" placeholder="Número de Cuenta" />
            <input type="password" name="clave" placeholder="Contraseña" />
            <br/>
            <br><br>
            <button type="submit">Eliminar usuario</button>
        </form>
        <div class='center'>
            <br><br>
            <button onclick="location.href='./Principal.php'">Regresar</button>
        </div>
        <br><br>
    </div>
</div>

<?php
    include "styles/footer.php";
?>

</body>
</html>