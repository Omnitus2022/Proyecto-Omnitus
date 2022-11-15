<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';
require_once($PATH . 'php/views/empty.php');

require($PATH . "php/db/db.php");
require_once($PATH . 'php/models/variedad_model.php');
require_once($PATH . 'php/models/huerta_model.php');
if (!isset($_SESSION)) {
    session_start();
}

$variedad = new variedad_model();
$huerta = new huerta_model();

if (isset($_POST['crearCosecha'])) {
    if (!empty($_SESSION["variedadesCosecha"])) {
        $idCosecha = uniqid("COS_");
        foreach ($_SESSION["variedadesCosecha"] as $var) {
            $huerta->insertVariedadCosecha($idCosecha, $_SESSION["idHuertaAsociada"], $var["id"], $var["cantidadCosecha"]);
        }
        echo "<script>alert(\"Cosecha registrada con éxito.\");window.location='../controllers/gestionCosechas_controller.php';</script>";
    } else {
        echo "<script>alert(\"Asegúrese de que los datos sean correctos.\");window.location='../controllers/gestionCosechas_controller.php';</script>";
        exit;
    }
}
