<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';
$TITLE = "Catálogo";
require_once($PATH . 'php/db/db.php');
require_once($PATH . 'php/models/stock_model.php');

$stock = new stock_model();

if (!isset($_SESSION)) {
    session_start();
}
require_once($PATH . 'php/views/gestionStock.php');
