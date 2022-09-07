<?php
$PATH = $_SERVER['DOCUMENT_ROOT'].'/Proyecto-Omnitus/';
$TITLE = "Catálogo";
require_once($PATH.'php/db/db.php');
session_start();
require_once($PATH.'php/views/redirect.php');