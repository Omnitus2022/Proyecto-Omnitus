<?php include($PATH . '/php/header.php');

if (empty($_SESSION['usu'])) {
    echo "<script>window.location='/Proyecto-Omnitus/index.php';</script>";
}
?>


<div class="main-wrapper" style="transform: scale(1); padding-top: 44.8px;">
    <div class="main-wrapper_container verPedidos-wrapper">
        <div class="verPedidos-wrapper__container">
            <div class="pedidos">
                <h1>Mis pedidos</h1>
                <br>
                <ul class="pedidos-lista">
                    <?php
                    foreach ($clientePedidos as $pedido) {
                        echo '<li>';
                        echo '<p class="fechaPedido">';
                        echo $pedido["fechaPedido"];
                        echo '</p>';
                        echo '<p class="numPedido">';
                        echo $pedido["numPedido"];
                        echo '</p>';
                        echo '<p class="importe"> $ ';
                        echo $pedido["importe"];
                        echo '</p>';
                        echo '</li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="pedidoInf">
                <h2>
                    Detalles del pedido
                </h2>

                <div class="pedidoInf-cont">
                    <!-- DETALLES PEDIDO -->

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const verPedidos = () => {
        $(".pedidos-lista li").click(function() {
            let numP = $(".numPedido", this)[0].innerText;
            $(".pedidoInf-cont").load("../models/detallesPedido.php", {
                numP: numP
            });
        })

    }
    $(document).ready(verPedidos);
</script>
<script src="/Proyecto-Omnitus/js/script.js"></script>
<script src="/Proyecto-Omnitus/js/LogUsu.js"></script>
<?php include($PATH . '/php/footer.php') ?>