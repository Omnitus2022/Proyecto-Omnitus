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


if (!isset($_SESSION)) {
    session_start();
}

echo '
<h3 class="pedidoInf-num">
' . $ped["numPedido"] . '
</h3>
<p class="pedidoInf-cont--estado">Lorem</p>
<ul class="pedidoInf-cont--productos">
';
// DATOS PRODUCTO
foreach ($productos as $prod) {
    $v = $variedad->getVariedad($prod["idVariedad"])[0];
    $h = $hortaliza->getHortaliza($v["idHortaliza"])[0];

    echo '<li>';
    echo '<p class="nombreHortaliza">';
    echo $h["nombre"];
    echo ' ';
    echo $v["nombreVariedad"];
    echo '</p>';
    echo '<p class="cantidad">';
    echo '';
    echo '</p>';
    echo '<p class="precio">';
    echo '';
    echo '</p>';
    echo '</li>';
}

echo '
</ul>
<p class="pedidoInf-cont--metodo">Lorem</p>
<p class="pedidoInf-cont--fecha">Lorem</p>
<p class="pedidoInf-cont--fecha">Lorem</p>
<p class="pedidoInf-cont--hora">Lorem</p>
<p class="pedidoInf-cont--hora">Lorem</p>
<p class="pedidoInf-cont--repartidor">Lorem</p>
<h3 class="pedidoInf-cont--total">$ 
' . $ped["importe"]  . '
</h3>';
