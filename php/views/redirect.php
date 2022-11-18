<?php
include($PATH . 'php/header.php');
?>


<div class="main-wrapper" style="transform: scale(1); padding-top: 44.8px;">
    <div class="main-wrapper_container">
        <div class="container__content">
            <?php

            if (empty($_SESSION['usu'])) {
                echo "<script>window.location='/Proyecto-Omnitus/index.php';</script>";
            } else {

                if (!($_SESSION['esEmpresa'] || $_SESSION['esDirectivo'] || $_SESSION['esAdmin'] || $_SESSION['esHuerta'] || $_SESSION['esRepartidor'] || $_SESSION['esInformatico']) || $_SESSION['esEmpresa']) {
                    echo "<script>window.location='/Proyecto-Omnitus/php/controllers/catalogo_controller.php';</script>";
                } else {
                    echo "<h2>👋 Hola " . $_SESSION['usu'] . ", seleccione opción:</h2>";
                    if ($_SESSION['esDirectivo']||$_SESSION['esInformatico']) {
                    
                    echo '<a class="redirectLinks" href="/Proyecto-Omnitus/php/controllers/gestionTraslados_controller.php">Gestión de traslados</a>';
                    echo '<a class="redirectLinks" href="/Proyecto-Omnitus/php/controllers/aprobarPedido_controller.php">Aprobar pedidos</a>';
                        if(!$_SESSION['esAdmin']){
       echo '<a class="redirectLinks" href="/Proyecto-Omnitus/php/controllers/gestionHortalizas_controller.php">Gestión de Hortalizas</a>';
                        }
                        echo '<a class="redirectLinks" href="/Proyecto-Omnitus/php/controllers/gestionHuerta_controller.php">Gestión de Huertas</a>';
                        echo '<a class="redirectLinks" href="/Proyecto-Omnitus/php/controllers/gestionMetas_controller.php">Gestión de Metas</a>';
                        echo '<a class="redirectLinks" href="/Proyecto-Omnitus/php/controllers/stock_controller.php">Gestión de Stock</a>';
                    }
                    if ($_SESSION['esAdmin']||$_SESSION['esInformatico']) {
                    
                    
                    echo '<a class="redirectLinks" href="/Proyecto-Omnitus/php/controllers/autorizarUsuario_controller.php">Autorizar usuarios</a>';
                        if(!$_SESSION['esRepartidor']){
                        echo '<a class="redirectLinks" href="/Proyecto-Omnitus/php/controllers/gestionPedido_controller.php">Gestión de Pedidos</a>';
                        }
                        echo '<a class="redirectLinks" href="/Proyecto-Omnitus/php/controllers/gestionUsuarios_controller.php">Gestión de Usuarios</a>';
                        echo '<a class="redirectLinks" href="/Proyecto-Omnitus/php/controllers/gestionHortalizas_controller.php">Gestión de Hortalizas</a>';

                    }
                    if ($_SESSION['esHuerta'] || $_SESSION['esInformatico']) {
                        echo '<a class="redirectLinks" href="/Proyecto-Omnitus/php/controllers/gestionCultivos_controller.php">Gestión de Cultivos</a>';
                        echo '<a class="redirectLinks" href="/Proyecto-Omnitus/php/controllers/gestionCosechas_controller.php">Gestión de Cosechas</a>';
                    }
                    if ($_SESSION['esRepartidor'] || $_SESSION['esInformatico']) {
                        echo '<a class="redirectLinks" href="/Proyecto-Omnitus/php/controllers/gestionRepartidor_controller.php">Herramientas de repartidos y traslados</a>';
                    }
                    if ($_SESSION['esInformatico']) {

                        echo '<a class="redirectLinks" href="/Proyecto-Omnitus/php/controllers/listarTablas_controller.php">Listar tablas</a>';
                    }
                }
            }
            ?>
        </div>
    </div>
</div>

<script src="/Proyecto-Omnitus/js/script.js"></script>
<script src="/Proyecto-Omnitus/js/LogUsu.js"></script>