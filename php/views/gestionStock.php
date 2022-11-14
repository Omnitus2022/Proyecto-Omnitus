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
                <form action="/Proyecto-Omnitus/php/POST/gestionStock.php" method="post">
                    <h2>Insertar Stock</h2>

                    <select class="formCombo" name="idV">
                        <option value="">- - - Id de la Variedad - - -</option>
                        <?php
                        $var = $stock->sinStock();
                        foreach ($var as $v) {
                            echo '<option value="' . $v["idVariedad"] . '">' . $v["idVariedad"] . ' (' . $v["nombre"] . ')</option>';
                        }
                        ?>
                    </select>
                    <input class="inputC" placeholder="Volumen" type="text" name="vol">
                    <input class="formBtn clickable" type="submit" value="Enviar" name="insertStock">
                </form>

                <form action="/Proyecto-Omnitus/php/POST/gestionStock.php" method="post">
                    <h2>Agregar Stock</h2>

                    <select class="formCombo" name="idV_u">
                        <option value="">- - - Id de la Variedad - - -</option>
                        <?php
                        $var = $stock->listarStock();
                        foreach ($var as $v) {
                            echo '<option value="' . $v["idVariedad"] . '">' . $v["idVariedad"] . ' (' . $v["nombre"] . ')</option>';
                        }
                        ?>
                    </select>
                    <input class="inputC" placeholder="Volumen" type="text" name="vol_u">
                    <input class="formBtn clickable" type="submit" value="Enviar" name="addStock">
                </form>
                <form action="/Proyecto-Omnitus/php/POST/gestionStock.php" method="post">
                    <h2>Bajar Stock</h2>

                    <select class="formCombo select_bajarStock" name="idV_d">
                        <option value="">- - - Id de la Variedad - - -</option>
                        <?php
                        $var = $stock->listarStock();
                        foreach ($var as $v) {
                            echo '<option volumen="' . $v["volumen"] . '" value="' . $v["idVariedad"] . '">' . $v["idVariedad"] . ' (' . $v["nombre"] . ')</option>';
                        }
                        ?>
                    </select>
                    <input class="inputC input_volumen_bajarStock" placeholder="Volumen" type="text" name="vol_d">
                    <input class="formBtn clickable" type="submit" value="Enviar" name="bajarStock">
                </form>
            </section>
        </div>
    </div>
</div>
<script>
    const gestionStock = () => {
        $(".select_bajarStock").change(function() {
            let vol = this[this.options.selectedIndex].getAttribute("volumen");
            $(".input_volumen_bajarStock").val(vol);
        })

    }
    $(document).ready(gestionStock);
</script>
<script src="/Proyecto-Omnitus/js/script.js"></script>
<script src="/Proyecto-Omnitus/js/LogUsu.js"></script>
<?php include($PATH . '/php/footer.php') ?>