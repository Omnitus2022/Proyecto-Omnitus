<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';
require_once($PATH . 'php/db/db.php');
require_once($PATH . 'php/models/pedido_model.php');
require_once($PATH . 'php/models/variedad_model.php');
require_once($PATH . 'php/models/hortaliza_model.php');

$pedido = new pedido_model();
$hortaliza = new hortaliza_model();
$variedad = new variedad_model();
$ped = $pedido->getOnePedido($_POST["numP"]);
$productos = $pedido->listarVariedades($ped["numPedido"]);
$estado = $pedido->ultimoEstado($ped["numPedido"]);
$repartidor = $pedido->getRepartidor($ped["numPedido"]);

if (!isset($_SESSION)) {
    session_start();
}

echo '
<h3 class="pedidoInf-num">
' . $ped["numPedido"] . '
</h3>
<p class="pedidoInf-cont--estado">Estado del pedido: ' .
    $estado
    . '</p>
<ul class="pedidoInf-cont--productos">
';
echo '<h3>Productos:</h3>';
// DATOS PRODUCTO
foreach ($productos as $prod) {
    $v = $variedad->getVariedad($prod["idVariedad"]);
    $unidad = "KG";
    if ($v["unidad"]) {
        $unidad = "U";
    }


    echo '<li>';
    echo '<p class="nombre">';
    echo $v["nombre"];
    echo '</p>';
    echo '<p class="cantidad">';
    echo $prod["cantidad"] . $unidad;
    echo '</p>';
    echo '<p class="precio">$ ';
    echo $prod["cantidad"] * $v["precio"];
    echo '</p>';
    echo '</li>';
}

echo '
</ul>
<div>
<p class="label">Método de Pago:</p>
<p class="pedidoInf-cont--metodo">' .
    $ped["metodoPago"]
    . '</p>
</div>
<div>
<p class="label">Pedido realizado el:</p>
<p class="pedidoInf-cont--fecha">' .
    $ped["fechaPedido"]
    . '</p>
</div>
<div>
<p class="label">Pedido entregado el:</p>
<p class="pedidoInf-cont--fecha">' .
    $ped["fechaEntrega"]
    . '</p>
</div>

<p class="pedidoInf-cont--hora">Horas de entrega: ' . $ped["horaPrefInicio"] . ' - ' . $ped["horaPrefFinal"] . '</p>
<p class="pedidoInf-cont--repartidor">Repartidor encargado: ' . $repartidor . '</p>
<h3 class="pedidoInf-cont--total">$ 
' . $ped["importe"]  . '
</h3>';
