<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';

require($PATH . "php/db/db.php");
require_once($PATH . 'php/models/huerta_model.php');
require_once($PATH . 'php/models/table_model.php');

$table = new table_model();
$tableName = "Huerta";
$primaryKey = "idHuerta";
$huerta = new huerta_model();

if (isset($_POST['createHuerta'])) {
    $nomH = $_POST["nomH_c"];
    $tamH = $_POST["tamH_c"];

    if ($nomH != "") {
        $huerta->insertHuerta($nomH, $tamH);
        echo "<script>alert(\"Datos ingresados con éxito.\");window.location='../controllers/gestionHuerta_controller.php';</script>";
    } else {
        echo "<script>alert(\"Asegúrese de que los datos sean correctos.\");window.location='../controllers/gestionHuerta_controller.php';</script>";
        exit;
    }
}
if (isset($_POST['updateHuerta'])) {
    $idH = $_POST["idH_u"];
    $nomH = $_POST["nomH_u"];
    $tamH = $_POST["tamH_u"];

    if ($nomH != "") {
        $huerta->updateHuerta($idH, $nomH, $tamH);
        echo "<script>alert(\"Datos ingresados con éxito.\");window.location='../controllers/gestionHuerta_controller.php';</script>";
    } else {
        echo "<script>alert(\"Asegúrese de que los datos sean correctos.\");window.location='../controllers/gestionHuerta_controller.php';</script>";
        exit;
    }
}

if (isset($_POST['deleteHuerta'])) {

    $idH = $_POST["idH_d"];


    if ($idH != "") {
        $table->deleteValue($tableName, $primaryKey, $idH);
        echo "<script>alert(\"Datos eliminados con éxito.\");window.location='../controllers/gestionHuerta_controller.php';</script>";
    } else {
        echo "<script>alert(\"Asegúrese de que los datos sean correctos.\");window.location='../controllers/gestionHuerta_controller.php';</script>";
        exit;
    }
}
