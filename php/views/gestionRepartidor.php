<?php include($PATH . '/php/header.php');


if (empty($_SESSION['usu'])) {
    echo "<script>window.location='/Proyecto-Omnitus/index.php';</script>";
} else {

    if (!$_SESSION['esDirectivo']) {
        echo "<script>alert(\"No tienes los permisos para ver esta página.\");window.location='/Proyecto-Omnitus/php/views/redirect.php';</script>";
    }
}
?>


<div class="main-wrapper" style="transform: scale(1); padding-top: 44.8px;">
    <div class="main-wrapper_container">
        <div class="container__content gestionForm">
            <section>
                <form action="/Proyecto-Omnitus/php/POST/gestionRepartidor.php" method="post">
                    <h2>Pedido en camino</h2>
                    <select class="formCombo" name="idTraslado_r">
                        <option value="">- - - Id del traslado - - -</option>
                        <?php
                        foreach ($listaTraslados as $tra) {

                            echo '<option value=' . $tra["idTraslado"] . '>' . $tra["idTraslado"] . ' - (' . $tra["repartidor"] . ')</option>';
                        }
                        ?>
                    </select>
                    <input class="formBtn clickable" type="submit" value="Cambiar estado" name="estadoRuta">
                </form>
            </section>
        </div>
    </div>
</div>
<script src="/Proyecto-Omnitus/js/script.js"></script>
<script src="/Proyecto-Omnitus/js/LogUsu.js"></script>
<?php include($PATH . '/php/footer.php') ?>