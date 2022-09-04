<?php

require_once($PATH.'php/models/stock_model.php');
require_once($PATH.'php/models/variedad_model.php');
require_once($PATH.'php/models/hortaliza_model.php');

$stock = new stock_model();
$variedad = new variedad_model();
$hortaliza = new hortaliza_model();
$dataStock = $stock->getStock();


require_once($PATH.'php/views/catalogo.php'); // !!!