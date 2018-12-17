<?php 
	/*
	*Realizar consulta de todos los alumnos y mostrar su calificacion  para que los maestros puedan editarlos
	*/
	include('conexion.php');
	#include('sesion.php') ;
	$conectardb = conecta();
	$consulta = "SELECT * FROM alumno WHERE numControl";
	$datosAlumno = mysql_query($consulta,$conectardb);
	mysql_close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Editar Calificaciones</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
			background-color:#a2cf6e ;
		}
		.btn-danger p a i{
			color: white;
		}
	</style>
</head>
<body>
	<div class="jumbotron">
		<h1>Calificaciones</h1>
		<h2>Listado de alumnos</h2>
	</div>		
	<div class="container">
		<table class="table table-hover">
			<tr>
				<th>Numero de control</th>
				<th>Alumno</th>
				<th>Calificacion Español</th>
				<th>Calificacion Matematicas</th>
				<th>Calificacion Historia</th>
				<th>Promedio</th>
				<th></th>
			</tr>
			<?php while ($registro =  mysql_fetch_assoc($datosAlumno)) { ?>
			<tr>
				<td><?php echo "".$registro['numControl']; ?></td>
				<td><?php echo "".$registro['Nombre']." ".$registro['apellidoPaterno']." ".$registro['apellidoMaterno']; ?></td>
				<td><?php echo "".$registro['calificacionEsp']; ?></td>
				<td><?php echo "".$registro['calificacionMat']; ?></td>
				<td><?php echo "".$registro['calificacionHis']; ?></td>
				<td><span><?php echo "".$registro['promedio']; ?></span></td>		
				<td><a href="editarCalificaciones.php?idAlumno=<?php echo "".$registro['numControl'];  ?>">Editar</a></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<button class="btn-danger"><p><a href="logout.php" ><i>Salir</i></a></p></button>
	</div>
</body>
</html>