<?php
session_start();
include_once "../view/header.php";
include_once '../view/menu.php';
include_once 'function_session.php';
include_once 'function_validation.php';
include_once 'config_db.php';

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
    header('Location:Acceuil.php?validation=validate');
}

if($refuser == 'on')
{
    user_admin_refus_creneau($bdd, $fk_re, $fk_dr, $fk_ut);
    header('Location:Acceuil.php?validation=supprimer');
}


?>