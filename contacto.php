<?php
    $pagina = "contacto";
    include('inc/encabezado.php');
?>
<!--contenido-->  
<div class="contenido">
    <section>
        <div>
            <div class="col2">
                <h1>Datos de contacto</h1>
                <p>Calle 24B # 100-91 (Bogotá - Colombia)<br>
                    311 2394699<br>
                    <a href="mailto:alcsetec@gmail.com">alcsetec@gmail.com</a></p>
                <p>Escríbanos, respondemos su solicitud de manera personalizada y en el menor tiempo.</p>
            </div>
            <div class="col2">
                <form method="post" action="#" onsubmit="return validacion()">
                    <div>
                        <input id="nombre" name="nombre" placeholder="Nombre" type="text">
                        <span class="msg"></span>
                    </div>
                    <div>
                        <input id="correo" name="correo" placeholder="Correo electrónico" type="text">
                        <span class="msg"></span>
                    </div>
                    <div>
                        <textarea id="comentarios" name="comentarios" placeholder="Sus solicitudes o comentarios"></textarea><br>
                        <span class="msg"></span>
                    </div>
                    <button class="btnEnviar" id="btnEnvia" type="submit">ENVIAR</button>
                </form>
            </div>
        </div>
        <!-- Mashup de GoogleMaps -->
        <div id="googleMap" style="height:400px;width:100%;"></div>
</section>
</div>
<!-- /contenido -->
<?php
    include("inc/pie.php");
?>