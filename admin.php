<?php
session_start();
    //Verificar si ya hay una sesión abierta
    if(isset($_SESSION['usuario'])){
        //Si la sesión esta abierta, se verifica que sea realmente un administrador
        if(!$_SESSION['tipo']=="admin"){
            header('Location: '.$_SESSION['tipo'].'.php');
            exit(0);
        }
    }else{
        header('Location: login.php');
        exit(0);
    }

    $pagina = "inicio";
    include('inc/encabezado.php');
?>
<!--contenido-->  
<div class="contenido">
    <div class="noticias">
        <div class="tituloPanel">Lista de contactos</div>
        <div class="nota">
            <div class="foto"><img src="imagenes/router.jpg" alt="imagen del producto"></div>
            <div class="texto">
                <div class="tituloNota">Llega el nuevo router</div>
                <div class="contenidoNota">Con sus nuevas y mejoradas características ...</div>
                <div class="fecha"></div>
            </div>
        </div>
        <div class="nota">
            <div class="foto"><img src="imagenes/router.jpg" alt="imagen del producto"></div>
            <div class="texto">
                <div class="tituloNota">Llega el nuevo router</div>
                <div class="contenidoNota">Con sus nuevas y mejoradas características ...</div>
            </div>
        </div>
        <div class="nota">
            <div class="foto"><img src="imagenes/router.jpg" alt="imagen del producto"></div>
            <div class="texto">
                <div class="tituloNota">Llega el nuevo router</div>
                <div class="contenidoNota">Con sus nuevas y mejoradas características ...</div>
            </div>
        </div>
    </div>
</div>
<!-- /contenido -->
<?php
    include("inc/pie.php");
?>