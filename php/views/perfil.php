<?php
include($PATH . 'php/header.php');
?>


<div class="main-wrapper" style="transform: scale(1); padding-top: 44.8px;">
    <div class="main-wrapper_container">
        <div class="container__content">
            <form action="/Proyecto-Omnitus/php/POST/perfil.php" method="post">
                <h2>Datos</h2>
                <label>Nombre de usuario: <input class="inputC" placeholder="Nombre" type="text" name="nomUsu" value="<?php echo $_SESSION['usu'] ?>">
                </label>
                <label>Email: <input class="inputC" placeholder="Nombre" type="text" name="nomUsu" value="<?php echo $cli['email'] ?>">
                </label>
                <!-- FALTA TESTING SI ES EMPRESA -->
                <!-- SE PUEDE ELIMINAR EL MÉTODO esEmpresa UTILIZANDO LA INSTANCIA EN perfil_controller -->
                <?php
                if (is_null($cliente->esEmpresa($cli['idCliente']))) {
                    echo '                <label>Cédula de Identidad: <input class="inputC" placeholder="Nombre" type="text" name="nomUsu" value="' . $cW["CI"] . '">
                    </label>
                    <label>Nombre: <input class="inputC" placeholder="Nombre" type="text" name="nomUsu" value="' . $cW["nombre"] . '">
                    </label>
                    <label>Apellido: <input class="inputC" placeholder="Nombre" type="text" name="nomUsu" value="' . $cW["apellido"] . '">
                    </label>';
                } else {
                    echo '                <label>RUT: <input class="inputC" placeholder="Nombre" type="text" name="nomUsu" value="' . $cE["RUT"] . '">
                    </label>
                    <label>Nombre de la empresa: <input class="inputC" placeholder="Nombre" type="text" name="nomUsu" value="' . $cE["nombreEmpresa"] . '">
                    </label>';
                }
                ?>
                <h2>Dirección</h2>
                <label>Calle: <input class="inputC" placeholder="Nombre" type="text" name="nomUsu" value="<?php echo $cli['calle'] ?>">
                </label>
                <label>Esquina: <input class="inputC" placeholder="Nombre" type="text" name="nomUsu" value="<?php echo $cli['esquina'] ?>">
                </label>
                <label>Número de puerta: <input class="inputC" placeholder="Nombre" type="text" name="nomUsu" value="<?php echo $cli['numeroPuerta'] ?>">
                </label>




            </form>
        </div>
    </div>
</div>

<script src="/Proyecto-Omnitus/js/script.js"></script>
<script src="/Proyecto-Omnitus/js/LogUsu.js"></script>
<?php
include($PATH . 'php/footer.php');
?>