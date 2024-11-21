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
  <title>Titulacion por combate</title>
</head>

<body>
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <header>
            <h3 class="center">Registro de usuario</h3>
        </header>
        <div>
            <!-- Formulario de registro -->
            <form action="./envRegis.php" method="post">
                <hr>
                <div>
                    <label for="nocuenta">Número de cuenta:</label>
                    <input type="text" name="nocuenta" required maxlength="100" placeholder="Ingresa tu número de cuenta">
                    <br><br>
                    
                    <label for="nombre">Ingresa nombre usuario:</label>
                    <input type="text" name="nombre" required maxlength="100" placeholder="Ingresa tu nombre">
                    <br><br>
                    
                    <label for="carrera">Carrera:</label>
                    <input type="text" name="carrera" required maxlength="100" placeholder="Ingresa tu carrera">
                    <br><br>
                    
                    <label for="direccion">Lugar de residencia:</label>
                    <input type="text" name="residencia" required maxlength="100" placeholder="Ingresa tu dirección particular">
                    <br><br>
                    
                    <label for="email">Correo:</label>
                    <input type="text" name="email" required maxlength="100" placeholder="Ingresa tu correo">
                    <br><br>
                    
                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" required maxlength="8" placeholder="Ingresa tu contraseña">
                    <br><br>
                </div>

                <div class='center'>
                <button type="submit" name="submit">Enviar registro</button>
                </div>
            </form>
        </div>
        <br><br>

        <div class='center'>
            <button onclick="location.href='./Principal.php'">Regresar</button>
            <br><br><br><br>
        </div>

    </div>
</div>


<?php
    include "styles/footer.php";
?>

</body>
</html>