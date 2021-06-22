<?php
    include('Conexion_DB.php'); 

    $eliminar=$_POST['eliminar'];
    if(isset($_POST['eliminar'])){
        // establecer y realizar consulta. guardamos en variable.
        $consulta = "DELETE from notasalumnos where DNI='".$eliminar."'";
        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");		
        

        // cerrar conexión de base de datos
        mysqli_close($conexion);
    }
?>

<html>
        <head>
            <meta http-equiv="Refresh" content="3;url=http://localhost/Proyecto/php/Profesores.php"> 
        </head>

        <body>
            <h1>DNI: <?php echo $eliminar ?> borrado con éxito. Serás redireccionado en 3 segundos...</h1>
            <img src="../assets\img\png-clipart-computer-icons-checkbox-check-mark-succes-miscellaneous-angle.png" alt="">
        </body>
</html>