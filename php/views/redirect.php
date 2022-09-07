<?php
include($PATH.'php/header.php');
?>


<div class="main-wrapper" style="transform: scale(1); margin-top: 44.8px;">
    <div class="main-wrapper_container">
        <div class="container__content">
    <?php 

session_start();


if(empty($_SESSION['usu'])){
    echo "<script>window.location='/Proyecto-Omnitus/index.php';</script>";

    
}else {
    echo "<h2>👋 Hola ".$_SESSION['usu'].", seleccione opción:</h2>";
    if (!($_SESSION['esEmpresa'] || $_SESSION['esDirectivo'] ||$_SESSION['esAdmin'] || $_SESSION['esHuerta'] || $_SESSION['esRepartidor'] || $_SESSION['esInformatico'])) {
        echo "<script>window.location='/Proyecto-Omnitus/php/controllers/catalogo_controller.php';</script>";
    }else{
            if ($_SESSION['esEmpresa']) {
                echo "<script>window.location='/Proyecto-Omnitus/php/controllers/catalogo_controller.php';</script>";
            }
            if ($_SESSION['esDirectivo']) {
                echo '<a class="clickable" href="">Estadísticas</a>';
                echo '<a class="clickable" href="">Gestión de Huertas</a>';
                echo '<a class="clickable" href="">Gestión de Metas</a>';
                echo '<a class="clickable" href="">Gestión de Stock</a>';

            }
            if ($_SESSION['esAdmin']) {
                echo '<a class="clickable" href="">Gestión de Pedidos</a>';
                echo '<a class="clickable" href="">Gestión de Clientes</a>';
                echo '<a class="clickable" href="">Gestión de Admin</a>';
            }
            if ($_SESSION['esHuerta']) {
                echo '<a class="clickable" href="">Estado de Cultivos</a>';
                echo '<a class="clickable" href="">Ingreso de Cultivos</a>';
                echo '<a class="clickable" href="">Estadísticas de Cultivos</a>';
            }
            if ($_SESSION['esRepartidor']) {
                echo '<a class="clickable" href="">Entrega de Pedidos</a>';
            }
            if ($_SESSION['esInformatico']) {
                echo '<a class="clickable" href="">Gestionar Usuarios</a>';
                echo '<a class="clickable" href="">Gestionar Huertas</a>';
                echo '<a class="clickable" href="/Proyecto-Omnitus/php/controllers/gestionHortalizas_controller.php">Gestionar Productos</a>';

            }
        }
}
?>
    </div>
    </div>
</div>

<script src="/Proyecto-Omnitus/js/script.js"></script>
<script src="/Proyecto-Omnitus/js/LogUsu.js"></script>
<?php
include($PATH.'php/footer.php');
?>