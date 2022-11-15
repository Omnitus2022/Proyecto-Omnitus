<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';
$TITLE = "Gestión de cosechas";
require_once($PATH . 'php/db/db.php');
require_once($PATH . 'php/models/huerta_model.php');
require_once($PATH . 'php/models/variedad_model.php');
if (!isset($_SESSION)) {
    session_start();
}
$_SESSION["variedadesCosecha"] = [];
$huerta = new huerta_model();
$variedad = new variedad_model();
$listaVariedades = $variedad->listarInfoVariedad();

require_once($PATH . 'php/views/gestionCosechas.php');
