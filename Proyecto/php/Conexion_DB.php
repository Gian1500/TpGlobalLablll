<?php
	
	ini_set('error_reporting', E_ALL);
	// Ejemplo de conexión a base de datos MySQL con PHP.
	// Datos de la base de datos
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "paginaweb";
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect($servidor, $usuario,$password,$basededatos) or die ("No se ha podido conectar:".mysqli_connect_error());
	
?>