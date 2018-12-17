<?php 
	include('conexion.php');

	$calificacionEsp = $_GET['txtcalifEsp'];
	$calificacionMat = $_GET['txtcalifMat'];
	$calificacionHis = $_GET['txtcalifHist'];
	$id = $_GET['txtNumControl'];

	$promedio = ($calificacionEsp + $calificacionMat + $calificacionHis) / 3;

	$conectardb = conecta();

	$consulta = "UPDATE alumno SET calificacionEsp = $calificacionEsp , calificacionMat = $calificacionMat , calificacionHis = $calificacionHis , promedio = ". round($promedio,2) ." WHERE numControl = $id ";
	$exito = mysql_query($consulta,$conectardb);

	if ($exito) {
		echo "<script type='text/javascript'>alert('Calificacion actualizada correctamente!');</script>";
		header('location: listadoAlumnos.php');

	}
	else{
		echo "<script type='text/javascript'>alert('Error al actualizar');</script>";
		header('location: listadoAlumnos.php');
	}
?>