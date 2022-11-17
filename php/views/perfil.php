<?php
include($PATH . 'php/header.php');
?>


<div class="main-wrapper" style="transform: scale(1); padding-top: 44.8px;">
    <div class="main-wrapper_container">
        <div class="container__content">
            <form action="/Proyecto-Omnitus/php/POST/actualizarPerfil.php" method="post">
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

                <dialog class="modal confirmarCambios">

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
            <label><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M504.9,395.756c-28.684,0-52.02,23.342-52.02,52.02c0,28.684,23.336,52.02,52.02,52.02c28.678,0,52.02-23.336,52.02-52.02
			C556.92,419.098,533.578,395.756,504.9,395.756z M504.9,463.076c-8.439,0-15.3-6.861-15.3-15.3c0-8.439,6.861-15.3,15.3-15.3
			s15.3,6.861,15.3,15.3C520.2,456.215,513.339,463.076,504.9,463.076z" />
                            <path d="M499.918,179.518H410.04c-6.763,0-12.24,5.484-12.24,12.24v238.68c0,6.756,5.477,12.24,12.24,12.24h12.981
			c6.059,0,11.426-4.364,12.209-10.373c4.804-36.806,34.162-59.633,69.676-59.633s64.872,22.828,69.676,59.633
			c0.783,6.01,6.144,10.373,12.209,10.373h12.968c6.756,0,12.24-5.484,12.24-12.24v-119.34c0-2.876-1.01-5.655-2.852-7.852
			l-99.842-119.34C506.981,181.128,503.541,179.518,499.918,179.518z M422.28,277.438v-61.2c0-6.756,5.477-12.24,12.24-12.24h53.917
			c3.629,0,7.075,1.616,9.4,4.406l50.998,61.2c6.64,7.974,0.973,20.074-9.406,20.074H434.52
			C427.757,289.678,422.28,284.201,422.28,277.438z" />
                            <path d="M12.24,442.684h31.341c6.059,0,11.426-4.364,12.209-10.373c4.804-36.806,34.162-59.633,69.676-59.633
			s64.872,22.828,69.676,59.633c0.783,6.01,6.144,10.373,12.209,10.373H361.08c6.757,0,12.24-5.484,12.24-12.24v-306
			c0-6.756-5.484-12.24-12.24-12.24H12.24c-6.763,0-12.24,5.484-12.24,12.24v306C0,437.201,5.477,442.684,12.24,442.684z" />
                            <path d="M125.46,395.756c-28.684,0-52.02,23.342-52.02,52.02c0,28.684,23.336,52.02,52.02,52.02
			c28.678,0,52.02-23.336,52.02-52.02C177.48,419.098,154.138,395.756,125.46,395.756z M125.46,463.076
			c-8.439,0-15.3-6.861-15.3-15.3c0-8.439,6.861-15.3,15.3-15.3s15.3,6.861,15.3,15.3
			C140.76,456.215,133.899,463.076,125.46,463.076z" />
                        </g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                </svg>
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