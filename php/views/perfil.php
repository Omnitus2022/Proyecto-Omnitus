<?php
include($PATH . 'php/header.php');
?>


<div class="main-wrapper" style="transform: scale(1); padding-top: 44.8px;">
    <div class="main-wrapper_container">
        <div class="container__content">
            <form style="display:flex; flex-direction:column; gap:.5rem;" action="/Proyecto-Omnitus/php/POST/actualizarPerfil.php" method="post">
                <h2>Datos</h2>
                <label>Nombre de usuario: <input class="inputC" placeholder="Nombre" type="text" value="<?php echo $_SESSION['usu'] ?> " readonly>
                </label>
                <label>Email: <input class="inputC" placeholder="Nombre" type="text" name="email" value="<?php echo $cli['email'] ?>">
                </label>
                <?php
                if (!$_SESSION["esEmpresa"]) {
                    echo '                <label>Cédula de Identidad: <input class="inputC" placeholder="Nombre" type="text" name="cedula" value="' . $cW["CI"] . '">
                    </label>
                    <label>Nombre: <input class="inputC" placeholder="Nombre" type="text" name="nombre" value="' . $cW["nombre"] . '">
                    </label>
                    <label>Apellido: <input class="inputC" placeholder="Nombre" type="text" name="apellido" value="' . $cW["apellido"] . '">
                    </label>';
                } else {
                    echo '                <label>RUT: <input class="inputC" placeholder="Nombre" type="text" name="rut" value="' . $cE["RUT"] . '">
                    </label>
                    <label>Nombre de la empresa: <input class="inputC" placeholder="Nombre" type="text" name="nombreEmpresa" value="' . $cE["nombreEmpresa"] . '">
                    </label>';
                }
                ?>
                <h2>Dirección</h2>
                <label>Calle: <input class="inputC" placeholder="Nombre" type="text" name="calle" value="<?php echo $cli['calle'] ?>">
                </label>
                <label>Esquina: <input class="inputC" placeholder="Nombre" type="text" name="esq" value="<?php echo $cli['esquina'] ?>">
                </label>
                <label>Número de puerta: <input class="inputC" placeholder="Nombre" type="text" name="puerta" value="<?php echo $cli['numeroPuerta'] ?>">
                </label>

                <dialog class="modal confirmarCambios" style="color: white;">

                    <svg class="close_modal clickable" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z" />
                    </svg>
                    <h2>Ingrese su contraseña para confirmar los cambios</h2>

                    <input type="password" name="pwd_verif" class="log-input" placeholder="Contraseña">

                    <input class="formBtn clickable" type="submit" value="Confirmar" name="actualizarPerfil">
                </dialog>


            </form>
            <button class="actualizarPerfil formBtn clickable">Actualizar perfil</button>
            <form action="/Proyecto-Omnitus/php/POST/actualizarPerfil.php" method="post">
                <h2>Actualizar contraseña</h2>
                <input type="password" name="pwd_verif_u" class="log-input" placeholder="Contraseña actual">
                <input type="password" name="pwd" class="log-input" placeholder="Nueva contraseña">
                <input type="password" name="pwdConf" class="log-input" placeholder="Confirmar contraseña">
                Las contraseñas deben tener almenos cuatro dígitos*
                <input class="formBtn clickable" type="submit" value="Confirmar" name="actualizarContraseña">

            </form>
            <label>
                <a href="/Proyecto-Omnitus/php/controllers/verPedidos_controller.php">Ver mis pedidos</a></label>
        </div>
    </div>
</div>

<script>
    const perfil = () => {
        $(".actualizarPerfil").click(function() {
            document.querySelector(".confirmarCambios").showModal();
        })
        $(".confirmarCambios .close_modal").click(function() {
            document.querySelector(".confirmarCambios").close();
        });
    }
    $(document).ready(perfil);
</script>
<script src="/Proyecto-Omnitus/js/script.js"></script>
<script src="/Proyecto-Omnitus/js/LogUsu.js"></script>
<?php
include($PATH . 'php/footer.php');
?>