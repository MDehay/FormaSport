<?php
session_start();
include_once "../view/header.php";
include_once '../view/menu.php';
include_once 'function_session.php';
include_once 'function_validation.php';
include_once 'config_db.php';

$fk_ut=validate_reunion_admin()[0];
$fk_re=validate_reunion_admin()[1];

if (isset($_POST['valider'])&& $_POST['valider'] != '')
{
    $validation= validate_reunion_admin()[2];
}
else{
    $validation=validate_reunion_admin()[2];
}

if (isset($_POST['supprimer'])&& $_POST['supprimer'] != '')
{
 $refuser= validate_reunion_admin()[3];
}
else{
    $refuser=validate_reunion_admin()[3];
}
 $fk_dr=validate_reunion_admin()[4];


if($validation=='on')
{
    admin_validation_creneau($bdd, $fk_re, $fk_dr);
    header('Location:Acceuil.php?etat=reunion_valider');

}
if($refuser == 'on')
{
    user_admin_refus_creneau($bdd, $fk_re, $fk_dr, $fk_ut);
    header('Location:Acceuil.php?alert=reunion_supprimer');
}


?>