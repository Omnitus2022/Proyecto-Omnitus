<?php include($PATH . '/php/header.php');

if (empty($_SESSION['usu'])) {
    echo "<script>window.location='/Proyecto-Omnitus/index.php';</script>";
}
?>


<div class="main-wrapper" style="transform: scale(1); padding-top: 44.8px;">
    <div class="main-wrapper_container">
        <div class="container__content gestionForm">
            <section>
                <form action="/Proyecto-Omnitus/php/POST/gestionMetas.php" method="post">
                    <h2>Actualizar meta anual</h2>

                    <select class="formCombo" name="idHuerta_u">
                        <option value="">- - - Id de la Huerta - - -</option>
                        <?php
                        $hue = $huerta->listarHuertas();


                        foreach ($hue as $h) {
                            echo '<option value="' . $h["idHuerta"] . '">' . $h["idHuerta"] . ' (' . $h["nombreHuerta"] . ')</option>';
                        }
                        ?>
                    </select>
                    <input class="inputC input-metaCantidad-gestionMetas" placeholder="Meta anual - KG / U" type="text" name="metaAnual_u">

                    <input class="formBtn clickable" type="submit" value="Actualizar meta" name="actualizarMeta">
                </form>


            </section>


        </div>

    </div>
</div>
<script src="/Proyecto-Omnitus/js/script.js"></script>
<script src="/Proyecto-Omnitus/js/LogUsu.js"></script>
<?php include($PATH . '/php/footer.php') ?>