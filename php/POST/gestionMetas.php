<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';
require_once($PATH . 'php/views/empty.php');

require($PATH . "php/db/db.php");
require_once($PATH . 'php/models/huerta_model.php');
if (!isset($_SESSION)) {
    session_start();
}

$huerta = new huerta_model();

if (isset($_POST['actualizarMeta'])) {
    $idHuerta = $_POST["idHuerta_u"];
    $metaAnual = $_POST["metaAnual_u"];


    if ($idHuerta != "" && $metaAnual != "") {
        $huerta->updateMeta($idHuerta, $metaAnual);
        echo "<script>alert(\"Meta anual actualizada con éxito.\");window.location='../controllers/gestionMetas_controller.php';</script>";
    } else {
        echo "<script>alert(\"Asegúrese de que los datos sean correctos.\");window.location='../controllers/gestionMetas_controller.php';</script>";
        exit;
    }
}
