<?php include($PATH . '/php/header.php');

if (empty($_SESSION['usu'])) {
    echo "<script>window.location='/Proyecto-Omnitus/index.php';</script>";
}
?>


<div class="main-wrapper" style="transform: scale(1); padding-top: 44.8px;">
    <div class="main-wrapper_container">
        <div class="container__content gestionForm">
            <form action="/Proyecto-Omnitus/php/POST/gestionCosechas.php" method="post">
                <section>
                    <div style="display:flex; flex-direction:column; gap: .5rem;">
                        <h2>Registrar cosecha</h2>

                        <select class="formCombo select-variedad-gestionCosechas">
                            <option value="">- - - Hortaliza a cosechar - - -</option>
                            <?php
                            foreach ($listaVariedades as $var) {

                                echo '<option nombre="' . $var["nombre"] . '" unidad="' . $var["unidad"] . '" value=' . $var["idVariedad"] . '>' . $var["idVariedad"] . ' (' . $variedad::limpiarNombre($var["nombre"]) . ')</option>';
                            }
                            ?>
                        </select>
                        <input class="inputC input-cantidadCosechada-gestionCosechas" placeholder="Cantidad cosechada - KG / U" type="text">
                        <input class="formBtn clickable button-variedad-gestionCosechas" type="button" value="Añadir hortaliza">

                    </div>
                    <div class="variedadesCosecha">
                        <!-- LISTA CON LAS VARIEDADES AGREGADAS AL CULTIVO -->
                    </div>

                </section>
                <input class="formBtn clickable" type="submit" value="Registrar cosecha" name="crearCosecha">

            </form>

        </div>

    </div>
</div>
<script>
    const gestionCosechas = () => {
        $(".variedadesCosecha").load("../models/variedadesCosecha.php");
        $(".button-variedad-gestionCosechas").click(function() {
            let id = $(".select-variedad-gestionCosechas").val();
            let nombre = $(".select-variedad-gestionCosechas")[0][$(".select-variedad-gestionCosechas")[0].options.selectedIndex].getAttribute("nombre");
            let unidad = $(".select-variedad-gestionCosechas")[0][$(".select-variedad-gestionCosechas")[0].options.selectedIndex].getAttribute("unidad");
            let cantidadCosecha = $(".input-cantidadCosechada-gestionCosechas").val();
            if (id != "" && cantidadCosecha != 0) {
                $(".variedadesCosecha").load("../models/agregarVariedadCosecha.php", {
                    id: id,
                    nombre: nombre,
                    unidad: unidad,
                    cantidadCosecha: cantidadCosecha
                });
            }
        });
    }
    $(document).ready(gestionCosechas);
</script>
<script src="/Proyecto-Omnitus/js/script.js"></script>
<script src="/Proyecto-Omnitus/js/LogUsu.js"></script>