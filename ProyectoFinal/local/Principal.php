<?php
//Conexión a la BD.
require "./logica/conexion.php";
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
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Titulación por combate</title>
</head>
<body>

<div class="section no-pad-bot" id="index-banner-1">
    <div class="container">
        <br><br>
        <h2 class="center light-blue-text">
            <img src="styles/Media/person.png" alt="participante" style="width: 55px; height: 60px;">
        </h2>
        <div class="center">
            <p class="center">Consulta a los demás participantes de esta modalidad.</p>
            <button onclick="location.href='consultabd.php'" aria-label="Consultar participantes">Consultar participantes</button>
        </div>
        <br><br>
    </div>
</div>

<div class="section no-pad-bot" id="index-banner-2">
    <div class="container">
        <br><br>
        <h2 class="center light-blue-text">
            <img src="styles/Media/mas.png" alt="registro" style="width: 55px; height: 60px;">
        </h2>
        <div class="center">
            <p class="center">Agrega a un nuevo aspirante.</p>
            <button onclick="location.href='registro.php'" aria-label="Agregar registro">Agregar registro</button>
        </div>
        <br><br>
    </div>
</div>

<div class="section no-pad-bot" id="index-banner-3">
    <div class="container">
        <br><br>
        <h2 class="center light-blue-text">
            <img src="styles/Media/menos.png" alt="eliminar" style="width: 55px; height: 60px;">
        </h2>
        <div class="center">
            <p class="center">Elimina el registro de alguna persona.</p>
            <button onclick="location.href='eliminar.php'" aria-label="Eliminar registro">Eliminar registro</button>
        </div>
        <br><br>
    </div>
</div>

<div class="section no-pad-bot" id="index-banner-4">
    <div class="container">
        <br><br>
        <h2 class="center light-blue-text">
            <img src="styles/Media/logout.png" alt="salir" style="width: 55px; height: 60px;">
        </h2>
        <div class="center">
            <p class="center">Nos vemos luego.</p>
            <button onclick="location.href='./logica/salir.php'" aria-label="Cerrar sesión">Cerrar sesión</button>
        </div>
        <br><br><br><br>
    </div>
</div>

<?php
include "styles/footer.php";
?>

</body>
</html>
