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
                    <h2>Añadir Huerta</h2>
                    <input class="inputC" placeholder="Nombre de la huerta*" type="text" name="nomH_c">
                    <select class="formCombo" name="tamH_c">
                        <option value="Pequeña">Pequeña</option>
                        <option value="Mediana">Mediana</option>
                        <option value="Grande">Grande</option>
                    </select>
                    <input class="formBtn clickable" type="submit" value="Enviar" name="createHuerta">
                </form>

                <form action="/Proyecto-Omnitus/php/POST/gestionHuerta.php" method="post">
                    <h2>Actualizar Huerta</h2>
                    <select class="formCombo" name="idH_u">
                        <option value="">- - - Id de la Huerta - - -</option>
                        <?php
                        $hue = $huerta->listarHuertas();


                        foreach ($hue as $h) {
                            echo '<option value="' . $h["idHuerta"] . '">' . $h["idHuerta"] . ' (' . $h["nombreHuerta"] . ')</option>';
                        }
                        ?>
                    </select>

                    <input class="inputC" placeholder="Nombre de la huerta*" type="text" name="nomH_u">
                    <select class="formCombo" name="tamH_u">
                        <option value="Pequeña">Pequeña</option>
                        <option value="Mediana">Mediana</option>
                        <option value="Grande">Grande</option>
                    </select>
                    <input class="formBtn clickable" type="submit" value="Enviar" name="updateHuerta">
                </form>

                <h2>Eliminar Huerta</h2>

                <form action="/Proyecto-Omnitus/php/POST/gestionHuerta.php" method="post">
                    <select class="formCombo" name="idH_d">
                        <option value="">- - - Id de la Huerta - - -</option>
                        <?php
                        $hue = $huerta->listarHuertas();


                        foreach ($hue as $h) {
                            echo '<option value="' . $h["idHuerta"] . '">' . $h["idHuerta"] . ' (' . $h["nombreHuerta"] . ')</option>';
                        }
                        ?>
                    </select>
                    <input class="formBtn clickable" type="submit" value="Enviar" name="deleteHuerta">
                </form>

            </section>
        </div>
    </div>
</div>
<script src="/Proyecto-Omnitus/js/script.js"></script>
<script src="/Proyecto-Omnitus/js/LogUsu.js"></script>