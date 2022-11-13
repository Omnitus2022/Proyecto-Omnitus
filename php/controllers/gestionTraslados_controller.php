<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';
$TITLE = "Gestión de traslados";
require_once($PATH . 'php/db/db.php');
require_once($PATH . 'php/models/traslado_model.php');
require_once($PATH . 'php/models/usuario_model.php');
require_once($PATH . 'php/models/pedido_model.php');
require_once($PATH . 'php/models/cliente_model.php');

if (!isset($_SESSION)) {
    session_start();
}

$traslado = new traslado_model();
$usuario = new usuario_model();
$pedido = new pedido_model();
$cliente = new cliente_model();
$listaTraslados = $traslado->listarTraslados();
$listaPedidosSinTraslado = $pedido->listarPedidosSinTraslasdo();
$listaRepartidores = $usuario->listarRepartidores();
require_once($PATH . 'php/views/gestionTraslados.php');
