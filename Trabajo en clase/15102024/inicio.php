<?php
    include "conexion.php";
    $consulta_sql = "SELECT * FROM alumno";  
    $resultado = $conexion->query($consulta_sql);
    $count=mysqli_num_rows($resultado);
    
    echo "<table>";
        echo "<tr>";
            echo "<th>Nombre de usuario</th>";
            echo "<th>Carrera</th>";
            echo "<th>Numero de cuenta</th>";
            echo "<th>Direccion</th>";
            echo "<th>Telefono</th>";
            echo "<th>Email</th>";
            echo "<th>Contrasena</th>";
            echo "<th>Fecha de registro</th>";
            echo "<th>Permisos</th>";
        echo "</tr>";

        if($count>0)
        {
            while( $row=mysqli_fetch_assoc($resultado) )
            {
                echo "<tr>";
                    echo "<td>".$row['nombre_usuario']."</td>";
                    echo "<td>".$row['carrera']."</td>";
                    echo "<td>".$row['no_cuenta']."</td>";
                    echo "<td>".$row['direccion']."</td>";
                    echo "<td>".$row['telefono']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['pass']."</td>";
                    echo "<td>".$row['fecha_registro']."</td>";
                    echo "<td>".$row['permisos']."</td>";
                echo "</tr>";
            }
        }

    echo "</table>";
?>