<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';
require($PATH . "php/db/db.php");
require_once($PATH . 'php/models/variedad_model.php');
require_once($PATH . 'php/models/huerta_model.php');

$variedad = new variedad_model();
$huerta = new huerta_model();

if (isset($_POST['crearCultivo'])) {
    $cantidadPlantada = $_POST["cantidadPlantada"];
    $metaCantidad = $_POST["metaCantidad"];

    if ($cantidadPlantada != "" && $metaCantidad != "") {
        $idCultivo = uniqid("C_");
        foreach ($_SESSION["variedadesCultivo"] as $var) {
            
            $huerta->insertVariedadCultivo($idCultivo, $id)
        }
        $huerta->
        echo "<script>alert(\"Datos ingresados con éxito.\");window.location='../controllers/gestionHortalizas_controller.php';</script>";
    } else {
        echo "<script>alert(\"Asegúrese de que los datos sean correctos.\");window.location='../controllers/gestionHortalizas_controller.php';</script>";
        exit;
    }
}
