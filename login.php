<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="estilos.css">
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
                <li><a href="index.html">Incio</a></li>
                <li><a href="nosotros.html">Nosotros</a></li>
                <li><a href="servicios.html">Servicios</a></li>
                <li><a href="contacto.html">Contactenos</a></li>
            </ul>
            <ul class="navbar-corp">
                <li class="activo"><a href="login.php">Iniciar sesión</a></li>
            </ul>
        </nav>
    </header>
    <!--contenido-->  
    <div class="contenido" style="text-align: center;">
        <div class="noticias">
            <div class="tituloPanel">Ingreso al área administrativa</div>
            <form method="post" action="#" onsubmit="return validacion()">
                <div>
                    <input id="usuario" name="usuario" placeholder="Usuario" type="text">
                    <span class="msg"></span>
                </div>
                <div>
                    <input id="pass" name="pass" placeholder="Contraseña" type="password">
                    <span class="msg"></span>
                </div>
                <button class="btnEnviar" id="btnEnvia" type="submit">INGRESAR</button>
            </form>
        </div>
    </div>
</div>
<!--Pie de página-->   
<footer>
    <div>
        <p>ALCSETEC 2017</p>
    </div>
</footer>
</body>
</html>