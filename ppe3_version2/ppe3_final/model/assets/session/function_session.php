<?php
function identifiant()
{
    $login = $_SESSION['Email']=$_POST['Email'];

    $password = $_SESSION['Mdp']=$_POST['Mdp'];

    return array($login, $password);
}


//on recuperer toutes les valeurs de la description de la reunion
function description_reunion() {
     $objet=$_SESSION['objet']=$_POST['objet'];
     $description=$_SESSION['description']=$_POST['description'];
     $lieu=$_SESSION['lieu']=$_POST['lieu'];
     $selected_lieu=$_SESSION['selected_lieu']=$_POST['selected_lieu'];
     return array($objet, $description,$lieu,$selected_lieu);
}

//on recuperer toutes les valeurs de la date de la reunion
function date_reunion(){
    $date_reunion_1=$_SESSION['date_reunion_1']=$_POST['date_reunion_1'];
    $date_validite=$_SESSION['date_validite']=$_POST['date_validite'];
    $creneau_debut_1=$_SESSION['creneau_debut_1']=$_POST['creneau_debut_1'];
    $creneau_fin_1=$_SESSION['creneau_fin_1']=$_POST['creneau_fin_1'];
    $creneau_debut_2=$_SESSION['creneau_debut_2']=$_POST['creneau_debut_2'];
    $creneau_fin_2=$_SESSION['creneau_fin_2']=$_POST['creneau_fin_2'];
    $date_reunion_2=$_SESSION['date_reunion_2']=$_POST['date_reunion_2'];
    $creneau_debut_3=$_SESSION['creneau_debut_3']=$_POST['creneau_debut_3'];
    $creneau_fin_3=$_SESSION['creneau_fin_3']=$_POST['creneau_fin_3'];
    $creneau_debut_4=$_SESSION['creneau_debut_4']=$_POST['creneau_debut_4'];
    $creneau_fin_4=$_SESSION['creneau_fin_4']=$_POST['creneau_fin_4'];

    return array($date_reunion_1, $date_validite, $creneau_debut_1,
        $creneau_fin_1, $creneau_debut_2, $creneau_fin_2,$date_reunion_2, $creneau_debut_3, $creneau_fin_3,
        $creneau_debut_4, $creneau_fin_4);
}

//on recuperer toutes les valeurs de la creation de la reunion
function reunion()
{
    $login=$_SESSION['Email'];
    $objet=$_SESSION['objet'];
    $description=$_SESSION['description'];
    $lieu=$_SESSION['lieu'];
    $selected_lieu=$_SESSION['selected_lieu'];
    $date_reunion_1=$_SESSION['date_reunion_1'];
    $date_validite=$_SESSION['date_validite'];
    $creneau_debut_1=$_SESSION['creneau_debut_1'];
    $creneau_fin_1=$_SESSION['creneau_fin_1'];
    $creneau_debut_2=$_SESSION['creneau_debut_2'];
    $creneau_fin_2=$_SESSION['creneau_fin_2'];
    $date_reunion_2=$_SESSION['date_reunion_2'];
    $creneau_debut_3=$_SESSION['creneau_debut_3'];
    $creneau_fin_3=$_SESSION['creneau_fin_3'];
    $creneau_debut_4=$_SESSION['creneau_debut_4'];
    $creneau_fin_4=$_SESSION['creneau_fin_4'];
    $personne_inviter_1=$_SESSION['selected_personne_inviter_1']=$_POST['selected_personne_inviter_1'];
    $personne_inviter_2=$_SESSION['selected_personne_inviter_2']=$_POST['selected_personne_inviter_2'];
    $personne_inviter_3=$_SESSION['selected_personne_inviter_3']=$_POST['selected_personne_inviter_3'];
    $personne_inviter_4=$_SESSION['selected_personne_inviter_4']=$_POST['selected_personne_inviter_4'];
    $personne_inviter_5=$_SESSION['selected_personne_inviter_5']=$_POST['selected_personne_inviter_5'];
    $personne_inviter_6=$_SESSION['selected_personne_inviter_6']=$_POST['selected_personne_inviter_6'];
    $personne_inviter_7=$_SESSION['selected_personne_inviter_7']=$_POST['selected_personne_inviter_7'];
    $personne_indispensable_1=$_SESSION['selected_personne_indispensable_1']=$_POST['selected_personne_indispensable_1'];
    $personne_indispensable_2=$_SESSION['selected_personne_indispensable_2']=$_POST['selected_personne_indispensable_2'];
    $personne_indispensable_3=$_SESSION['selected_personne_indispensable_3']=$_POST['selected_personne_indispensable_3'];
    $personne_indispensable_4=$_SESSION['selected_personne_indispensable_4']=$_POST['selected_personne_indispensable_4'];
    $personne_indispensable_5=$_SESSION['selected_personne_indispensable_5']=$_POST['selected_personne_indispensable_5'];
    $personne_indispensable_6=$_SESSION['selected_personne_indispensable_6']=$_POST['selected_personne_indispensable_6'];
    $personne_indispensable_7=$_SESSION['selected_personne_indispensable_7']=$_POST['selected_personne_indispensable_7'];

    return array($login,$objet,$description, $lieu, $selected_lieu, $date_reunion_1, $date_validite, $creneau_debut_1,
        $creneau_fin_1,  $creneau_debut_2, $creneau_fin_2, $date_reunion_2,$creneau_debut_3, $creneau_fin_3,
        $creneau_debut_4, $creneau_fin_4, $personne_inviter_1, $personne_inviter_2, $personne_inviter_3,
        $personne_inviter_4, $personne_inviter_5, $personne_inviter_6, $personne_inviter_7, $personne_indispensable_1,
        $personne_indispensable_2, $personne_indispensable_3, $personne_indispensable_4, $personne_indispensable_5,
        $personne_indispensable_6, $personne_indispensable_7);
}

function modif_reunion()
{
    if($_POST['modif_user'] != "")
    {
        $id_dis=$_SESSION['modif_user']=$_POST['modif_user'];

    }
    else
    {
        $id_dis = "";
    }

    return $id_dis;
}

function modification_reunion()
{
    if($_SESSION['modif_user'] != "")
    {
        $id_dis=$_SESSION['modif_user'];
    }

    else
    {
        $id_dis = "";
    }

    return $id_dis;
}

//on recuperer toutes les valeurs de la description de la reunion
function modif_description_reunion() {
    $objet=$_SESSION['objet']=$_POST['objet'];
    $description=$_SESSION['description']=$_POST['description'];
    $lieu=$_SESSION['lieu']=$_POST['lieu'];
    $selected_lieu=$_SESSION['selected_lieu']=$_POST['selected_lieu'];
    return array($objet, $description,$lieu,$selected_lieu);
}

//on recuperer toutes les valeurs de la date de la reunion
function modif_date_reunion(){
    $date_reunion_1=$_SESSION['date_reunion_1']=$_POST['date_reunion_1'];
    $date_validite=$_SESSION['date_validite']=$_POST['date_validite'];
    $creneau_debut_1=$_SESSION['creneau_debut_1']=$_POST['creneau_debut_1'];
    $creneau_fin_1=$_SESSION['creneau_fin_1']=$_POST['creneau_fin_1'];

    return array($date_reunion_1, $date_validite, $creneau_debut_1,
        $creneau_fin_1);
}

function modif_update_reunion()
{
    $objet=$_SESSION['objet'];
    $description=$_SESSION['description'];
    $lieu=$_SESSION['lieu'];
    $selected_lieu=$_SESSION['selected_lieu'];
    $date_reunion_1=$_SESSION['date_reunion_1'];
    $date_validite=$_SESSION['date_validite'];
    $creneau_debut_1=$_SESSION['creneau_debut_1'];
    $creneau_fin_1=$_SESSION['creneau_fin_1'];
    $personne_inviter_1=$_SESSION['selected_personne_inviter_1']=$_POST['selected_personne_inviter_1'];
    $personne_indispensable_1=$_SESSION['selected_personne_indispensable_1']=$_POST['selected_personne_indispensable_1'];

    return array($objet,$description, $lieu, $selected_lieu, $date_reunion_1, $date_validite, $creneau_debut_1,
        $creneau_fin_1, $personne_inviter_1,  $personne_indispensable_1);
}


function participant()
{
    $id_reunion=$_SESSION['participation_user']=$_POST['participation_user'];

    return $id_reunion;
}

function reunion_user()
{
    $login=$_SESSION['Email'];
    $id_reunion=$_SESSION['participation_user']=$_POST['participation_user'];

    return array($login, $id_reunion);
}


function validate_reunion_user()
{
    $login=$_SESSION['Email'];
    $id_reunion=$_SESSION['participation_user'];
    if(isset($_POST['modifier'])&& $_POST['modifier']!= '')
    {
        $validation=$_SESSION['modifier']=$_POST['modifier'];
    }
    else{
        $validation="vide";
    }
    if(isset($_POST['supprimer'])&& $_POST['supprimer'] !=  '')
    {
        $refuser=$_SESSION['supprimer']=$_POST['supprimer'];
    }
    else{
        $refuser="vide";
    }
    $date_reunion=$_SESSION['date_reunion']=$_POST['date_reunion'];

    if($_POST['selected_Choix']=='aucun vote')
    {
        $choix=0;
    }

    else if ($_POST['selected_Choix']=='disponible')
    {
        $choix=1;
    }
    else{
        $choix=2;
    }
    $raison=$_SESSION['selected_Raison']=$_POST['selected_Raison'];

    return array($login, $id_reunion, $validation, $refuser, $date_reunion, $choix, $raison);
}

function validate_reunion_admin()
{
    $login=$_SESSION['organisateur']=$_POST['organisateur'];
    $id_reunion=$_SESSION['fk_re_admin'];
    if(isset($_POST['valider'])&& $_POST['valider']!= '')
    {
        $validation=$_SESSION['valider']=$_POST['valider'];
    }
    else{
        $validation="vide";
    }
    if(isset($_POST['supprimer'])&& $_POST['supprimer'] !=  '')
    {
        $refuser=$_SESSION['supprimer']=$_POST['supprimer'];
    }

    else{
        $refuser="vide";
    }
        $date_reunion=$_SESSION['date_reunion']=$_POST['date_reunion'];


    return array($login, $id_reunion, $validation, $refuser, $date_reunion);
}

function session_del_reunion()
{
    $id_reunion=$_SESSION['del_id_re']=$_POST['del_id_re'];

    return $id_reunion;
}

function organisation()
{
    $login=$_SESSION['Email'];

    return $login;
}

function session_id_organisateur()
{
    $fk_RE=$_SESSION['fk_re_admin']=$_POST['fk_re_admin'];

    return $fk_RE;
}


?>