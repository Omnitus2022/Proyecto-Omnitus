<?php

if (!isset($_SESSION)) {
    session_start();
}
echo '<h2>Variedades a cultivar</h2>
<div>
';
foreach ($_SESSION["variedadesCultivo"] as $var) {
    echo '
    <li style="display:flex;justify-content: space-between; ">
<p>' . $var["nombre"]  . '</p>
<p>Cantidad a plantar: ' . $var["cantidadPlantada"] . $var["unidad"] . '</p>
<p>Meta de la cosecha: ' . $var["metaCantidad"] . $var["unidad"] . '</p>
</li>
';
}
echo '</div>';
