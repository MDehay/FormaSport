<?php
session_start();
include_once '../view/header.php';
include_once '../view/menu.php';
include_once 'function_session.php';
include_once  'valeur_session_update_reunion.php';
include_once 'config_db.php';
include_once 'function_sql_modif.php';

$id_dis=modification_reunion();

$objet_reunion=affichage_object_reunion($bdd, $id_dis);

if($objet_reunion != $update_objet)
{
    update_objet_reunion($bdd, $id_dis, $update_objet);
}

$description_reunion=affichage_description_reunion($bdd, $id_dis);

if($description_reunion != $update_description)
{
    update_description_reunion($bdd, $id_dis, $update_description);
}

$lieux_reunion=affichage_lieux_reunion($bdd, $id_dis);

if($lieux_reunion != $update_lieux || $lieux_reunion != $update_selected_lieux)
{
    if (!empty($update_lieux)){
        $update_selected_lieux=null;
        update_lieu_reunion($bdd, $id_dis, $update_lieux, $update_selected_lieux);
    }
    else{
        $update_lieux=null;
        update_lieu_reunion($bdd, $id_dis, $update_lieux, $update_selected_lieux);
    }
}

$date_reunion=affichage_date_reunion($bdd, $id_dis);

if($date_reunion != $update_date_reunion_1)
{
    update_date_reunion($bdd, $id_dis, $update_date_reunion_1);
}

$date_validiter=affichage_date_validiter_reunion($bdd,$id_dis);

if($date_validiter != $update_date_validite)
{
    update_date_validiter($bdd, $id_dis, $update_date_validite);
}

$creneau_debut=affichage_creneau_debut_reunion($bdd, $id_dis);

if($creneau_debut != $update_creneau_debut_1)
{
    update_creneau_debut_reunion($bdd, $id_dis, $update_creneau_debut_1);
}

$creneau_fin=affichage_creneau_fin_reunion($bdd, $id_dis);

if($creneau_fin != $update_creneau_fin_1)
{
    update_creneau_fin_reunion($bdd, $id_dis, $update_creneau_fin_1);
}

$personne_reunion=affichage_personne_reunion($bdd, $id_dis);

if ($personne_reunion != $update_personne_inviter_1 || $personne_reunion != $update_personne_indispensable_1)
{
    if(!empty($update_personne_inviter_1) && empty($update_personne_indispensable_1))
    {
        update_personne_reunion($bdd, $id_dis, $update_personne_inviter_1, $update_personne_indispensable_1);
    }

    else{
        update_personne_reunion($bdd, $id_dis, $update_personne_inviter_1, $update_personne_indispensable_1);
    }
}

header("Location:Acceuil.php?information=update_reunion");
?>




