<?php
    include("Conexion_DB.php");

   
    $query="SELECT ID from tareas";
   

    $resultado = mysqli_query($conexion,$query);
    $total= $resultado->num_rows;

    $paginas=ceil($total/4);
    $sql = "SELECT `ID`, `DNI`, `Nombre y apellido`, `Fecha`, `archivo_binario`, `archivo_nombre`, `archivo_peso`, `archivo_tipo`, `archivo_link` FROM `tareas` LIMIT 0, 4 ";
    $resultado = mysqli_query($conexion,$sql);

   
        while($mostrar = mysqli_fetch_array($resultado)){?>

            <td style="border: 1px solid black;"><?php echo $mostrar['ID'] ?></td>
            <td style="border: 1px solid black;"><?php echo $mostrar['Nombre y apellido'] ?></td>
            <td style="border: 1px solid black;"><?php echo $mostrar['DNI'] ?></td>
            <td style="border: 1px solid black;"><?php echo $mostrar['Fecha'] ?></td>
            <td style="border: 1px solid black;"><?php echo $mostrar['archivo_nombre'] ?></td>
            <td style="border: 1px solid black;"><?php echo $mostrar['archivo_peso'] ?></td>
            <td style="border: 1px solid black;"><?php echo $mostrar['archivo_tipo'] ?></td>
            <td style="border: 1px solid black;"><a href="<?php echo $mostrar['archivo_link'] ?>">Descargar</a></td>
        }

<?php
    }
?>