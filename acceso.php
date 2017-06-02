<?php
session_start();
//Conectar a la base de datos
require("inc/conexion.php");
if(isset($_POST["user"])&&isset($_POST["pass"])){
	$user=$_POST["user"];
	$pass=$_POST["pass"];
		//Armar la cadena de consulta a la base de datos para verificar si coninside usuario y contraseña
	$re=mysql_query("SELECT * FROM usuarios WHERE ((usuario='$user') AND (contrasena='$pass'));")or die(mysql_error());

	//Validar que exista el usuario y la contraseña
	if($f=mysql_fetch_array($re)){
		$_SESSION['usuario']=$user;
		$_SESSION['tipo']=$f['tipo_usuario'];
		echo 1;
	}else{
		echo "error";
	}
}
?>