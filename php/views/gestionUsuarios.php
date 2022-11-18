<?php include($PATH . '/php/header.php');

if (empty($_SESSION['usu'])) {

    echo "<script>window.location='/Proyecto-Omnitus/index.php';</script>";
} else {

    if (!$_SESSION['esInformatico']) {
        echo "<script>alert(\"No tienes los permisos para ver esta página.\");window.location='/Proyecto-Omnitus/php/views/redirect.php';</script>";
    }
}
$huertas = $huerta->listarHuertas();
?>

<div class="main-wrapper" style="transform: scale(1); padding-top: 44.8px;">
    <div class="main-wrapper_container">
        <div class="container__content gestionForm">
            <section>
                <form action="/Proyecto-Omnitus/php/POST/gestionUsuarios.php" method="post">
                    <h2>Crear usuario</h2>
                    <select class="formCombo" name="idC_c">
                        <option value="">- - - Id del Cliente - - -</option>
                        <?php

                        foreach ($listaClientes as $c) {
                            echo '<option value=' . $c["idCliente"] . '>' . $c["idCliente"] . ' - ' . $c["nombreCliente"] . '</option>';
                        }
                        ?>

                    </select>

                    <input class="inputC" placeholder="Nombre*" type="text" name="nomUsu_c">
                    <input class="inputC" placeholder="Contraseña*" type="password" name="pwdUsu_c">
                    <label>¿Es Empresa? <input type="checkbox" name="esEmp_c"></label>
                    <label>¿Es Directivo? <input type="checkbox" name="esDir_c"></label>
                    <label>¿Es Administrador? <input type="checkbox" name="esAdm_c"></label>
                    <label>¿Es Huerta? <input type="checkbox" name="esHue_c" class="esHuertaCheckbox"></label>
                    <select class="formCombo idHuertaSelect" name="idH_c" style="display: none;">
                        <option value="">- - - Id de la Huerta - - -</option>
                        <?php
                        foreach ($huertas as $h) {

                            echo '<option value=' . $h["idHuerta"] . '>' . $h["idHuerta"] . ' - ' . $h["nombreHuerta"] . '</option>';
                        }
                        ?>
                    </select>
                    <label>¿Es Repartidor? <input type="checkbox" namephpmyadmin="esRep_c"></label>
                    <label>¿Es Informático? <input type="checkbox" name="esInf_c"></label>
                    <input class="formBtn clickable" type="submit" value="Enviar" name="createUsuario">

                </form>

                <form action="/Proyecto-Omnitus/php/POST/gestionUsuarios.php" method="post">
                    <h2>Actualizar Usuario</h2>

                    <select class="formCombo" name="nomUsu_u">
                        <option value="">- - - Nombre de usuario - - -</option>
                        <?php
                        foreach ($listaUsuarios as $u) {

                            echo '<option value=' . $u["nom"] . '>' . $u["nom"] . '</option>';
                        }
                        ?>
                    </select>
                    <select class="formCombo" name="idC_u">
                        <option value="">- - - Id del Cliente - - -</option>
                        <?php
                        foreach ($listaClientes as $c) {
                            echo '<option value=' . $c["idCliente"] . '>' . $c["idCliente"] . ' - ' . $c["nombreCliente"] . '</option>';
                        }
                        ?>
                    </select>
                    <input class="inputC" placeholder="Contraseña*" type="password" name="pwdUsu_u">
                    <label>¿Es Empresa? <input type="checkbox" name="esEmp_u"></label>
                    <label>¿Es Directivo? <input type="checkbox" name="esDir_u"></label>
                    <label>¿Es Administrador? <input type="checkbox" name="esAdm_u"></label>
                    <label>¿Es Huerta? <input type="checkbox" name="esHue_u" class="esHuertaCheckbox"></label>
                    <select class="formCombo idHuertaSelect" name="idH_u" style="display: none;">
                        <option value="">- - - Id de la Huerta - - -</option>
                        <?php

                        foreach ($huertas as $h) {
                            echo '<option value=' . $h["idHuerta"] . '>' . $h["idHuerta"] . ' - ' . $h["nombreHuerta"] . '</option>';
                        }
                        ?>
                    </select>
                    <label>¿Es Repartidor? <input type="checkbox" name="esRep_u"></label>
                    <label>¿Es Informático? <input type="checkbox" name="esInf_u"></label>


                    <input class="formBtn clickable" type="submit" value="Enviar" name="updateUsuario">

                </form>
                <h2>Eliminar Usuario</h2>
                <form action="/Proyecto-Omnitus/php/POST/gestionUsuarios.php" method="post">
                    <select class="formCombo" name="nomUsu_d">
                        <option value="">- - - Nombre de usuario - - -</option>
                        <?php
                        foreach ($listaUsuarios as $u) {

                            echo '<option value=' . $u["nom"] . '>' . $u["nom"] . '</option>';
                        }
                        ?>
                    </select>
                    <input class="formBtn clickable" type="submit" value="Enviar" name="deleteUsuario">
                </form>
            </section>
        </div>
    </div>
</div>
<script>
    const gestionUsuarios = () => {

        $('.esHuertaCheckbox').change(function() {
            if (this.checked) {
                $(".idHuertaSelect", this.form).fadeIn();
            } else {
                $(".idHuertaSelect", this.form).fadeOut();
            }
        });
    }
    $(document).ready(gestionUsuarios);
</script>
<script src="/Proyecto-Omnitus/js/script.js"></script>
<script src="/Proyecto-Omnitus/js/LogUsu.js"></script>