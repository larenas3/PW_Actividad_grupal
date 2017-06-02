<?php
	//Iniciar sesión PHP
	session_start();
	//Inclir el script de conexion a la base de datos
	require("inc/conexion.php");
	//Capturar las variables que vienen por el meetodo POST
	$usuario=$_POST['usuario'];
	$pass=$_POST['pass'];

	//Armar la cadena de consulta a la base de datos para verificar si coninside usuario y contraseña
	$re=mysql_query("SELECT usuario, tipo_usuario FROM usuarios WHERE ((Nombre='".$usuario."') AND (Password='".$pass."'));")or die(mysql_error());

	//Validar que exista el usuario y la contraseña
	if($f=mysql_fetch_array($re)){
		$_SESSION['tipo']=$f['tipo_usuario'];
		$_SESSION['usuario']=$usuario;
		//redireccionar hacia la pagina del tipo de usuario
		//header('Location: '.$_SESSION['tipo'].'.php');
		echo $_SESSION['tipo'];
	}else{
		//Redireccionar hacia login.php con el mensaje de error 1
		header('Location: login.php');
	}
?>