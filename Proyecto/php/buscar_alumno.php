<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Profesores</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
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
                        <li class="nav-item"><a class="nav-link" href="..\PlanEstudio.html">Plan de Estudio</a></li>
                        <li class="nav-item"><a class="nav-link" href="..\LoginProf.html">Profesores</a></li>
                        <li class="nav-item"><a class="nav-link" href="..\Login.html">Alumnos</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php"><img src="..\assets\img\logout.svg" alt="" height="27px" width="32px">Salir</a></li>
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
                            <h1>Gestión Profesor</h1>
                            <span class="subheading">Bienvenido al sistema Profe! aquí podrás ver a tus alumnos y gestionarlos</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container">
            
            
            <table class="table table-striped table-bordered"     style="width:100%">
                    <thead>
                        <tr> 
                                
                            <th style=" background-color: #ADE06D; text-align: center; vertical-align: middle;">Nombre y Apellido</th>
                            <th style=" background-color: #ADE06D; text-align: center; vertical-align: middle;">DNI</th>
                            <th style=" background-color: #ADE06D; text-align: center; vertical-align: middle;">Matemática</th>
                            <th style=" background-color: #ADE06D; text-align: center; vertical-align: middle;">Lengua</th>
                            <th style=" background-color: #ADE06D; text-align: center; vertical-align: middle;">Cs Sociales</th>
                            <th style=" background-color: #ADE06D; text-align: center; vertical-align: middle;">Inglés</th>
                            <th style=" background-color: #ADE06D; text-align: center; vertical-align: middle;">Cs Naturales</th>
                            <th style=" background-color: #ADE06D; text-align: center; vertical-align: middle;">Ed Física</th>
                            <th style=" background-color: #ADE06D; text-align: center; vertical-align: middle;">Informática</th>
                        </tr>
                    </thead>

                    
                    <!-- BUSQUEDA DE ALUMNO -->
                    <h4>Modificar Datos Alumno:</h4>
                    <?php
                        include('Conexion_DB.php');

                        $busquedaDni=$_REQUEST['Dni'];
                        echo"El DNI seleccionado es:  ","'.$busquedaDni.'";                   
                        if(empty($busquedaDni)){
                            header("location: Profesores.php");

                        }

                        $sql="SELECT * from notasalumnos where DNI='".$busquedaDni."'"; 
                        $resultado=mysqli_query($conexion,$sql);
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

                        
                    <?php
                        
                        }
                        mysqli_close($conexion);
                    ?>
                        
                    <!-- UPDATE DE ALGUN CAMPO -->

                <form action="modificar_TablaAlumno.php" method="POST" onsubmit="return ValidarNotas();">

                        <?php 

                            include('Conexion_DB.php');
                            $busquedaDni=$_REQUEST['Dni'];
                            if(empty($busquedaDni)){
                                header("location: Profesores.php");

                            }

                            // establecer y realizar consulta. guardamos en variable.
                            $consulta = "SELECT * FROM notasalumnos where DNI='".$busquedaDni."'";
                            $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
                            
                            // Bucle while que recorre cada registro y muestra cada campo en la tabla.
                            while ($columna = mysqli_fetch_array( $resultado ))
                            {
                                $nombre = $columna['Nombre y Apellido'];
                                $dni = $columna['DNI'];
                                $matematica = $columna['Matematica'];
                                $lengua = $columna['Lengua'];
                                $cs_sociales = $columna['Cs Sociales'];
                                $ingles = $columna['Ingles'];
                                $cs_naturales = $columna['Cs Naturales'];
                                $ed_fisica = $columna['Ed Fisica'];
                                $informatica = $columna['Informatica'];
                                
                            }

                            // cerrar conexión de base de datos
                            mysqli_close( $conexion );

                        ?>
                    <!-- MODIFICACION DE DATOS -->

                    <div class="form-group">
                        <label for="nombre">Nombre y Apellido</label>
                        <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" id="nombre" required>
                        
                        
                        <input name="dni" type="hidden" class="form-control" value="<?php echo $dni; ?>" id="dni" required>
                        
                        <label for="matematica">Nota Matematica</label>
                        <input name="matematica" type="number" class="form-control" value="<?php echo $matematica;?>" id="mat" required>
                        
                        <label for="lengua">Nota Lengua</label>    
                        <input name="lengua" type="number" class="form-control" value="<?php echo $lengua; ?>" id="len" required>
                        
                        <label for="cs_sociales">Nota Cs Sociales</label>
                        <input name="cs_sociales" type="number" class="form-control" value="<?php echo $cs_sociales; ?>" id="soc" required>
                        
                        <label for="ingles">Nota Ingles</label>
                        <input name="ingles" type="number" class="form-control" value="<?php echo $ingles; ?>" id="ing" required>
                        
                        <label for="cs_naturales">Nota Cs Naturales</label>
                        <input name="cs_naturales" type="number" class="form-control" value="<?php echo $cs_naturales; ?>" id="nat" required>
                        
                        <label for="ed_fisica">Nota Ed_Física</label>
                        <input name="ed_fisica" type="number" class="form-control" value="<?php echo $ed_fisica; ?>" id="fis" required>
                        
                        <label for="informatica">Nota Informática</label>
                        <input name="informatica" type="number" class="form-control" value="<?php echo $informatica; ?>" id="inf" required>

                    </div>
                    
                        <!--Lo siguiente envía el formulario-->
                        <input type="submit" class="btn btn-success" value="Modificar">
                </form>

                <a href="Profesores.php"><button type="button" class="btn btn-dark">← Volver</button></a>            
                
                <form action="eliminar_alumno.php" method="POST" onsubmit="return ValidarEliminar();">
                    
                    
                    <label for="">Confirma el DNI que quieres borrar --> </label>
                    <input id="dniEliminar" style="text-align:center;" name="eliminar" type="number" value="<?php echo $busquedaDni ?>" required>

                    <input type="submit" class="btn btn-danger" value="Eliminar">
                </form>
                
            
 
            </table>
            
        </div>
        <hr />

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="..\js\ValidarProfesores.js"></script>
    
    </body>
</html>
