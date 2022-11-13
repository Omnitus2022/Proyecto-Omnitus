<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';
require($PATH . "php/db/db.php");
require_once($PATH . 'php/models/traslado_model.php');

$traslado = new traslado_model();

if (isset($_POST['iniciarTraslado'])) {
    $repartidor = $_POST["repartidor"];

    if ($repartidor != "") {
        $traslado->insertTraslado($repartidor);
        echo "<script>alert(\"Traslado generado con éxito.\");window.location='../controllers/gestionTraslados_controller.php';</script>";
    } else {
        echo "<script>alert(\"Asegúrese de seleccionar un repartidor.\");window.location='../controllers/gestionTraslados_controller.php';</script>";
        exit;
    }
}
if (isset($_POST['asignarPedido'])) {
    $numPedido = $_POST["numPedido"];
    $idTraslado = $_POST["idTraslado"];
    if ($idTraslado != "" && $numPedido != "") {
        $traslado->asignarPedido($idTraslado, $numPedido);
        echo "<script>alert(\"Pedido asignado con éxito.\");window.location='../controllers/gestionTraslados_controller.php';</script>";
    } else {
        echo "<script>alert(\"Asegúrese de seleccionar un traslado y un pedido.\");window.location='../controllers/gestionTraslados_controller.php';</script>";
    }
}
