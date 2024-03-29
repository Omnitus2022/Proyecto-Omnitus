<!--    MODAL LOGIN REGISTRO    -->

<dialog class="modal">

    <!--    REGISTRO    -->

    <svg class="close_modal clickable" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
        <path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z" />
    </svg>


    <div class="registro">
        <h1 class="title_modal">Registro</h1>
        <form action="/Proyecto-Omnitus/php/POST/registro.php" method="post" class="form_log">
            <input type="text" name="nom" class="log-input" placeholder="Nombre de usuario">

            <input type="password" name="pwd" class="log-input" placeholder="Contraseña">
            <input type="password" name="pwdVerif" class="log-input" placeholder="Repetir contraseña">
            <input type="text" name="email" class="log-input" placeholder="Email">
            <span>
                ¿Es empresa? <input type="checkbox" name="esEmpresa" class="log-input input-checkbox" value="1">
            </span>
            <input type="text" name="nombre" class="log-input input-reg-nomCliente" placeholder="Nombre del cliente">

            <input type="text" name="apellido" class="log-input input-reg-apellido" placeholder="Apellido">
            <input type="text" name="CI" class="log-input input-reg-cedula" placeholder="Cédula">

            <input type="text" name="RUT" class="log-input input-reg-rut" style="display:none;" placeholder="RUT">
            <span>Dirección
                <input type="text" name="calle" class="log-input" placeholder="Calle">
                <input type="text" name="esquina" class="log-input" placeholder="Esquina">
                <input type="text" name="numeroPuerta" class="log-input" placeholder="Número de puerta">
            </span>

            <label>
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="434.002px" height="434.002px" viewBox="0 0 434.002 434.002" style="enable-background:new 0 0 434.002 434.002;" xml:space="preserve">
                    <title>Enviar</title>
                    <g>
                        <g>
                            <path d="M95.457,434.002l-33.105-45.076l234.094-171.928L62.352,45.077L95.456,0L360.24,194.459
                c7.174,5.269,11.41,13.638,11.41,22.539c0,8.9-4.236,17.27-11.41,22.538L95.457,434.002z" />
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
                <input type="submit" name="registro" class="env-reg">
            </label>

        </form>
    </div>


    <!--    LOGIN    -->

    <div class="login">
        <h1 class="title_modal">Login</h1>
        <form action="/Proyecto-Omnitus/php/POST/login.php" method="post" class="form_log">

            <input type="text" name="usu" class="log-input" placeholder="Nombre usuario">

            <input type="password" name="pwd" class="log-input" placeholder="Contraseña">

            <label>

                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="434.002px" height="434.002px" viewBox="0 0 434.002 434.002" style="enable-background:new 0 0 434.002 434.002;" xml:space="preserve">
                    <title>Enviar</title>
                    <g>
                        <g>
                            <path d="M95.457,434.002l-33.105-45.076l234.094-171.928L62.352,45.077L95.456,0L360.24,194.459
              c7.174,5.269,11.41,13.638,11.41,22.539c0,8.9-4.236,17.27-11.41,22.538L95.457,434.002z" />
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
                <input type="submit" name="login" class="env-log ">
            </label>

        </form>
    </div>

    <h3 class="title_modal"><a href="#" class="btn-log clickable">LOGIN</a> <a href="#" class="btn-registro clickable">REGISTRO</a></h3>

</dialog>

<script>
    const loginModal = () => {

        $(".input-checkbox").click(function(event) {
            $(".input-reg-apellido").toggle();
            $(".input-reg-rut").toggle();
            $(".input-reg-cedula").toggle();
            if (this.checked) {
                $(".input-reg-nomCliente").attr("placeholder", "Nombre de la empresa");
            } else {
                $(".input-reg-nomCliente").attr("placeholder", "Nombre del cliente");
            }
        });

    }
    $(document).ready(loginModal);
</script>