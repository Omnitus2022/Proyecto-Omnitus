<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';

require_once($PATH . 'php/db/db.php');
require_once($PATH . 'php/models/pedido_model.php');

if (!isset($_SESSION)) {
    session_start();
}

$pedido = new pedido_model();

if (isset($_POST["aprobarPedido"]) && $_POST["numPedido"] != "") {
    $numPedido = $_POST["numPedido"];
    $pedido->aprobar($numPedido);
    echo "<script>alert(\"Pedido aprobado.\");window.location='../controllers/aprobarPedido_controller.php';</script>";
} else {
    echo "<script>alert(\"Asegúrese de seleccionar un pedido.\");window.location='../controllers/aprobarPedido_controller.php';</script>";
}
