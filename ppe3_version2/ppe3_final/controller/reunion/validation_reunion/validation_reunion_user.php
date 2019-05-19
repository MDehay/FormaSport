<?php
session_start();
include_once "../../../view/menu/header.php";
include_once '../../../view/menu/menu.php';
include_once '../../../model/assets/session/function_session.php';
include_once '../../../model/assets/function_sql/function_validation_reunion.php';
include_once '../../../model/assets/config_sql/config_db.php';

$fk_ut=validate_reunion_user()[0];
$fk_re=validate_reunion_user()[1];

if (isset($_POST['valider'])&& $_POST['valider'] != '')
{
    $validation= validate_reunion_user()[2];
}
else{
    $validation=validate_reunion_user()[2];
}

if (isset($_POST['refuser'])&& $_POST['refuser'] != '')
{
    $refuser= validate_reunion_user()[3];
}
else{
    $refuser=validate_reunion_user()[3];
}
$fk_dr=validate_reunion_user()[4];

$choix=validate_reunion_user()[5];

$raison=validate_reunion_user()[6];

if($validation == 'on')
{
    user_validation_creneau($bdd, $raison, $choix, $fk_dr, $fk_re, $fk_ut);
    header('Location:../../view/page_menu/Acceuil.php?validation=validate');
}

if($refuser == 'on')
{
    user_admin_refus_creneau($bdd, $fk_re, $fk_dr, $fk_ut);
    header('Location:../../view/page_menu/Acceuil.phpx?validation=supprimer');
}


?>