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
                    <h2>Stock</h2>

                    <select class="formCombo" name="idV">
                        <option value="">- - - Id de la Variedad - - -</option>
                        <?php
                        $var = $variedad->listarVariedades();
                        foreach ($var as $v) {
                            echo '<option value="' . $v["idVariedad"] . '">' . $v["idVariedad"] . ' (' . $v["nombreVariedad"] . ')</option>';
                        }
                        ?>
                    </select>
                    <input class="inputC" placeholder="Volumen" type="text" name="vol">
                    <input class="formBtn clickable" type="submit" value="Enviar" name="stock">
                </form>
            </section>
        </div>
    </div>
</div>
<script src="/Proyecto-Omnitus/js/script.js"></script>
<script src="/Proyecto-Omnitus/js/LogUsu.js"></script>
<?php include($PATH . '/php/footer.php') ?>