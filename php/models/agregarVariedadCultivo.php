<?php

if (!isset($_SESSION)) {
    session_start();
}
$unidad = "KG";
if ($_POST["unidad"]) {
    $unidad = "U";
}
if (!empty($_POST["cantidadPlantada"]) && !empty($_POST["metaCantidad"])) {
    $_SESSION["variedadesCultivo"][$_POST["id"]] = [
        "id" => $_POST["id"],
        "nombre" => $_POST["nombre"],
        "unidad" => $unidad,
        "cantidadPlantada" => $_POST["cantidadPlantada"],
        "metaCantidad" => $_POST["metaCantidad"]
    ];
}
include("./variedadesCultivo.php");
