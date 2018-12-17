<?php 
	/*
	*Metodo que realiza la conexion al servidor de base de datos
	*Autor: Eduardo
	*Fecha : 8/12/2018
	*/
	function conecta(){
		$servidor = "localhost";
		$nombrebd = "sistema_escuela";
		$usuario = "root";
		$pass = "jose9608";

		$conexion = mysql_connect($servidor,$usuario,$pass);
		mysql_select_db($nombrebd);

		return $conexion;
	}
?>