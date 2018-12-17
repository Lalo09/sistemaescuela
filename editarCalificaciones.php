<?php
	include('conexion.php');
	#include('sesion.php') ;
	$conectardb = conecta();
	$id =$_GET['idAlumno'];
	#echo "num:".$id;
	#exit();
	$consulta = "SELECT * FROM alumno WHERE numControl = $id ";
	$resultado = mysql_query($consulta,$conectardb);
	mysql_close();
	$registro = mysql_fetch_assoc($resultado);
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
			background-color: #a2cf6e;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="page-header">			
			<h1>Editar calificaciones de los alumnos</h1>
		</div>
		<h3><b>Nombre: </b><?php echo $registro['nombre']." ".$registro['apellidoPaterno']." ".$registro['apellidoMaterno'] ; ?></h2>
		<h3><b>Numero de control: </b><?php echo $registro['numControl']; ?></h2>
		<form action="actualizarCalificaciones.php" method="get" id="formCalif" class="form-horizontal">

			<input type="text" name="txtNumControl" id="txtNumControl" hidden value="<?php echo $registro['numControl']; ?>">
			<div>
				<label>Español:</label>
				<input type="text" name="txtcalifEsp" class="form-control" id="txtcalifEsp" value="<?php echo $registro['calificacionEsp']; ?>">
			</div>
			<div>
				<label>Matematicas:</label>
				<input type="text" name="txtcalifMat" class="form-control" id="txtcalifMat" value="<?php echo $registro['calificacionMat']; ?>">
			</div>	
			<div>
				<label>Historia:</label>
				<input type="text" name="txtcalifHist" class="form-control" id="txtcalifHist" value="<?php echo $registro['calificacionHis']; ?>">
			</div>	
			<br>
			<button name="btnGuardar" id="btnguardar" class="btn-success">Guardar</button>
		</form>
		<br>
		<a href="listadoAlumnos.php"><i>Regresar</i></a>
	</div>	
</body>
</html>