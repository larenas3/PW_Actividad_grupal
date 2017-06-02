<?php
session_start();
    //Verificar si ya hay una sesión abierta
    if(isset($_SESSION['usuario'])){
        //Si la sesión esta abierta, se verifica que sea realmente un administrador
        if($_SESSION['tipo']!="admin"){
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

        <?php
          require("inc/conexion.php");
          $sql="SELECT * FROM usuarios";
          $re=mysql_query($sql)or die(mysql_error());
          while($row =mysql_fetch_array($re, MYSQL_NUM)) {
        ?>
        <div class="nota">
            <div class="texto">
                <div class="tituloNota"><?php echo $row[1]; ?></div>
                <div class="contenidoNota">
                    Usuario: <?php echo $row[2]; ?><br>
                    Correo electronico: <?php echo $row[4]; ?><br>
                    Telefono: <?php echo $row[5]; ?>
                </div>
            </div>
        </div>
        <?php
          }
        ?>
    </div>
</div>
<!-- /contenido -->
<?php
    include("inc/pie.php");
?>