<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';
$TITLE = "Ver pedidos";
require_once($PATH . 'php/db/db.php');
require_once($PATH . 'php/models/pedido_model.php');
require_once($PATH . 'php/models/cliente_model.php');

if (!isset($_SESSION)) {
    session_start();
}


$pedido = new pedido_model();
$cliente = new cliente_model();
$cli = $cliente->getOneCliente($_SESSION['idClienteAsociado']);

$clientePedidos = $pedido->listarPedidosCliente($cli["idCliente"]);

require_once($PATH . 'php/views/verPedidos.php');
