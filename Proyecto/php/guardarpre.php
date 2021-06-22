<?php

    include('Conexion_DB.php');

    $nombre=$_POST['nombre_Pre'];
    $apellido=$_POST['apellido_Pre'];
    $correo=$_POST['email_Pre'];
    $telefono=$_POST['telefono_Pre'];
    $trabajo=$_POST['trabaja_Pre'];
    $mayorEdad=$_POST['edad_Pre'];
    $DNI=$_POST['dni_Pre'];
    
    date_default_timezone_set('America/Argentina/Mendoza');

    $fecha= date("Y-m-d H:i:s");


   


    if (!empty($nombre) and !empty($apellido) and !empty($correo) and !empty($telefono) and !empty($DNI) ){
       

        $sql="INSERT INTO preinscripcion (`ID`,`Nombre`, `Apellido`, `Correo`, `Telefono`, `Trabajo`, `MayorEdad`, `DNI`, Fecha) VALUES ('','$nombre','$apellido','$correo','$telefono','$trabajo','$mayorEdad','$DNI','$fecha')";


        $ejecutar=mysqli_query($conexion,$sql);

        mysqli_close($conexion);

        header('location: ..\Preinscripcion.html');
    }else{
        echo "Error";
    }
    
?>