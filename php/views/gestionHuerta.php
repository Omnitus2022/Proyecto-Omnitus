<?php include($PATH . '/php/header.php');

if (empty($_SESSION['usu'])) {
    echo "<script>window.location='/Proyecto-Omnitus/index.php';</script>";
} else {

    if (!$_SESSION['esInformatico']) {
        echo "<script>alert(\"No tienes los permisos para ver esta página.\");window.location='/Proyecto-Omnitus/php/views/redirect.php';</script>";
    }
}
?>


<div class="main-wrapper" style="transform: scale(1); padding-top: 44.8px;">
    <div class="main-wrapper_container">
        <div class="container__content gestionForm">
            <section>
                <form action="/Proyecto-Omnitus/php/POST/gestionHuerta.php" method="post">
                    <h2>Huerta</h2>
                    <input class="inputC" placeholder="Nombre de la huerta*" type="text" name="nomH">
                    <select class="formCombo" name="idV">
                        <option value="">Pequeña</option>
                        <option value="">Mediana</option>
                        <option value="">Grande</option>
                    </select>
                    <input class="inputC" placeholder="Meta anual" type="text" name="metaC">
                    <input class="formBtn clickable" type="submit" value="Enviar" name="huerta">
                </form>
            </section>
        </div>
    </div>
</div>
<script src="/Proyecto-Omnitus/js/script.js"></script>
<script src="/Proyecto-Omnitus/js/LogUsu.js"></script>
<?php include($PATH . '/php/footer.php') ?>