<?php
$PATH = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-Omnitus/';
$TITLE = "Tablas BD";
require_once($PATH . 'php/db/db.php');
require_once($PATH . 'php/models/table_model.php');

$db = db::connect();


session_start();
require_once($PATH . 'php/views/listarTablas.php');
