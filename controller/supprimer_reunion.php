<?php
session_start();
include_once "../view/header.php";
include_once '../view/menu.php';
include_once 'function_session.php';
include_once 'function_validation.php';
include_once 'config_db.php';

$id_reunion=session_del_reunion();

del_reunion($bdd, $id_reunion);

header("Location:Acceuil.php?del=oui");
?>