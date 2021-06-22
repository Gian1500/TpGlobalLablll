<?php
        include('Conexion_DB.php');
    
    
        $carpeta= "E:/XAMPP/htdocs/Proyecto/Tmp/";
        opendir($carpeta);
        $destino= $carpeta.$_FILES['archivo']['name'];
        copy($_FILES['archivo']['tmp_name'],$destino);
        
        date_default_timezone_set('America/Argentina/Mendoza');
        
        $nombre=$_FILES['archivo']['tmp_name'];
        $ruta= "../Proyecto/Tmp/";
        $link=$ruta.$_FILES['archivo']['name'];
        $autor=$_POST['autor'];
        $dni_autor=$_POST['dni_autor'];
        $fecha= date("Y-m-d H:i:s");

        $contenido_tmp= addslashes(fread(fopen($nombre, "rb"), filesize($nombre)));

        // Obtener del array FILES (superglobal) los datos del binario .. nombre, tabamo y tipo.
        $binario_nombre=$_FILES['archivo']['name'];
        $binario_peso=$_FILES['archivo']['size'];
        $binario_tipo=$_FILES['archivo']['type'];
        
        if (isset($autor) && isset($dni_autor) && isset($nombre)) {
            //insertamos los datos en la BD.
            $consulta_insertar = "INSERT INTO `tareas`(`ID`, `DNI`, `Nombre y apellido`, `Fecha`, `archivo_binario`, `archivo_nombre`, `archivo_peso`, `archivo_tipo`, `archivo_link`) VALUES ('', '$dni_autor','$autor','$fecha','$nombre','$binario_nombre','$binario_peso','$binario_tipo','$link')";
            mysqli_query($conexion,$consulta_insertar) or die("No se pudo insertar los datos en la base de datos.");

            header("location: ../Alumnos.html");  // si ha ido todo bien

            mysqli_close($conexion);
        }
            
        

        
?>
