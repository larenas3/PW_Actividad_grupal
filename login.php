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
        <form method="POST" id="acceso" action="">
            <input class="acceso" id="usuario" name="usuario" placeholder="Usuario" type="text">
            <input class="acceso" id="pass" name="pass" placeholder="Contraseña" type="password">
            <input class="btnEnviar" id="btnEnvia" type="submit" value="INGRESAR">
        </form>
    </div>
    <br>
    <br>
    <div class="comentarios">
        <div class="tituloPanel">Registrarse</div>
        <form method="POST" id="registro" action="">
            <input class="registro" id="nombre" name="nombre" placeholder="Nombres y Apellidos" type="text">
            <input class="registro" id="usuario" name="usuario" placeholder="Usuario" type="text">
            <input class="registro" id="pass" name="pass" placeholder="Contraseña" type="password">
            <input class="registro" id="email" name="email" placeholder="Correo electrónico" type="email">
            <input class="registro" id="telefono" name="telefono" placeholder="Teléfono" type="tel">
            <input class="btnEnviar" type="button" name="registrar" id="registrar" value="REGISTRAR">
            <span id="resultado"></span>
        </form>
    </div>
</div>
<!-- /contenido -->
<?php
include("inc/pie.php");
?>