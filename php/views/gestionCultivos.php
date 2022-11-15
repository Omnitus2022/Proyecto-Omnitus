<?php include($PATH . '/php/header.php');

if (empty($_SESSION['usu'])) {
    echo "<script>window.location='/Proyecto-Omnitus/index.php';</script>";
}
?>


<div class="main-wrapper" style="transform: scale(1); padding-top: 44.8px;">
    <div class="main-wrapper_container">
        <div class="container__content gestionForm">
            <form action="/Proyecto-Omnitus/php/POST/gestionCultivos.php" method="post">
                <section>
                    <div style="display:flex; flex-direction:column; gap: .5rem;">
                        <h2>Insertar cultivo</h2>

                        <select class="formCombo select-variedad-gestionCultivos">
                            <option value="">- - - Verdura a cultivar - - -</option>
                            <?php
                            foreach ($listaVariedades as $var) {

                                echo '<option nombre="' . $var["nombre"] . '" unidad="' . $var["unidad"] . '" value=' . $var["idVariedad"] . '>' . $var["idVariedad"] . ' (' . $variedad::limpiarNombre($var["nombre"]) . ')</option>';
                            }
                            ?>
                        </select>
                        <input class="inputC input-cantidadPlantada-gestionCultivos" placeholder="Cantidad plantada - KG / U" type="text" name="cantidadPlantada_c">
                        <input class="inputC input-cantidadMeta-gestionCultivos" placeholder="Meta de la cosecha (cantidad) - KG / U" type="text" name="metaCosecha_c">
                        <input class="formBtn clickable button-variedad-gestionCultivos" type="button" value="Añadir hortaliza">

                    </div>
                    <div class="variedadesCultivo">
                        <!-- LISTA CON LAS VARIEDADES AGREGADAS AL CULTIVO -->
                    </div>

                </section>
                <input class="formBtn clickable" type="submit" value="Añadir cultivo" name="crearCultivo">

            </form>

        </div>

    </div>
</div>
<script>
    const gestionCultivos = () => {
        $(".variedadesCultivo").load("../models/variedadesCultivo.php");
        $(".button-variedad-gestionCultivos").click(function() {
            let id = $(".select-variedad-gestionCultivos").val();
            let nombre = $(".select-variedad-gestionCultivos")[0][$(".select-variedad-gestionCultivos")[0].options.selectedIndex].getAttribute("nombre");
            let unidad = $(".select-variedad-gestionCultivos")[0][$(".select-variedad-gestionCultivos")[0].options.selectedIndex].getAttribute("unidad");
            let cantidadPlantada = $(".input-cantidadPlantada-gestionCultivos").val();

            let metaCantidad = $(".input-cantidadMeta-gestionCultivos").val();
            if (id != "" && cantidadPlantada != 0 && metaCantidad != 0) {
                $(".variedadesCultivo").load("../models/agregarVariedadCultivo.php", {
                    id: id,
                    nombre: nombre,
                    unidad: unidad,
                    cantidadPlantada: cantidadPlantada,
                    metaCantidad: metaCantidad,
                });
            }
        });
    }
    $(document).ready(gestionCultivos);
</script>
<script src="/Proyecto-Omnitus/js/script.js"></script>
<script src="/Proyecto-Omnitus/js/LogUsu.js"></script>
<?php include($PATH . '/php/footer.php') ?>