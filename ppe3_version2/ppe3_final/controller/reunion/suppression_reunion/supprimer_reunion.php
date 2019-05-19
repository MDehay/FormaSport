<?php
session_start();
include_once "../../../view/menu/header.php";
include_once '../../../view/menu/menu.php';
include_once '../../../model/assets/session/function_session.php';
include_once '../../../model/assets/function_sql/function_validation_reunion.php';
include_once '../../../model/assets/config_sql/config_db.php';

$id_reunion=session_del_reunion();

del_reunion($bdd, $id_reunion);

header("Location:Acceuil.php?del=oui");
?>