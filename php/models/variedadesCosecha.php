<?php

if (!isset($_SESSION)) {
    session_start();
}
echo '<h2>Variedades a cosechar</h2>
<div>
';
foreach ($_SESSION["variedadesCosecha"] as $var) {
    echo '
    <li style="display:flex;justify-content: space-between; ">
<p>' . $var["nombre"]  . '</p>
<p>Cantidad cosechada: ' . $var["cantidadCosecha"] . $var["unidad"] . '</p>
</li>
';
}
echo '</div>';
