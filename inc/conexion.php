<?php
	$host="localhost";
	$user="root";
	$pass="";
	$bd="alcsetecs";
	$con=mysql_connect($host,$user,$pass)or die("No se puede conectar al servidor");
	$sbd=mysql_select_db($bd,$con)or die("La base de datos no existe");
	mysql_query("SET NAMES 'utf8'");
?>