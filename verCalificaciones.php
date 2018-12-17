<?php 
	/*
	*Realizar consulta de todos los alumnos y mostrar su calificacion
	*/
	include('conexion.php');
	session_start();
	$id = $_SESSION['userid'];
	$conectardb = conecta();
	$consulta = "SELECT calificacionEsp,calificacionMat,calificacionHis,promedio FROM alumno WHERE numControl = ".$id;
	$datosAlumno = mysql_query($consulta,$conectardb);
	mysql_close();
 ?><!DOCTYPE html>
<html lang="es">
<head>
	<title>Ver calificaciones</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
			background-color: #009688;
			color:white;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Calificaciones</h1>
		<table class="table table-hover">
		<?php  while ($registro = mysql_fetch_assoc($datosAlumno)) { ?>
		<tr>
			<th>Materia</th>
			<th>calificacion</th>
		</tr>
		<tr>
			<td>Español</td>
			<td><?php echo ''.$registro['calificacionEsp'];?></td>		
		</tr>
		<tr>
			<td>Matematicas</td>
			<td><?php echo ''.$registro['calificacionMat'];?></td>		
		</tr>
		<tr>
			<td>Historia</td>
			<td><?php echo ''.$registro['calificacionHis'];?></td>
		</tr>
		<tr>
			<td><b>Promedio</b></td>
			<td><?php echo ''.$registro['promedio'];?></td>
		</tr>
		<?php } ?>
		</table>
		<br>
		<button class="btn-danger"><p><a href="logout.php" ><i>Salir</i></a></p></button>
	</div>
</body>
</html>