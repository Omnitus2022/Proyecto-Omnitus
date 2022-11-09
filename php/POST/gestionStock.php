<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';
require($PATH . "php/db/db.php");
require_once($PATH . 'php/models/variedad_model.php');

$variedad = new variedad_model();

if (isset($_POST['stock'])) {
    $idV = $_POST["idV"];
    $vol = $_POST["vol"];

    if ($idV != "") {
        $stock->insertStock($idV, $vol);
        echo "<script>alert(\"Datos ingresados con éxito.\");window.location='../controllers/gestionHortalizas_controller.php';</script>";
    } else {
        echo "<script>alert(\"Asegúrese de que los datos sean correctos.\");window.location='../controllers/gestionHortalizas_controller.php';</script>";
        exit;
    }
}
