<?php 
	include('sesion.php') ;
?>
 <!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio de sesion</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		body {
		  background-image: url("https://majalblanco.es/wp-content/uploads/2016/06/libros-texto-2016-217-majal-blanco.jpg"), url("paper.gif");
		  background-color: #cccccc;
		}
		#login{
			margin-top: 12%;
			margin-left: auto;
			margin-right: auto;
		}
		#titulo{
			text-align: center;
		}
		#btn_aceptar{
			margin-left: auto;
			margin-right: auto;
		}
	</style>
</head>
<body>
	<div class="container" id="login">
		<div class="well well-lg" >
			<h1 id="titulo"><b>Inicio de sesion</b></h1>
			<form method="post" action="login.php" name="login" class="form-horizontal">
				<div class="form-group">
					<label for="txtUsuario" >Usuario:</label>
					<input type="text" name="txtUsuario" id="txtUsuario" class="form-control">
				</div>
				<div class="form-group">
					<label for="txtUsuario" >Contraseña:</label>
					<input type="password" name="txtPass" id="txtPass" class="form-control">
				</div>
				<button name="btnIngresar" id="btnIngresar" class="btn btn-primary" id="btn_aceptar" data-toggle="modal" data-target="#myModal">INGRESAR</button>
			</form>
		</div>		
	</div>
</body>
</html>