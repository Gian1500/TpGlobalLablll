<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Alumnos</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css\styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="index.html">CEBJA 3-202</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="Plan de Estudio.html">Plan de Estudio</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">Profesores</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Alumnos</a></li>
                        <li class="nav-item"><a class="nav-link" href="php/logout.php"><img src="../assets/img/logout.svg" alt="" height="27px" width="32px">Salir</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('../assets/img/Plan_de_Estudio.jpg')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="page-heading">
                            <h1>Gestión Alumno</h1>
                            <span class="subheading">Bienvenido al sistema! aqui podras ver tus notas y subir tus trabajos</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container">
             
              <div class="form-group">

                    
                <center><h1>Lista de Notas</h1></center>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th style=" background-color: #ADE06D;">Nombre y Apellido</th>
                            <th style=" background-color: #ADE06D;">DNI</th>
                            <th style=" background-color: #ADE06D;">Matemática</th>
                            <th style=" background-color: #ADE06D;">Lengua</th>
                            <th style=" background-color: #ADE06D;">Cs Sociales</th>
                            <th style=" background-color: #ADE06D;">Inglés</th>
                            <th style=" background-color: #ADE06D;">Cs Naturales</th>
                            <th style=" background-color: #ADE06D;">Ed Física</th>
                            <th style=" background-color: #ADE06D;">Informática</th>
                        </tr>
                    </thead>
                    

                    <?php
                        include('Conexion_DB.php');
                        $busquedaDni=$_REQUEST['dni'];
                        
                        if(empty($busquedaDni)){
                            header("location: ..\Alumnos.html");

                        }

                        $sql="SELECT * from notasalumnos where DNI='".$busquedaDni."'"; 
                        $resultado=mysqli_query($conexion,$sql);
                        mysqli_close($conexion);
                        while($mostrar=mysqli_fetch_array($resultado)){

                    ?>

                        <tbody>
                            <tr>
                                <td><?php echo $mostrar['Nombre y Apellido'] ?></td>
                                <td><?php echo $mostrar['DNI'] ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $mostrar['Matematica'] ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $mostrar['Lengua'] ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $mostrar['Cs Sociales'] ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $mostrar['Ingles'] ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $mostrar['Cs Naturales'] ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $mostrar['Ed Fisica'] ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $mostrar['Informatica'] ?></td>
                            </tr>
                        </tbody>
                        
                    <?php
                        }
                        
                    ?>
                    
                    

                    
                </table>
                
                <a href="../Alumnos.html"><button type="submit" class="btn btn-primary">← Volver</button></a>

                
            </div>


           
                
        </div>

        <?php

            include('Conexion_DB.php');

            $busquedaDni=$_REQUEST['dni'];

            if(empty($busquedaDni)){
                header("location: ..\Alumnos.html");

            }
            $consulta="SELECT `ID`, `DNI`, `Nombre y apellido`, `Fecha`, `archivo_binario`, `archivo_nombre`, `archivo_peso`, `archivo_tipo`, `archivo_link` FROM `tareas` Where DNI='".$busquedaDni."'";

            
            $resultado = mysqli_query($conexion,$consulta);

            mysqli_close($conexion);
        ?>
            <center>
            <h1>Lista de Tareas Subidas</h1>
            <table style="border: 1px solid black;">

                <thead>
                    <tr>
                        <th style=" background-color: #ADE06D; border: 1px solid black; text-align:center;">ID</th>
                        <th style=" background-color: #ADE06D; border: 1px solid black; text-align:center;">Nombre y apellido</th>
                        <th style=" background-color: #ADE06D; border: 1px solid black; text-align:center;">DNI</th>
                        <th style=" background-color: #ADE06D; border: 1px solid black; text-align:center;">Fecha</th>
                        <th style=" background-color: #ADE06D; border: 1px solid black; text-align:center;">Nombre del archivo</th>
                        <th style=" background-color: #ADE06D; border: 1px solid black; text-align:center;">Peso</th>
                        <th style=" background-color: #ADE06D; border: 1px solid black; text-align:center;">Tipo</th>
                        <th style=" background-color: #ADE06D; border: 1px solid black; text-align:center;">Link</th>

                    </tr>
                </thead>



                <?php
                while($mostrar = mysqli_fetch_array($resultado)){ ?>
                    <tbody>
                        <tr>
                            <td style="border: 1px solid black;"><b><?php echo $mostrar['ID'] ?></b></td>
                            <td style="border: 1px solid black;"><b><?php echo $mostrar['Nombre y apellido'] ?></b></td>
                            <td style="border: 1px solid black;"><?php echo $mostrar['DNI'] ?></td>
                            <td style="border: 1px solid black;"><?php echo $mostrar['Fecha'] ?></td>
                            <td style="border: 1px solid black;"><?php echo $mostrar['archivo_nombre'] ?></td>
                            <td style="border: 1px solid black;"><?php echo $mostrar['archivo_peso'] ?> bits</td>
                            <td style="border: 1px solid black;"><?php echo $mostrar['archivo_tipo'] ?></td>
                            <td style="border: 1px solid black;"><a href="<?php echo $mostrar['archivo_link'] ?>" download="<?php echo $mostrar['archivo_link'] ?>">Descargar</a></td>
                            
                        </tr>
                    </tbody>

                <?php } ?>

             </table>
            <center>       
    </body>
    

</html>
