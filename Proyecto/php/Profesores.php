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
                        <li class="nav-item"><a class="nav-link" href="Profesores.php">Profesores</a></li>
                        <li class="nav-item"><a class="nav-link" href="Login.html">Alumnos</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php"><img src="..\assets\img\logout.svg" alt="" height="27px" width="32px">Salir</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('../assets/img/gestionprof.jpg')">
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

            <table class="table table-striped table-bordered" style="width:100%">
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

            
                

                <div class="form-group">

                    <form action="buscar_alumno.php" method="GET" onsubmit="return ValidarConsulta();">

                        <label for="BusquedaDni"><h2>Gestionar alumno por DNI:</h2></label>
                        <input type="number" class="form-control" name="Dni" id="dniBusqueda" placeholder="DNI alumno" required >

                        <br>
                        <button type="submit" class="btn btn-primary">Buscar</button>
                        
                    </form>

                    <br>
                    
                    

                        
                </div>


                <div>
                    <label for=""><h2>Tareas Subidas</h2></label>
                    <form action="..\Tareas.html">
                        <input type="submit" class="btn btn-dark" value="Tareas">
                    </form>
                </div>
                
                <br>

               <center> <h2>Listado Completo de Alumnos</h2></center>
               <br>
                



                <?php
                    include('Conexion_DB.php');
                    $sql="SELECT * from notasalumnos"; 
                    $result=mysqli_query($conexion,$sql);

                    while($mostrar=mysqli_fetch_array($result)){
                        

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
                        

                                                                                                         
                                                    
                        </td>
                        
                    </tr>

                    
                <?php
                    
                    }

                    mysqli_close($conexion);
                ?>

                
            </table>
        </div>
        <hr />
       
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="..\js\ValidarProfesores.js"></script>
        
    </body>
</html>
