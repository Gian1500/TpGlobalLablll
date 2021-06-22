<?php
	include('Conexion_DB.php');

	if(isset($_POST['usuario'], $_POST['contraseña'])){
		$usuario = $_POST['usuario'];
		$password = MD5($_POST['contraseña']);

		$consulta = mysqli_query($conexion,"SELECT * FROM alumnos WHERE usuario='".$usuario."' and contraseña='".$password."'");
		
		$resultado= mysqli_num_rows($consulta);

	}else{
		echo "Error en POST";
	}
	

// cerrar conexión de base de datos

	mysqli_close($conexion);
	



if ($resultado==1) { 
	
	
	
	?>


		<html>
			<head>
				<meta http-equiv="Refresh" content="3;url=..\Alumnos.html"> 
			</head>

			<body>
				<h1>Logueado Satifactoriamente! Seras redireccionado en 3 segundos...</h1>
				<img src="../assets\img\authentication.png" alt="">
			</body>
		</html>
	
		

	<?php 

	session_start();}

else{
		?>
		<html>
			<head>
				<meta http-equiv="Refresh" content="3;url=http://localhost/Proyecto/Login.html"> 
			</head>

			<body>
				<h1>El Usuario o contraseña son incorrectos! Volviendo en 3 segundos...</h1>
				<img src="..\assets\img\errorautenti.jpg" alt="">
			</body>
		</html>
<?php } ?>
