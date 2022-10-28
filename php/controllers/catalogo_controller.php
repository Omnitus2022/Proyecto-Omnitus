<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';
$TITLE = "Catálogo";
require_once($PATH . 'php/db/db.php');
require_once($PATH . 'php/models/stock_model.php');
require_once($PATH . 'php/models/variedad_model.php');
require_once($PATH . 'php/models/hortaliza_model.php');

$stock = new stock_model();
$variedad = new variedad_model();
$hortaliza = new hortaliza_model();
$dataStock = $stock->getStock();

session_start();
if (!isset($_SESSION["products"])) {
    $_SESSION["products"] = array();
}


require_once($PATH . 'php/views/catalogo.php');
