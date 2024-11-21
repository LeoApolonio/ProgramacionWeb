

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

$buscarusuario="SELECT * FROM  inscritos WHERE nombre ='$_POST[nombre]'";

$resultado = $conexion -> query($buscarusuario);
$count =mysqli_num_rows($resultado);
if($count==1)
{
    header("location: ./RegEx.php");
}else
{
    mysqli_query($conexion,"INSERT INTO inscritos(
        nocuenta,nombre,carrera,residencia,email,password)
        VALUES(
            '$_POST[nocuenta]',
            '$_POST[nombre]',
            '$_POST[carrera]',
            '$_POST[residencia]',
            '$_POST[email]',
            '$_POST[password]'
        )");
        header("location: ./RegVa.php");
}
?>