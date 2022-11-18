<?php include($PATH . '/php/header.php');

if (empty($_SESSION['usu'] || !$_SESSION('esAdmin'))) {
    echo "<script>window.location='/Proyecto-Omnitus/index.php';</script>";
}

?>


<div class="main-wrapper" style="transform: scale(1); padding-top: 44.8px;">
    <div class="main-wrapper_container">
        <div class="container__content gestionForm">
            <form action="/Proyecto-Omnitus/php/POST/autorizarUsuario.php" method="post">
                <h2>Autorizar usuarios</h2>
                <select class="formCombo" name="nomUsu">
                    <option value="">- - - Nombre de usuario - - -</option>
                    <?php
                    foreach ($listaUsuarios as $u) {

                        echo '<option value=' . $u["nom"] . '>' . $u["nom"] . '</option>';
                    }
                    ?>
                </select>

                <input class="formBtn clickable" type="submit" value="Enviar" name="autorizarUsuario">
            </form>
        </div>
    </div>
</div>
<script src="/Proyecto-Omnitus/js/script.js"></script>
<script src="/Proyecto-Omnitus/js/LogUsu.js"></script>