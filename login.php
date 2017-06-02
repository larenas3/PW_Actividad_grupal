<?php
session_start();
//Verificar si ya hay una sesión abierta
if(isset($_SESSION['usuario'])){
//Si la sesión esta abierta, cargar el sitio del respectivo usuario
    header('Location: '.$_SESSION['tipo'].'.php');
    exit(0);
}

$pagina = "login";
include('inc/encabezado.php');
?>
<!--contenido-->  
<div class="contenido" style="text-align: center;">
    <div id="mensaje"></div>
    <div class="comentarios">
        <div class="tituloPanel">Iniciar sesión</div>
        <form method="POST">
            <input id="usuario" name="usuario" placeholder="Usuario" type="text" autofocus>
            <input id="pass" name="pass" placeholder="Contraseña" type="password">
            <input class="btnEnviar" id="ingresar" name="ingresar" type="button" value="INGRESAR">
            <span id="resultado"></span>
        </form>
    </div>
    <br>
    <br>
    <div class="comentarios">
        <div class="tituloPanel">Registrarse</div>
        <form method="POST">
            <input id="nombre" name="nombre" placeholder="Nombres y Apellidos" type="text">
            <input id="usuario" name="usuario" placeholder="Usuario" type="text">
            <input id="pass" name="pass" placeholder="Contraseña" type="password">
            <input id="email" name="email" placeholder="Correo electrónico" type="email">
            <input id="telefono" name="telefono" placeholder="Teléfono" type="tel">
            <input id="registrar" type="button" value="REGISTRAR">
        </form>
    </div>
</div>
<!-- /contenido -->
<?php
include("inc/pie.php");
?>