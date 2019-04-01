<?php
session_start();
include_once '../view/header.php';
include_once '../view/menu.php';
include_once 'function_session.php';
include_once  'valeur_session_insert_reunion.php';
include_once 'config_db.php';
include_once 'function_sql.php';

if (!empty($lieu)) {
    $id_lieu=insert_lieu($bdd, $lieu);
    $places =null;
    $id_reunion=insert_reunion($bdd, $login, $objet, $description, $date_validite, $id_lieu, $places, $lieu);
}

else {
    $places = select_lieu($bdd, $selected_lieux);
    $id_lieu = null;
    $id_reunion = insert_reunion($bdd, $login, $objet, $description, $date_validite, $id_lieu, $places, $lieu);
}

if(!empty($date_reunion_1) && !empty($creneau_debut_1) && !empty($creneau_fin_1))
{
    $id_creneau_1 = insert_creneau_1($bdd, $date_reunion_1, $creneau_debut_1, $creneau_fin_1);

    if(!empty($personne_inviter_1))
    {
            $tb_personne_inviter_1 = explode(" ", $personne_inviter_1);
            $nom_personne_inviter_1 = $tb_personne_inviter_1[0];
            $prenom_personne_inviter_1 = $tb_personne_inviter_1[1];
            $id_personne_inviter_1 = select_personne_inviter_1($bdd, $nom_personne_inviter_1, $prenom_personne_inviter_1);
            foreach ($id_personne_inviter_1 as $id_pers_inv) {
                $id_select_personne_inviter_1 = $id_pers_inv['UT_MAIL'];
            }
            $id_creneau_2=null;
            $id_creneau_3=null;
            $id_creneau_4=null;
            insert_personne_inviter_1($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_1);
        }

    if(!empty($personne_inviter_2))
    {
        $tb_personne_inviter_2 = explode(" ", $personne_inviter_2);
        $nom_personne_inviter_2 = $tb_personne_inviter_2[0];
        $prenom_personne_inviter_2 = $tb_personne_inviter_2[1];
        $id_personne_inviter_2 = select_personne_inviter_2($bdd, $nom_personne_inviter_2, $prenom_personne_inviter_2);
        foreach ($id_personne_inviter_2 as $id_pers_inv) {
            $id_select_personne_inviter_2 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_2=null;
        $id_creneau_3=null;
        $id_creneau_4=null;
        insert_personne_inviter_2($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_2);
    }

    if(!empty($personne_inviter_3))
    {
        $tb_personne_inviter_3 = explode(" ", $personne_inviter_3);
        $nom_personne_inviter_3 = $tb_personne_inviter_3[0];
        $prenom_personne_inviter_3 = $tb_personne_inviter_3[1];
        $id_personne_inviter_3 = select_personne_inviter_3($bdd, $nom_personne_inviter_3, $prenom_personne_inviter_3);
        foreach ($id_personne_inviter_3 as $id_pers_inv) {
            $id_select_personne_inviter_3 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_2 = null;
        $id_creneau_3 = null;
        $id_creneau_4 = null;
        insert_personne_inviter_3($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_3);
    }

    if(!empty($personne_inviter_4))
    {
        $tb_personne_inviter_4 = explode(" ", $personne_inviter_4);
        $nom_personne_inviter_4 = $tb_personne_inviter_4[0];
        $prenom_personne_inviter_4 = $tb_personne_inviter_4[1];
        $id_personne_inviter_4 = select_personne_inviter_4($bdd, $nom_personne_inviter_4, $prenom_personne_inviter_4);
        foreach ($id_personne_inviter_4 as $id_pers_inv) {
            $id_select_personne_inviter_4 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_2 = null;
        $id_creneau_3 = null;
        $id_creneau_4 = null;
        insert_personne_inviter_4($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_4);
    }

    if(!empty($personne_inviter_5))
    {
        $tb_personne_inviter_5 = explode(" ", $personne_inviter_5);
        $nom_personne_inviter_5 = $tb_personne_inviter_5[0];
        $prenom_personne_inviter_5 = $tb_personne_inviter_5[1];
        $id_personne_inviter_5 = select_personne_inviter_5($bdd, $nom_personne_inviter_5, $prenom_personne_inviter_5);
        foreach ($id_personne_inviter_5 as $id_pers_inv) {
            $id_select_personne_inviter_5 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_2 = null;
        $id_creneau_3 = null;
        $id_creneau_4 = null;
        insert_personne_inviter_5($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_5);
    }

    if(!empty($personne_inviter_6))
    {
        $tb_personne_inviter_6 = explode(" ", $personne_inviter_6);
        $nom_personne_inviter_6 = $tb_personne_inviter_6[0];
        $prenom_personne_inviter_6 = $tb_personne_inviter_6[1];
        $id_personne_inviter_6 = select_personne_inviter_6($bdd, $nom_personne_inviter_6, $prenom_personne_inviter_6);
        foreach ($id_personne_inviter_6 as $id_pers_inv) {
            $id_select_personne_inviter_6 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_2 = null;
        $id_creneau_3 = null;
        $id_creneau_4 = null;
        insert_personne_inviter_6($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_6);
    }

    if(!empty($personne_inviter_7))
    {
        $tb_personne_inviter_7 = explode(" ", $personne_inviter_7);
        $nom_personne_inviter_7 = $tb_personne_inviter_7[0];
        $prenom_personne_inviter_7 = $tb_personne_inviter_7[1];
        $id_personne_inviter_7 = select_personne_inviter_7($bdd, $nom_personne_inviter_7, $prenom_personne_inviter_7);
        foreach ($id_personne_inviter_7 as $id_pers_inv) {
            $id_select_personne_inviter_7 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_2 = null;
        $id_creneau_3 = null;
        $id_creneau_4 = null;
        insert_personne_inviter_7($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_7);
    }
    if(!empty($personne_indispensable_1))
    {
        $tb_personne_indispensable_1 = explode(" ", $personne_indispensable_1);
        $nom_personne_indispensable_1 = $tb_personne_indispensable_1[0];
        $prenom_personne_indispensable_1 = $tb_personne_indispensable_1[1];
        $id_personne_indispensable_1 = select_personne_indispensable_1($bdd, $nom_personne_indispensable_1, $prenom_personne_indispensable_1);
        foreach ($id_personne_indispensable_1 as $id_pers_indis) {
            $id_select_personne_indispensable_1 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_2 = null;
        $id_creneau_3 = null;
        $id_creneau_4 = null;
        insert_personne_indispensable_1($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_1);
        }

    if(!empty($personne_indispensable_2))
    {
        $tb_personne_indispensable_2 = explode(" ", $personne_indispensable_2);
        $nom_personne_indispensable_2 = $tb_personne_indispensable_2[0];
        $prenom_personne_indispensable_2 = $tb_personne_indispensable_2[1];
        $id_personne_indispensable_2 = select_personne_indispensable_1($bdd, $nom_personne_indispensable_2, $prenom_personne_indispensable_2);
        foreach ($id_personne_indispensable_2 as $id_pers_indis) {
            $id_select_personne_indispensable_2 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_2 = null;
        $id_creneau_3 = null;
        $id_creneau_4 = null;
        insert_personne_indispensable_2($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_2);
    }

    if(!empty($personne_indispensable_3))
    {

        $tb_personne_indispensable_3 = explode(" ", $personne_indispensable_3);
        $nom_personne_indispensable_3 = $tb_personne_indispensable_3[0];
        $prenom_personne_indispensable_3 = $tb_personne_indispensable_3[1];
        $id_personne_indispensable_3 = select_personne_indispensable_3($bdd, $nom_personne_indispensable_3, $prenom_personne_indispensable_3);
        foreach ($id_personne_indispensable_3 as $id_pers_indis) {
            $id_select_personne_indispensable_3 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_2=null;
        $id_creneau_3=null;
        $id_creneau_4=null;
        insert_personne_indispensable_3($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_3);
    }

    if(!empty($personne_indispensable_4))
    {

        $tb_personne_indispensable_4 = explode(" ", $personne_indispensable_4);
        $nom_personne_indispensable_4 = $tb_personne_indispensable_4[0];
        $prenom_personne_indispensable_4 = $tb_personne_indispensable_4[1];
        $id_personne_indispensable_4 = select_personne_indispensable_1($bdd, $nom_personne_indispensable_4, $prenom_personne_indispensable_4);
        foreach ($id_personne_indispensable_4 as $id_pers_indis) {
            $id_select_personne_indispensable_4 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_2=null;
        $id_creneau_3=null;
        $id_creneau_4=null;
        insert_personne_indispensable_4($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_4);
    }

    if(!empty($personne_indispensable_5))
    {

        $tb_personne_indispensable_5 = explode(" ", $personne_indispensable_5);
        $nom_personne_indispensable_5 = $tb_personne_indispensable_5[0];
        $prenom_personne_indispensable_5 = $tb_personne_indispensable_5[1];
        $id_personne_indispensable_5 = select_personne_indispensable_5($bdd, $nom_personne_indispensable_5, $prenom_personne_indispensable_5);
        foreach ($id_personne_indispensable_5 as $id_pers_indis) {
            $id_select_personne_indispensable_5 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_2=null;
        $id_creneau_3=null;
        $id_creneau_4=null;
        insert_personne_indispensable_5($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_5);
    }

    if(!empty($personne_indispensable_6))
    {

        $tb_personne_indispensable_6 = explode(" ", $personne_indispensable_6);
        $nom_personne_indispensable_6 = $tb_personne_indispensable_6[0];
        $prenom_personne_indispensable_6 = $tb_personne_indispensable_6[1];
        $id_personne_indispensable_6 = select_personne_indispensable_6($bdd, $nom_personne_indispensable_6, $prenom_personne_indispensable_6);
        foreach ($id_personne_indispensable_6 as $id_pers_indis) {
            $id_select_personne_indispensable_6 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_2=null;
        $id_creneau_3=null;
        $id_creneau_4=null;
        insert_personne_indispensable_6($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_6);
    }

    if(!empty($personne_indispensable_7))
    {

        $tb_personne_indispensable_7 = explode(" ", $personne_indispensable_7);
        $nom_personne_indispensable_7 = $tb_personne_indispensable_7[0];
        $prenom_personne_indispensable_7 = $tb_personne_indispensable_7[1];
        $id_personne_indispensable_7 = select_personne_indispensable_7($bdd, $nom_personne_indispensable_7, $prenom_personne_indispensable_7);
        foreach ($id_personne_indispensable_7 as $id_pers_indis) {
            $id_select_personne_indispensable_7 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_2=null;
        $id_creneau_3=null;
        $id_creneau_4=null;
        insert_personne_indispensable_7($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_7);
    }
}
if(!empty($date_reunion_1) && !empty($creneau_debut_2) && !empty($creneau_fin_2))
{
    $id_creneau_2 = insert_creneau_2($bdd, $date_reunion_1, $creneau_debut_2, $creneau_fin_2);
    if(!empty($personne_inviter_1))
    {
        $tb_personne_inviter_1 = explode(" ", $personne_inviter_1);
        $nom_personne_inviter_1 = $tb_personne_inviter_1[0];
        $prenom_personne_inviter_1 = $tb_personne_inviter_1[1];
        $id_personne_inviter_1 = select_personne_inviter_1($bdd, $nom_personne_inviter_1, $prenom_personne_inviter_1);
        foreach ($id_personne_inviter_1 as $id_pers_inv) {
            $id_select_personne_inviter_1 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_3=null;
        $id_creneau_4=null;
        insert_personne_inviter_1($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_1);
    }

    if(!empty($personne_inviter_2))
    {
        $tb_personne_inviter_2 = explode(" ", $personne_inviter_2);
        $nom_personne_inviter_2 = $tb_personne_inviter_2[0];
        $prenom_personne_inviter_2 = $tb_personne_inviter_2[1];
        $id_personne_inviter_2 = select_personne_inviter_2($bdd, $nom_personne_inviter_2, $prenom_personne_inviter_2);
        foreach ($id_personne_inviter_2 as $id_pers_inv) {
            $id_select_personne_inviter_2 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_3=null;
        $id_creneau_4=null;
        insert_personne_inviter_2($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_2);
    }

    if(!empty($personne_inviter_3))
    {
        $tb_personne_inviter_3 = explode(" ", $personne_inviter_3);
        $nom_personne_inviter_3 = $tb_personne_inviter_3[0];
        $prenom_personne_inviter_3 = $tb_personne_inviter_3[1];
        $id_personne_inviter_3 = select_personne_inviter_3($bdd, $nom_personne_inviter_3, $prenom_personne_inviter_3);
        foreach ($id_personne_inviter_3 as $id_pers_inv) {
            $id_select_personne_inviter_3 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_3=null;
        $id_creneau_4=null;
        insert_personne_inviter_3($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_3);
    }

    if(!empty($personne_inviter_4))
    {
        $tb_personne_inviter_4 = explode(" ", $personne_inviter_4);
        $nom_personne_inviter_4 = $tb_personne_inviter_4[0];
        $prenom_personne_inviter_4 = $tb_personne_inviter_4[1];
        $id_personne_inviter_4 = select_personne_inviter_4($bdd, $nom_personne_inviter_4, $prenom_personne_inviter_4);
        foreach ($id_personne_inviter_4 as $id_pers_inv) {
            $id_select_personne_inviter_4 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_3=null;
        $id_creneau_4=null;
        insert_personne_inviter_4($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_4);
    }

    if(!empty($personne_inviter_5))
    {
        $tb_personne_inviter_5 = explode(" ", $personne_inviter_5);
        $nom_personne_inviter_5 = $tb_personne_inviter_5[0];
        $prenom_personne_inviter_5 = $tb_personne_inviter_5[1];
        $id_personne_inviter_5 = select_personne_inviter_5($bdd, $nom_personne_inviter_5, $prenom_personne_inviter_5);
        foreach ($id_personne_inviter_5 as $id_pers_inv) {
            $id_select_personne_inviter_5 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_3=null;
        $id_creneau_4=null;
        insert_personne_inviter_5($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_5);
    }

    if(!empty($personne_inviter_6))
    {
        $tb_personne_inviter_6 = explode(" ", $personne_inviter_6);
        $nom_personne_inviter_6 = $tb_personne_inviter_6[0];
        $prenom_personne_inviter_6 = $tb_personne_inviter_6[1];
        $id_personne_inviter_6 = select_personne_inviter_6($bdd, $nom_personne_inviter_6, $prenom_personne_inviter_6);
        foreach ($id_personne_inviter_6 as $id_pers_inv) {
            $id_select_personne_inviter_6 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_3=null;
        $id_creneau_4=null;
        insert_personne_inviter_6($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_6);
    }

    if(!empty($personne_inviter_7))
    {
        $tb_personne_inviter_7 = explode(" ", $personne_inviter_7);
        $nom_personne_inviter_7 = $tb_personne_inviter_7[0];
        $prenom_personne_inviter_7 = $tb_personne_inviter_7[1];
        $id_personne_inviter_7 = select_personne_inviter_7($bdd, $nom_personne_inviter_7, $prenom_personne_inviter_7);
        foreach ($id_personne_inviter_7 as $id_pers_inv) {
            $id_select_personne_inviter_7 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_3=null;
        $id_creneau_4=null;
        insert_personne_inviter_7($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_7);
    }
    if(!empty($personne_indispensable_1))
    {

        $tb_personne_indispensable_1 = explode(" ", $personne_indispensable_1);
        $nom_personne_indispensable_1 = $tb_personne_indispensable_1[0];
        $prenom_personne_indispensable_1 = $tb_personne_indispensable_1[1];
        $id_personne_indispensable_1 = select_personne_indispensable_1($bdd, $nom_personne_indispensable_1, $prenom_personne_indispensable_1);
        foreach ($id_personne_indispensable_1 as $id_pers_indis) {
            $id_select_personne_indispensable_1 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_3=null;
        $id_creneau_4=null;
        insert_personne_indispensable_1($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_1);
    }

    if(!empty($personne_indispensable_2))
    {

        $tb_personne_indispensable_2 = explode(" ", $personne_indispensable_2);
        $nom_personne_indispensable_2 = $tb_personne_indispensable_2[0];
        $prenom_personne_indispensable_2 = $tb_personne_indispensable_2[1];
        $id_personne_indispensable_2 = select_personne_indispensable_1($bdd, $nom_personne_indispensable_2, $prenom_personne_indispensable_2);
        foreach ($id_personne_indispensable_2 as $id_pers_indis) {
            $id_select_personne_indispensable_2 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_3=null;
        $id_creneau_4=null;
        insert_personne_indispensable_2($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_2);
    }

    if(!empty($personne_indispensable_3))
    {

        $tb_personne_indispensable_3 = explode(" ", $personne_indispensable_3);
        $nom_personne_indispensable_3 = $tb_personne_indispensable_3[0];
        $prenom_personne_indispensable_3 = $tb_personne_indispensable_3[1];
        $id_personne_indispensable_3 = select_personne_indispensable_3($bdd, $nom_personne_indispensable_3, $prenom_personne_indispensable_3);
        foreach ($id_personne_indispensable_3 as $id_pers_indis) {
            $id_select_personne_indispensable_3 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_3=null;
        $id_creneau_4=null;
        insert_personne_indispensable_3($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_3);
    }

    if(!empty($personne_indispensable_4))
    {

        $tb_personne_indispensable_4 = explode(" ", $personne_indispensable_4);
        $nom_personne_indispensable_4 = $tb_personne_indispensable_4[0];
        $prenom_personne_indispensable_4 = $tb_personne_indispensable_4[1];
        $id_personne_indispensable_4 = select_personne_indispensable_1($bdd, $nom_personne_indispensable_4, $prenom_personne_indispensable_4);
        foreach ($id_personne_indispensable_4 as $id_pers_indis) {
            $id_select_personne_indispensable_4 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_3=null;
        $id_creneau_4=null;
        insert_personne_indispensable_4($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_4);
    }

    if(!empty($personne_indispensable_5))
    {

        $tb_personne_indispensable_5 = explode(" ", $personne_indispensable_5);
        $nom_personne_indispensable_5 = $tb_personne_indispensable_5[0];
        $prenom_personne_indispensable_5 = $tb_personne_indispensable_5[1];
        $id_personne_indispensable_5 = select_personne_indispensable_5($bdd, $nom_personne_indispensable_5, $prenom_personne_indispensable_5);
        foreach ($id_personne_indispensable_5 as $id_pers_indis) {
            $id_select_personne_indispensable_5 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_3=null;
        $id_creneau_4=null;
        insert_personne_indispensable_5($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_5);
    }

    if(!empty($personne_indispensable_6))
    {

        $tb_personne_indispensable_6 = explode(" ", $personne_indispensable_6);
        $nom_personne_indispensable_6 = $tb_personne_indispensable_6[0];
        $prenom_personne_indispensable_6 = $tb_personne_indispensable_6[1];
        $id_personne_indispensable_6 = select_personne_indispensable_6($bdd, $nom_personne_indispensable_6, $prenom_personne_indispensable_6);
        foreach ($id_personne_indispensable_6 as $id_pers_indis) {
            $id_select_personne_indispensable_6 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_3=null;
        $id_creneau_4=null;
        insert_personne_indispensable_6($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_6);
    }

    if(!empty($personne_indispensable_7))
    {

        $tb_personne_indispensable_7 = explode(" ", $personne_indispensable_7);
        $nom_personne_indispensable_7 = $tb_personne_indispensable_7[0];
        $prenom_personne_indispensable_7 = $tb_personne_indispensable_7[1];
        $id_personne_indispensable_7 = select_personne_indispensable_7($bdd, $nom_personne_indispensable_7, $prenom_personne_indispensable_7);
        foreach ($id_personne_indispensable_7 as $id_pers_indis) {
            $id_select_personne_indispensable_7 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_3=null;
        $id_creneau_4=null;
        insert_personne_indispensable_7($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_7);
    }

}

if(!empty($date_reunion_2) && !empty($creneau_debut_3)  && !empty($creneau_fin_3)) {
    $id_creneau_3 = insert_creneau_3($bdd, $date_reunion_2, $creneau_debut_3, $creneau_fin_3);

    if(!empty($personne_inviter_1))
    {
        $tb_personne_inviter_1 = explode(" ", $personne_inviter_1);
        $nom_personne_inviter_1 = $tb_personne_inviter_1[0];
        $prenom_personne_inviter_1 = $tb_personne_inviter_1[1];
        $id_personne_inviter_1 = select_personne_inviter_1($bdd, $nom_personne_inviter_1, $prenom_personne_inviter_1);
        foreach ($id_personne_inviter_1 as $id_pers_inv) {
            $id_select_personne_inviter_1 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_4=null;
        insert_personne_inviter_1($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_1);
    }

    if(!empty($personne_inviter_2))
    {
        $tb_personne_inviter_2 = explode(" ", $personne_inviter_2);
        $nom_personne_inviter_2 = $tb_personne_inviter_2[0];
        $prenom_personne_inviter_2 = $tb_personne_inviter_2[1];
        $id_personne_inviter_2 = select_personne_inviter_2($bdd, $nom_personne_inviter_2, $prenom_personne_inviter_2);
        foreach ($id_personne_inviter_2 as $id_pers_inv) {
            $id_select_personne_inviter_2 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_4=null;
        insert_personne_inviter_2($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_2);
    }

    if(!empty($personne_inviter_3))
    {
        $tb_personne_inviter_3 = explode(" ", $personne_inviter_3);
        $nom_personne_inviter_3 = $tb_personne_inviter_3[0];
        $prenom_personne_inviter_3 = $tb_personne_inviter_3[1];
        $id_personne_inviter_3 = select_personne_inviter_3($bdd, $nom_personne_inviter_3, $prenom_personne_inviter_3);
        foreach ($id_personne_inviter_3 as $id_pers_inv) {
            $id_select_personne_inviter_3 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_4=null;
        insert_personne_inviter_3($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_3);
    }

    if(!empty($personne_inviter_4))
    {
        $tb_personne_inviter_4 = explode(" ", $personne_inviter_4);
        $nom_personne_inviter_4 = $tb_personne_inviter_4[0];
        $prenom_personne_inviter_4 = $tb_personne_inviter_4[1];
        $id_personne_inviter_4 = select_personne_inviter_4($bdd, $nom_personne_inviter_4, $prenom_personne_inviter_4);
        foreach ($id_personne_inviter_4 as $id_pers_inv) {
            $id_select_personne_inviter_4 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_4=null;
        insert_personne_inviter_4($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_4);
    }

    if(!empty($personne_inviter_5))
    {
        $tb_personne_inviter_5 = explode(" ", $personne_inviter_5);
        $nom_personne_inviter_5 = $tb_personne_inviter_5[0];
        $prenom_personne_inviter_5 = $tb_personne_inviter_5[1];
        $id_personne_inviter_5 = select_personne_inviter_5($bdd, $nom_personne_inviter_5, $prenom_personne_inviter_5);
        foreach ($id_personne_inviter_5 as $id_pers_inv) {
            $id_select_personne_inviter_5 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_4=null;
        insert_personne_inviter_5($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_5);
    }

    if(!empty($personne_inviter_6))
    {
        $tb_personne_inviter_6 = explode(" ", $personne_inviter_6);
        $nom_personne_inviter_6 = $tb_personne_inviter_6[0];
        $prenom_personne_inviter_6 = $tb_personne_inviter_6[1];
        $id_personne_inviter_6 = select_personne_inviter_6($bdd, $nom_personne_inviter_6, $prenom_personne_inviter_6);
        foreach ($id_personne_inviter_6 as $id_pers_inv) {
            $id_select_personne_inviter_6 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_4=null;
        insert_personne_inviter_6($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_6);
    }

    if(!empty($personne_inviter_7))
    {
        $tb_personne_inviter_7 = explode(" ", $personne_inviter_7);
        $nom_personne_inviter_7 = $tb_personne_inviter_7[0];
        $prenom_personne_inviter_7 = $tb_personne_inviter_7[1];
        $id_personne_inviter_7 = select_personne_inviter_7($bdd, $nom_personne_inviter_7, $prenom_personne_inviter_7);
        foreach ($id_personne_inviter_7 as $id_pers_inv) {
            $id_select_personne_inviter_7 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_4=null;
        insert_personne_inviter_7($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_7);
    }
    if(!empty($personne_indispensable_1))
    {

        $tb_personne_indispensable_1 = explode(" ", $personne_indispensable_1);
        $nom_personne_indispensable_1 = $tb_personne_indispensable_1[0];
        $prenom_personne_indispensable_1 = $tb_personne_indispensable_1[1];
        $id_personne_indispensable_1 = select_personne_indispensable_1($bdd, $nom_personne_indispensable_1, $prenom_personne_indispensable_1);
        foreach ($id_personne_indispensable_1 as $id_pers_indis) {
            $id_select_personne_indispensable_1 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_4=null;
        insert_personne_indispensable_1($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_1);
    }

    if(!empty($personne_indispensable_2))
    {

        $tb_personne_indispensable_2 = explode(" ", $personne_indispensable_2);
        $nom_personne_indispensable_2 = $tb_personne_indispensable_2[0];
        $prenom_personne_indispensable_2 = $tb_personne_indispensable_2[1];
        $id_personne_indispensable_2 = select_personne_indispensable_1($bdd, $nom_personne_indispensable_2, $prenom_personne_indispensable_2);
        foreach ($id_personne_indispensable_2 as $id_pers_indis) {
            $id_select_personne_indispensable_2 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_4=null;
        insert_personne_indispensable_2($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_2);
    }

    if(!empty($personne_indispensable_3))
    {

        $tb_personne_indispensable_3 = explode(" ", $personne_indispensable_3);
        $nom_personne_indispensable_3 = $tb_personne_indispensable_3[0];
        $prenom_personne_indispensable_3 = $tb_personne_indispensable_3[1];
        $id_personne_indispensable_3 = select_personne_indispensable_3($bdd, $nom_personne_indispensable_3, $prenom_personne_indispensable_3);
        foreach ($id_personne_indispensable_3 as $id_pers_indis) {
            $id_select_personne_indispensable_3 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_4=null;
        insert_personne_indispensable_3($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_3);
    }

    if(!empty($personne_indispensable_4))
    {

        $tb_personne_indispensable_4 = explode(" ", $personne_indispensable_4);
        $nom_personne_indispensable_4 = $tb_personne_indispensable_4[0];
        $prenom_personne_indispensable_4 = $tb_personne_indispensable_4[1];
        $id_personne_indispensable_4 = select_personne_indispensable_1($bdd, $nom_personne_indispensable_4, $prenom_personne_indispensable_4);
        foreach ($id_personne_indispensable_4 as $id_pers_indis) {
            $id_select_personne_indispensable_4 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_4=null;
        insert_personne_indispensable_4($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_4);
    }

    if(!empty($personne_indispensable_5))
    {

        $tb_personne_indispensable_5 = explode(" ", $personne_indispensable_5);
        $nom_personne_indispensable_5 = $tb_personne_indispensable_5[0];
        $prenom_personne_indispensable_5 = $tb_personne_indispensable_5[1];
        $id_personne_indispensable_5 = select_personne_indispensable_5($bdd, $nom_personne_indispensable_5, $prenom_personne_indispensable_5);
        foreach ($id_personne_indispensable_5 as $id_pers_indis) {
            $id_select_personne_indispensable_5 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_4=null;
        insert_personne_indispensable_5($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_5);
    }

    if(!empty($personne_indispensable_6))
    {

        $tb_personne_indispensable_6 = explode(" ", $personne_indispensable_6);
        $nom_personne_indispensable_6 = $tb_personne_indispensable_6[0];
        $prenom_personne_indispensable_6 = $tb_personne_indispensable_6[1];
        $id_personne_indispensable_6 = select_personne_indispensable_6($bdd, $nom_personne_indispensable_6, $prenom_personne_indispensable_6);
        foreach ($id_personne_indispensable_6 as $id_pers_indis) {
            $id_select_personne_indispensable_6 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_4=null;
        insert_personne_indispensable_6($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_6);
    }

    if(!empty($personne_indispensable_7))
    {

        $tb_personne_indispensable_7 = explode(" ", $personne_indispensable_7);
        $nom_personne_indispensable_7 = $tb_personne_indispensable_7[0];
        $prenom_personne_indispensable_7 = $tb_personne_indispensable_7[1];
        $id_personne_indispensable_7 = select_personne_indispensable_7($bdd, $nom_personne_indispensable_7, $prenom_personne_indispensable_7);
        foreach ($id_personne_indispensable_7 as $id_pers_indis) {
            $id_select_personne_indispensable_7 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_4=null;
        insert_personne_indispensable_7($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_7);
    }
}

if (!empty($date_reunion_2) && !empty($creneau_debut_4) && !empty($creneau_fin_4)) {
    $id_creneau_4 = insert_creneau_4($bdd, $date_reunion_2, $creneau_debut_4, $creneau_fin_4);

    if(!empty($personne_inviter_1))
    {
        $tb_personne_inviter_1 = explode(" ", $personne_inviter_1);
        $nom_personne_inviter_1 = $tb_personne_inviter_1[0];
        $prenom_personne_inviter_1 = $tb_personne_inviter_1[1];
        $id_personne_inviter_1 = select_personne_inviter_1($bdd, $nom_personne_inviter_1, $prenom_personne_inviter_1);
        foreach ($id_personne_inviter_1 as $id_pers_inv) {
            $id_select_personne_inviter_1 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_3=null;
        insert_personne_inviter_1($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_1);
    }

    if(!empty($personne_inviter_2))
    {
        $tb_personne_inviter_2 = explode(" ", $personne_inviter_2);
        $nom_personne_inviter_2 = $tb_personne_inviter_2[0];
        $prenom_personne_inviter_2 = $tb_personne_inviter_2[1];
        $id_personne_inviter_2 = select_personne_inviter_2($bdd, $nom_personne_inviter_2, $prenom_personne_inviter_2);
        foreach ($id_personne_inviter_2 as $id_pers_inv) {
            $id_select_personne_inviter_2 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_3=null;
        insert_personne_inviter_2($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_2);
    }

    if(!empty($personne_inviter_3))
    {
        $tb_personne_inviter_3 = explode(" ", $personne_inviter_3);
        $nom_personne_inviter_3 = $tb_personne_inviter_3[0];
        $prenom_personne_inviter_3 = $tb_personne_inviter_3[1];
        $id_personne_inviter_3 = select_personne_inviter_3($bdd, $nom_personne_inviter_3, $prenom_personne_inviter_3);
        foreach ($id_personne_inviter_3 as $id_pers_inv) {
            $id_select_personne_inviter_3 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_3=null;
        insert_personne_inviter_3($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_3);
    }

    if(!empty($personne_inviter_4))
    {
        $tb_personne_inviter_4 = explode(" ", $personne_inviter_4);
        $nom_personne_inviter_4 = $tb_personne_inviter_4[0];
        $prenom_personne_inviter_4 = $tb_personne_inviter_4[1];
        $id_personne_inviter_4 = select_personne_inviter_4($bdd, $nom_personne_inviter_4, $prenom_personne_inviter_4);
        foreach ($id_personne_inviter_4 as $id_pers_inv) {
            $id_select_personne_inviter_4 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_3=null;
        insert_personne_inviter_4($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_4);
    }

    if(!empty($personne_inviter_5))
    {
        $tb_personne_inviter_5 = explode(" ", $personne_inviter_5);
        $nom_personne_inviter_5 = $tb_personne_inviter_5[0];
        $prenom_personne_inviter_5 = $tb_personne_inviter_5[1];
        $id_personne_inviter_5 = select_personne_inviter_5($bdd, $nom_personne_inviter_5, $prenom_personne_inviter_5);
        foreach ($id_personne_inviter_5 as $id_pers_inv) {
            $id_select_personne_inviter_5 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_3=null;
        insert_personne_inviter_5($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_5);
    }

    if(!empty($personne_inviter_6))
    {
        $tb_personne_inviter_6 = explode(" ", $personne_inviter_6);
        $nom_personne_inviter_6 = $tb_personne_inviter_6[0];
        $prenom_personne_inviter_6 = $tb_personne_inviter_6[1];
        $id_personne_inviter_6 = select_personne_inviter_6($bdd, $nom_personne_inviter_6, $prenom_personne_inviter_6);
        foreach ($id_personne_inviter_6 as $id_pers_inv) {
            $id_select_personne_inviter_6 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_3=null;
        insert_personne_inviter_6($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_6);
    }

    if(!empty($personne_inviter_7))
    {
        $tb_personne_inviter_7 = explode(" ", $personne_inviter_7);
        $nom_personne_inviter_7 = $tb_personne_inviter_7[0];
        $prenom_personne_inviter_7 = $tb_personne_inviter_7[1];
        $id_personne_inviter_7 = select_personne_inviter_7($bdd, $nom_personne_inviter_7, $prenom_personne_inviter_7);
        foreach ($id_personne_inviter_7 as $id_pers_inv) {
            $id_select_personne_inviter_7 = $id_pers_inv['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_3=null;
        insert_personne_inviter_7($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_7);
    }
    if(!empty($personne_indispensable_1))
    {

        $tb_personne_indispensable_1 = explode(" ", $personne_indispensable_1);
        $nom_personne_indispensable_1 = $tb_personne_indispensable_1[0];
        $prenom_personne_indispensable_1 = $tb_personne_indispensable_1[1];
        $id_personne_indispensable_1 = select_personne_indispensable_1($bdd, $nom_personne_indispensable_1, $prenom_personne_indispensable_1);
        foreach ($id_personne_indispensable_1 as $id_pers_indis) {
            $id_select_personne_indispensable_1 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_3=null;
        insert_personne_indispensable_1($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_1);
    }

    if(!empty($personne_indispensable_2))
    {

        $tb_personne_indispensable_2 = explode(" ", $personne_indispensable_2);
        $nom_personne_indispensable_2 = $tb_personne_indispensable_2[0];
        $prenom_personne_indispensable_2 = $tb_personne_indispensable_2[1];
        $id_personne_indispensable_2 = select_personne_indispensable_1($bdd, $nom_personne_indispensable_2, $prenom_personne_indispensable_2);
        foreach ($id_personne_indispensable_2 as $id_pers_indis) {
            $id_select_personne_indispensable_2 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_3=null;
        insert_personne_indispensable_2($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_2);
    }

    if(!empty($personne_indispensable_3))
    {

        $tb_personne_indispensable_3 = explode(" ", $personne_indispensable_3);
        $nom_personne_indispensable_3 = $tb_personne_indispensable_3[0];
        $prenom_personne_indispensable_3 = $tb_personne_indispensable_3[1];
        $id_personne_indispensable_3 = select_personne_indispensable_3($bdd, $nom_personne_indispensable_3, $prenom_personne_indispensable_3);
        foreach ($id_personne_indispensable_3 as $id_pers_indis) {
            $id_select_personne_indispensable_3 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_3=null;
        insert_personne_indispensable_3($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_3);
    }

    if(!empty($personne_indispensable_4))
    {

        $tb_personne_indispensable_4 = explode(" ", $personne_indispensable_4);
        $nom_personne_indispensable_4 = $tb_personne_indispensable_4[0];
        $prenom_personne_indispensable_4 = $tb_personne_indispensable_4[1];
        $id_personne_indispensable_4 = select_personne_indispensable_1($bdd, $nom_personne_indispensable_4, $prenom_personne_indispensable_4);
        foreach ($id_personne_indispensable_4 as $id_pers_indis) {
            $id_select_personne_indispensable_4 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_3=null;
        insert_personne_indispensable_4($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_4);
    }

    if(!empty($personne_indispensable_5))
    {

        $tb_personne_indispensable_5 = explode(" ", $personne_indispensable_5);
        $nom_personne_indispensable_5 = $tb_personne_indispensable_5[0];
        $prenom_personne_indispensable_5 = $tb_personne_indispensable_5[1];
        $id_personne_indispensable_5 = select_personne_indispensable_5($bdd, $nom_personne_indispensable_5, $prenom_personne_indispensable_5);
        foreach ($id_personne_indispensable_5 as $id_pers_indis) {
            $id_select_personne_indispensable_5 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_3=null;
        insert_personne_indispensable_5($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_5);
    }

    if(!empty($personne_indispensable_6))
    {

        $tb_personne_indispensable_6 = explode(" ", $personne_indispensable_6);
        $nom_personne_indispensable_6 = $tb_personne_indispensable_6[0];
        $prenom_personne_indispensable_6 = $tb_personne_indispensable_6[1];
        $id_personne_indispensable_6 = select_personne_indispensable_6($bdd, $nom_personne_indispensable_6, $prenom_personne_indispensable_6);
        foreach ($id_personne_indispensable_6 as $id_pers_indis) {
            $id_select_personne_indispensable_6 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_3=null;
        insert_personne_indispensable_6($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_6);
    }

    if(!empty($personne_indispensable_7))
    {

        $tb_personne_indispensable_7 = explode(" ", $personne_indispensable_7);
        $nom_personne_indispensable_7 = $tb_personne_indispensable_7[0];
        $prenom_personne_indispensable_7 = $tb_personne_indispensable_7[1];
        $id_personne_indispensable_7 = select_personne_indispensable_7($bdd, $nom_personne_indispensable_7, $prenom_personne_indispensable_7);
        foreach ($id_personne_indispensable_7 as $id_pers_indis) {
            $id_select_personne_indispensable_7 = $id_pers_indis['UT_MAIL'];
        }
        $id_creneau_1=null;
        $id_creneau_2=null;
        $id_creneau_3=null;
        insert_personne_indispensable_7($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_7);
    }
}
header("Location:Acceuil.php?message=insertion_reunion");

?>

