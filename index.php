<?php
    $pagina = "inicio";
    include('inc/encabezado.php');
?>
<!--contenido-->  
<div class="contenido">
    <div class="noticias">
        <div class="tituloPanel">Novedades en ALCSETEC</div>
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
    <div class="comentarios">
        <div class="tituloPanel">Lo que dicen nuestros clientes</div>
        <div class="nota">
            <div class="tituloNota"><img class="avatar" src="imagenes/avatar.jpg" alt="Foto de Alberto"> Alberto</div>
            <div class="contenidoNota">Felicitaciones sus servicios ...</div>
        </div>
        <div class="nota">
            <div class="tituloNota"><img class="avatar" src="imagenes/avatar.jpg" alt="Foto de Gabriela"> Gabriela</div>
            <div class="contenidoNota">Excelente servicio y ...</div>
        </div>
    </div>
</div>
<!-- /contenido -->
<?php
    include("inc/pie.php");
?>