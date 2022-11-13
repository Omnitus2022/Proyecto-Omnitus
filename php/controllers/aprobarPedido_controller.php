<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';
$TITLE = "Aprobar pedidos";
require_once($PATH . 'php/db/db.php');
require_once($PATH . 'php/models/pedido_model.php');

if (!isset($_SESSION)) {
    session_start();
}

$pedido = new pedido_model();
$listaPendientes = $pedido->pendientes();

require_once($PATH . 'php/views/aprobarPedido.php');
