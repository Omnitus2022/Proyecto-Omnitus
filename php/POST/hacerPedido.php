<?php

$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';
require($PATH . "php/db/db.php");
require($PATH . "php/models/pedido_model.php");
require($PATH . "php/models/stock_model.php");

$pedido = new pedido_model();
$stock = new stock_model();

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_POST["hacerPedido"])) {
    $numPedido = uniqid("P_");
    $idCliente = $_SESSION["idClienteAsociado"];
    $importe = $_SESSION["importeTotal"];
    $metodoPago = $_POST["metodoPago"];
    $fechaPedido = date('Y-m-d');
    $horaPrefInicio = $_POST["horaPrefInicio"];
    $horaPrefFinal = $_POST["horaPrefFinal"];

    $pedido->insertPedido($numPedido, $idCliente, "", $importe, $metodoPago, $fechaPedido, "", $horaPrefInicio, $horaPrefFinal, "");
    foreach ($_SESSION["products"] as $variedad) {
        $stockLim = $stock->getOneStock($variedad["id"]);
        $stock->bajarStock($variedad["id"], $variedad["cantidad"], $stockLim);
        $pedido->insertVariedad($numPedido, $variedad["id"], $variedad["cantidad"]);
    }
}