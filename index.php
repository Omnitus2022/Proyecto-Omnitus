<?php
$PATH = $_SERVER['DOCUMENT_ROOT'].'/Proyecto-Omnitus/';
$TITLE = "Inicio";
require_once($PATH.'php/db/db.php');
session_start();
require_once($PATH.'php/views/inicio.php');
