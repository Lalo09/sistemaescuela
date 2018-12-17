<?php 
	/*
	*Clase para cerrar la sesion de un usuario al sistema
	*Autor: Eduardo
	*Fecha : 10-12-2018 7:15 p.m.
	*/
	session_start();
	session_unset($_SESSION['userid']);
	header('location: index.php');
?>