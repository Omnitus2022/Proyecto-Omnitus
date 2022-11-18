<?php
if (!isset($_SESSION)) {
    session_start();
}
$_SESSION["products"][substr($_POST["id"], 1)] = [
    "id" => substr($_POST["id"], 1),
    "nombre" => $_POST["nombre"],
    "cantidad" => $_POST["cantidad"],
    "precio" => $_POST["precio"],
];
include("./carrito.php");