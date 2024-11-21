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

include "./styles/header.php";

echo "<title>Titulacion por combate</title>";

//Query.
$consulta_sql="SELECT * FROM inscritos";

//Mandar Query por la conexion y almacenamiento del resultado.
$resultado = $conexion->query($consulta_sql);

//Impresión de la tabla (Se omiten algunos datos por privacidad).
$count = mysqli_num_rows($resultado); 
echo "<div class='center'>
        <div class='container'>";
echo "<br><br>
        <table border='2'>
        <tr>
            <th>No Cuenta Institucional</th>
            <th>Usuario</th>
            <th>Carrera</th>
            <th>Residencia</th>
            <th>Email</th>
        </tr>";

//Impresión de los datos almacenados en la BD.
if ( $count>0 ){
    //Impresión de los datos almacenados en la BD.
    while( $row = mysqli_fetch_assoc($resultado)  )
    {
     
        echo "<tr>";
        echo"<td>". $row['nocuenta'] ."</td>";
        echo"<td>". $row['nombre'] ."</td>";
        echo"<td>". $row['carrera'] ."</td>";
        echo"<td>". $row['residencia'] ."</td>";
        echo"<td>". $row['email'] ."</td>";
        echo "</tr>";
     
    }
echo "</table>";
echo "      </div>
        ";
}

//Si no hay registros símplemente se imprime el aviso correspondiente.
else
{
?>
    <h1 style='color:red' >No hay registros actualmente.</h1>
<?php 
}
?>
    <br><br>
    <button onclick="location.href='./Principal.php'">Volver</button>
    <br><br>
<div>

<?php
    include "./styles/footer.php";
?>