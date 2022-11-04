<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';
$TITLE = "Catálogo";
require_once($PATH . 'php/db/db.php');
require_once($PATH . 'php/models/stock_model.php');
require_once($PATH . 'php/models/variedad_model.php');


$stock = new stock_model();
$variedad = new variedad_model();

require_once($PATH . 'php/views/gestionStock.php');
