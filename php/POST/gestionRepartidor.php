<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';
require($PATH . "php/db/db.php");
require_once($PATH . 'php/models/traslado_model.php');
require_once($PATH . 'php/models/pedido_model.php');

if (!isset($_SESSION)) {
    session_start();
}

$traslado = new traslado_model();
$pedido = new pedido_model();


if (isset($_POST['estadoRuta'])) {
    $idTraslado = $_POST["idTraslado_r"];


    if ($idTraslado != "") {
        foreach ($traslado->listarPedidos($idTraslado) as $ped) {
            $pedido->ruta($ped["numPedido"]);
        }
        $traslado->setEstado($idTraslado, 'Ruta');

        echo "<script>alert(\"Estado actualizado con éxito.\");window.location='../controllers/gestionRepartidor_controller.php';</script>";
    } else {
        echo "<script>alert(\"Asegúrese de seleccionar un traslado.\");window.location='../controllers/gestionRepartidor_controller.php';</script>";
        exit;
    }
}
if (isset($_POST['entregarPedido'])) {
    $numPedido = $_POST["numPedido"];
    $recibidor = $_POST["recibidor"];


    if ($numPedido != "" && $recibidor != "" && $recibidor != " ") {
        $pedido->entregar($numPedido, $recibidor);

        echo "<script>alert(\"Pedido entregado.\");window.location='../controllers/gestionRepartidor_controller.php';</script>";
    } else {
        echo "<script>alert(\"Asegúrese de ingresar los datos.\");window.location='../controllers/gestionRepartidor_controller.php';</script>";
        exit;
    }
}
