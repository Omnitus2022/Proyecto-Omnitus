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

if (isset($_POST['crearCultivo'])) {
    if (!empty($_SESSION["variedadesCultivo"])) {
        $idCultivo = uniqid("CUL_");
        foreach ($_SESSION["variedadesCultivo"] as $var) {
            $huerta->insertVariedadCultivo($idCultivo, $_SESSION["idHuertaAsociada"], $var["id"], $var["cantidadPlantada"], $var["metaCantidad"]);
        }
        echo "<script>alert(\"Cultivo registrado con éxito.\");window.location='../controllers/gestionCultivos_controller.php';</script>";
    } else {
        echo "<script>alert(\"Asegúrese de que los datos sean correctos.\");window.location='../controllers/gestionCultivos_controller.php';</script>";
        exit;
    }
}
