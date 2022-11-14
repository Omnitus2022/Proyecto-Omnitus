<?php include($PATH . '/php/header.php');

if (empty($_SESSION['usu'])) {
    echo "<script>window.location='/Proyecto-Omnitus/index.php';</script>";
}
?>


<div class="main-wrapper" style="transform: scale(1); padding-top: 44.8px;">
    <div class="main-wrapper_container">
        <div class="container__content gestionForm">
            <form action="/Proyecto-Omnitus/php/POST/gestionTraslados.php" method="post">
                <h2>Insertar cultivo</h2>

                <select class="formCombo" name="idVariedad">
                    <option value="">- - - Verdura a cultivar - - -</option>
                    <?php
                    foreach ($listaVariedades as $var) {

                        echo '<option value=' . $var["idVariedad"] . '>' . $var["idVariedad"] . ' (' . $variedad::limpiarNombre($var["nombre"]) . ')</option>';
                    }
                    ?>
                </select>

                <input class="formBtn clickable" type="submit" value="Iniciar traslado" name="iniciarTraslado">

            </form>

        </div>

    </div>
</div>

<script src="/Proyecto-Omnitus/js/script.js"></script>
<script src="/Proyecto-Omnitus/js/LogUsu.js"></script>
<?php include($PATH . '/php/footer.php') ?>