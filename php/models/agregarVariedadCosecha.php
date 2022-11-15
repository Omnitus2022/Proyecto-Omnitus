<?php

if (!isset($_SESSION)) {
    session_start();
}
$unidad = "KG";
if ($_POST["unidad"]) {
    $unidad = "U";
}
if (!empty($_POST["cantidadCosecha"])) {
    $_SESSION["variedadesCosecha"][$_POST["id"]] = [
        "id" => $_POST["id"],
        "nombre" => $_POST["nombre"],
        "unidad" => $unidad,
        "cantidadCosecha" => $_POST["cantidadCosecha"]
    ];
}
include("./variedadesCosecha.php");
