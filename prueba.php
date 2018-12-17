<?php 

	/*
	*Archivo para probar la conexion exitosa a la base de datos
	*/
	include("conexion.php");

	$conexionbd = conecta();
	echo $conexionbd;
	mysql_close($conexionbd);
?>