<?php include($PATH . '/php/header.php');

if (empty($_SESSION['usu'])) {
    echo "<script>window.location='/Proyecto-Omnitus/index.php';</script>";
}
?>


<div class="main-wrapper" style="transform: scale(1); padding-top: 44.8px;">
    <div class="main-wrapper_container">
        <div class="container__content gestionForm">
            <form action="/Proyecto-Omnitus/php/POST/gestionTraslados.php" method="post">
                <h2>Iniciar traslado</h2>

                <select class="formCombo" name="repartidor">
                    <option value="">- - - Usuario del repartidor - - -</option>
                    <?php
                    foreach ($listaRepartidores as $rep) {

                        echo '<option value=' . $rep["nom"] . '>' . $rep["nom"] . '</option>';
                    }
                    ?>
                </select>

                <input class="formBtn clickable" type="submit" value="Iniciar traslado" name="iniciarTraslado">

            </form>
            <form action="/Proyecto-Omnitus/php/POST/gestionTraslados.php" method="post">
                <h2>Asignar pedidos</h2>

                <select class="formCombo" name="idTraslado">
                    <option value="">- - - Id del traslado - - -</option>
                    <?php
                    foreach ($listaTraslados as $tra) {

                        echo '<option value=' . $tra["idTraslado"] . '>' . $tra["idTraslado"] . ' - (' . $tra["repartidor"] . ')</option>';
                    }
                    ?>
                </select>


                <select class="formCombo" name="numPedido">
                    <option value="">- - - Número del pedido - - -</option>
                    <?php
                    foreach ($listaPedidosSinTraslado as $ped) {

                        echo '<option value=' . $ped["numPedido"] . '>' . $ped["numPedido"] . ' - (' . $cliente->getNombreCliente($ped["idCliente"]) . ')</option>';
                    }
                    ?>
                </select>


                <input class="formBtn clickable" type="submit" value="Asignar pedido" name="asignarPedido">

            </form>
        </div>

    </div>
</div>

<script src="/Proyecto-Omnitus/js/script.js"></script>
<script src="/Proyecto-Omnitus/js/LogUsu.js"></script>