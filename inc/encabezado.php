<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <!-- Incluir API de GoogleMaps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbpUB8r5oUUt6rNcA_X5zUFllfy1zdWAA"></script>
    <script src="js/jquery.min.js" ></script>
    <script src="js/alcsetec.js"></script>
    <title>ALCSETEC</title>
</head>
<body>
    <!--Encabezado-->
    <header>
        <!--Logo y nombre de la empresa-->
        <div>
            <a href="index.html">
                <img src="imagenes/logo.png" alt="ALCETEC - Comercializamos con pasión.">
            </a>
        </div>
        <nav>
            <!--Barra de Menú--> 
            <ul class="navbar">
                <li<?php if($pagina=="inicio"){ echo " class='activo'"; } ?>><a href="index.php">Incio</a></li>
                <li<?php if($pagina=="nosotros"){ echo " class='activo'"; } ?>><a href="nosotros.php">Nosotros</a></li>
                <li<?php if($pagina=="servicios"){ echo " class='activo'"; } ?>><a href="servicios.php">Servicios</a></li>
                <li<?php if($pagina=="contacto"){ echo " class='activo'"; } ?>><a href="contacto.php">Contactenos</a></li>
            </ul>
            <ul class="navbar-corp">
                <li<?php if($pagina=="login"){ echo " class='activo'"; } ?>><a href="login.php">Iniciar sesión</a></li>
            </ul>
        </nav>
    </header>