<?php include($PATH . '/php/header.php');

if (empty($_SESSION['usu'])) {
    echo "<script>window.location='/Proyecto-Omnitus/index.php';</script>";
}
?>


<div class="main-wrapper" style="transform: scale(1); padding-top: 44.8px;">
    <div class="main-wrapper_container">
        <div class="container__content gestionForm">
            <form action="/Proyecto-Omnitus/php/POST/aprobarPedido.php" method="post">
                <h2>Aprobar pedidos</h2>

                <select class="formCombo" name="numPedido">
                    <option value="">- - - Número de pedido - - -</option>
                    <?php
                    foreach ($listaPendientes as $ped) {

                        echo '<option value=' . $ped["numPedido"] . '>' . $ped["numPedido"] . '</option>';
                    }
                    ?>
                </select>

                <input class="formBtn clickable" type="submit" value="Aprobar" name="aprobarPedido">

            </form>

            <div class="pedidoInf" style="width:100%;">
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
    const aprobarPedido = () => {
        $(".formCombo").change(function() {
            let numP = this.value;
            $(".pedidoInf-cont").load("../models/detallesPedido.php", {
                numP: numP
            });
        })

    }
    $(document).ready(aprobarPedido);
</script>
<script src="/Proyecto-Omnitus/js/script.js"></script>
<script src="/Proyecto-Omnitus/js/LogUsu.js"></script>
<?php include($PATH . '/php/footer.php') ?>