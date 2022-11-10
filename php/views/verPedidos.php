<?php include($PATH . '/php/header.php');

if (empty($_SESSION['usu'])) {
    echo "<script>window.location='/Proyecto-Omnitus/index.php';</script>";
}
?>


<div class="main-wrapper" style="transform: scale(1); padding-top: 44.8px;">
    <div class="main-wrapper_container">
        <div class="pedidos">
            <h2>Ver Pedidos</h2>
            <ul class="pedidos-lista">
                <?php
                foreach ($clientePedidos as $pedido) {
                    echo '<li>' . $pedido["numPedido"] . 'FECHA - ' . $pedido["fechaPedido"] . '$' . $pedido["importe"] .  '</li>';
                }
                ?>
            </ul>
        </div>
        <div class="pedidoInf">
            <h3 class="pedidoInf-num">
            </h3>
            <div class="pedidoInf-cont">
                <p class="pedidoInf-cont--estado"></p>
                <ul class="pedidoInf-cont--productos">

                </ul>
                <p class="pedidoInf-cont--metodo"></p>
                <p class="pedidoInf-cont--fecha"></p>
                <p class="pedidoInf-cont--fecha"></p>
                <p class="pedidoInf-cont--hora"></p>
                <p class="pedidoInf-cont--hora"></p>
                <p class="pedidoInf-cont--repartidor"></p>
                <h3 class="pedidoInf-cont--total">

                </h3>
            </div>
        </div>
    </div>
</div>
<script src="/Proyecto-Omnitus/js/script.js"></script>
<script src="/Proyecto-Omnitus/js/LogUsu.js"></script>
<?php include($PATH . '/php/footer.php') ?>