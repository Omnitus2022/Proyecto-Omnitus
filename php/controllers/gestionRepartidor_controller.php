<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';
$TITLE = "Gestión de traslados";
require_once($PATH . 'php/db/db.php');
require_once($PATH . 'php/models/traslado_model.php');
require_once($PATH . 'php/models/pedido_model.php');

if (!isset($_SESSION)) {
    session_start();
}

$traslado = new traslado_model();
$pedido = new pedido_model();
$listaTraslados = $traslado->listarTraslados();
$listaEnRuta = $pedido->listarEnRuta();
$listaPedidos = $pedido->listarPedidosRepartidor($_SESSION["usu"]);

require_once($PATH . 'php/views/gestionRepartidor.php');
