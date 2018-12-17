<?php 
	/*
	*Archivo encargado de realizar una consulta a la base de datos
	*para el acesso de los usarios al sistema
	*Autor: Eduardo
	*Fecha : 8/12/2018
	*/
	include('conexion.php');

	$conexionbd = conecta();

	 $user = $_POST['txtUsuario'];
	 $pass = $_POST['txtPass'];

	 $consulta1 = "SELECT * FROM alumno WHERE numControl = '$user' and pass  ='$pass' ";
	 $consulta2 = "SELECT * FROM profesor WHERE numControl = '$user' and pass  ='$pass' ";

	 $busquedaAlumno = mysql_query($consulta1,$conexionbd);
	 $busquedaProfesor = mysql_query($consulta2,$conexionbd);
	 

	 if (mysql_num_rows($busquedaAlumno) > 0) {
	 	session_start();
	 	$_SESSION['userid'] = $user;
	 	header('location: verCalificaciones.php');
	 }
	 else if (mysql_num_rows($busquedaProfesor) > 0) {
	 	session_start();
	 	$_SESSION['userid'] = $user;
	 	header('location: listadoAlumnos.php');
	 }
	 else{
	 	#echo "Datos incorrectos";
	 	echo '
	 	<!DOCTYPE html>
		<html>
		<head>
			<title></title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		</head>
		<body>
			<div class="alert alert-danger">
	  		<strong>Error</strong> ¡Datos incorrectos!;
			</div>
		</body>
		</html>
	 	';
	 }
?>
