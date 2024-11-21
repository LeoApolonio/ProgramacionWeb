

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

// Obtener los valores del formulario
$noCuenta = $_POST['no_cuenta'];
$password = $_POST['clave'];

// Consultar la base de datos para verificar que el no_cuenta y password coinciden
$consulta = "SELECT * FROM inscritos WHERE nocuenta = '$noCuenta' AND password = '$password'";
$resultado = mysqli_query($conexion, $consulta);

// Verificar si se encontró un registro que coincida con los valores ingresados
if (mysqli_num_rows($resultado) > 0) {
    // Si existe, proceder con la eliminación
    $consultaEliminar = "DELETE FROM inscritos WHERE nocuenta = '$noCuenta' AND password = '$password'";
    mysqli_query($conexion, $consultaEliminar);
    header("location: eliminarEx.php");
}
else
{
    header("location: eliminarInc.php");
}
?>
