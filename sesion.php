<?php 
	/*
	*Archivo que controla las sesiones de un usuario
	*Autos: Eduardo
	*Fecha: 9-12-2018
	*/
	include('conexion.php');
	session_start();
	if (isset($_SESSION['userid'])){
		$id = $_SESSION['userid'];	
	
		$conexionbd = conecta();

		$consulta1 = "SELECT * FROM alumno WHERE numControl = '$id' ";
		$consulta2 = "SELECT * FROM profesor WHERE numControl = '$id' ";

		$busquedaAlumno = mysql_query($consulta1,$conexionbd);
	 	$busquedaProfesor = mysql_query($consulta2,$conexionbd);

	 	if (mysql_num_rows($busquedaAlumno) > 0 ) {
			header('location: verCalificaciones.php');
	 	}
	 	else if (mysql_num_rows($busquedaProfesor) > 0 ) {
	 		header('location: listadoAlumnos.php');
	 	}	
	 }
?>