<?php
 $PATH = $_SERVER['DOCUMENT_ROOT'].'/Proyecto-Omnitus/';
 $TITLE = "Gestión de Productos";
 require_once($PATH.'php/db/db.php');
 require_once($PATH.'php/models/variedad_model.php');
 require_once($PATH.'php/models/hortaliza_model.php');

$variedad = new variedad_model();
$hortaliza = new hortaliza_model();

require_once($PATH.'php/views/gestionHortalizas.php');