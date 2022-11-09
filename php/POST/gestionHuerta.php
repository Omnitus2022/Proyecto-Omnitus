<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';
require($PATH . "php/db/db.php");
require_once($PATH . 'php/models/huerta_model.php');


$huerta = new huerta_model();

if (isset($_POST['huerta'])) {
    $nomH = $_POST["nomH"];
    $tamH = $_POST["tamH"];
    $metaC = $_POST["metaC"];

    if ($nomH != "") {
        $huerta->insertHuerta($nomH, $tamH, $metaC);
        echo "<script>alert(\"Datos ingresados con éxito.\");window.location='../controllers/gestionHortalizas_controller.php';</script>";
    } else {
        echo "<script>alert(\"Asegúrese de que los datos sean correctos.\");window.location='../controllers/gestionHortalizas_controller.php';</script>";
        exit;
    }
}
