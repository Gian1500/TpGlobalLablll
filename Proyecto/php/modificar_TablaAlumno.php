<?php
    include('Conexion_DB.php');

    
    $nombre = $_POST['nombre'];
    $dni = $_POST['dni'];
    $matematica = $_POST['matematica'];
    $lengua = $_POST['lengua'];
    $cs_sociales =$_POST['cs_sociales'];
    $ingles = $_POST['ingles'];
    $cs_naturales = $_POST['cs_naturales'];
    $ed_fisica = $_POST['ed_fisica'];
    $informatica = $_POST['informatica'];

    if (isset($nombre) && isset($dni) && isset($matematica) && isset($lengua) && isset($cs_sociales) && isset($ingles) && isset($cs_naturales) && isset($ed_fisica) && isset($informatica)){

        // establecer y realizar consulta. guardamos en variable.
         $consulta = "UPDATE notasalumnos 
         SET `Nombre y Apellido`='".$nombre."',
         Matematica='".$matematica."',
         Lengua='".$lengua."',
         `Cs Sociales`='".$cs_sociales."',
         Ingles='".$ingles."',
         `Cs Naturales`='".$cs_naturales."',
         `Ed Fisica`='".$ed_fisica."',
         Informatica='".$informatica."'
          WHERE DNI='".$dni."'";
        
        
       
        
        
        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
        
	?>

    <html>
        <head>
            <meta http-equiv="Refresh" content="3;url=http://localhost/Proyecto/php/Profesores.php"> 
        </head>

        <body>
            <h1>Datos Modificados con éxito Seras redireccionado en 3 segundos...</h1>
            <img src="../assets\img\png-clipart-computer-icons-checkbox-check-mark-succes-miscellaneous-angle.png" alt="">
        </body>
    </html>

    

<?php 
    
    }else{

    ?>    
    <html>
        <head>
            <meta http-equiv="Refresh" content="3;url=http://localhost/Proyecto/php/Profesores.php"> 
        </head>

        <body>
            <h1>Error: No se pudieron guardar los datos Seras redireccionado en 3 segundos...</h1>
            <img src="../assets\img\1200px-Nuvola_apps_error.svg.png" alt="">
        </body>
    </html>


   <?php }
   // cerrar conexión de base de datos
   mysqli_close( $conexion );
    
   ?>

    
  

        
