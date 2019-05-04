<?php


//fonction qui recupere les lieux selctionner dans une liste deroulantes
function select_lieu($bdd, $selected_lieu){
    $id_lieu = $bdd->prepare("SELECT ID_LI FROM Lieu WHERE LI_Libelle = :id_lieu");
    $id_lieu->bindValue(':id_lieu', $selected_lieu);
    $id_lieu->execute();
    $place = $id_lieu->fetch();
    $places = $place['ID_LI'];
    return $places;
}

function affichage_object_reunion($bdd, $id_dis)
{
    $affichage_object_reunion = $bdd->prepare("SELECT RE_Object FROM Disponible JOIN Reunion R on Disponible.FK_RE = R.ID_RE
    WHERE ID_DIS= :id_dis");
    $affichage_object_reunion->bindValue(':id_dis', $id_dis);
    $affichage_object_reunion->execute();
    $affichage_objects_reunion=$affichage_object_reunion->fetch();
    $affichages_objects_reunion = $affichage_objects_reunion['RE_Object'];
    return $affichages_objects_reunion;
}

function affichage_description_reunion($bdd, $id_dis)
{

    $affichage_description_reunion = $bdd->prepare("SELECT RE_Description FROM Disponible JOIN Reunion R on Disponible.FK_RE = R.ID_RE
    WHERE ID_DIS= :id_dis");
    $affichage_description_reunion->bindValue(':id_dis', $id_dis);
    $affichage_description_reunion->execute();
    $affichage_descriptions_reunion=$affichage_description_reunion->fetch();
    $affichages_description_reunion = $affichage_descriptions_reunion['RE_Description'];
    return $affichages_description_reunion;

}

function affichage_lieux_reunion($bdd, $id_dis)
{
    $affichage_lieu_reunion = $bdd->prepare("SELECT LI_Libelle FROM Disponible JOIN Reunion R on Disponible.FK_RE = R.ID_RE
  JOIN Lieu L on R.FK_LI = L.ID_LI WHERE ID_DIS= :id_dis");
    $affichage_lieu_reunion->bindValue(':id_dis', $id_dis);
    $affichage_lieu_reunion->execute();
    $affichage_lieux_reunion=$affichage_lieu_reunion->fetch();
    $affichages_lieux_reunion = $affichage_lieux_reunion['LI_Libelle'];
    return $affichages_lieux_reunion;

}

//fonction qui recupere le choix des lieux
function lieux_restant ($bdd, $lieux_reunion)
{
    $lieux_restant = $bdd->prepare("SELECT LI_Libelle FROM Lieu WHERE LI_Libelle NOT IN (:lieux_choisit)");
    $lieux_restant->bindValue(':lieux_choisit', $lieux_reunion);
    $lieux_restant->execute();
    //on stocke le résultat de la requête dans un array
    $List_lieux_restant = $lieux_restant->fetchall();
    return $List_lieux_restant;
}


function affichage_date_reunion($bdd, $id_dis)
{
    $affichage_date_reunion = $bdd->prepare("SELECT DR_Date FROM Disponible JOIN Date_Reunion DR on Disponible.FK_DR = DR.ID_DR
    WHERE ID_DIS= :id_dis");
    $affichage_date_reunion->bindValue(':id_dis', $id_dis);
    $affichage_date_reunion->execute();
    $affichage_dates_reunion=$affichage_date_reunion->fetch();
    $affichages_dates_reunion = $affichage_dates_reunion['DR_Date'];
    return $affichages_dates_reunion;

}

function affichage_date_validiter_reunion($bdd, $id_dis)
{

    $affichage_date_validiter_reunion = $bdd->prepare("SELECT RE_Fin_Valide FROM Disponible JOIN Reunion R on Disponible.FK_RE = R.ID_RE
    WHERE ID_DIS= :id_dis");
    $affichage_date_validiter_reunion->bindValue(':id_dis', $id_dis);
    $affichage_date_validiter_reunion->execute();
    $affichage_dates_validiter_reunion=$affichage_date_validiter_reunion->fetch();
    $affichages_dates_validiter_reunion = $affichage_dates_validiter_reunion['RE_Fin_Valide'];
    return $affichages_dates_validiter_reunion;
}

function affichage_creneau_debut_reunion($bdd, $id_dis)
{
    $affichage_creneau_debut = $bdd->prepare("SELECT DR_Creneau_Debut FROM Disponible JOIN Date_Reunion DR on Disponible.FK_DR = DR.ID_DR
    WHERE ID_DIS= :id_dis");
    $affichage_creneau_debut->bindValue(':id_dis', $id_dis);
    $affichage_creneau_debut->execute();
    $affichage_creneaux_debut=$affichage_creneau_debut->fetch();
    $affichages_creneaux_debut = $affichage_creneaux_debut['DR_Creneau_Debut'];
    return $affichages_creneaux_debut;
}

function affichage_creneau_fin_reunion($bdd, $id_dis)
{
    $affichage_creneau_fin = $bdd->prepare("SELECT DR_Creneau_Fin FROM Disponible JOIN Date_Reunion DR on Disponible.FK_DR = DR.ID_DR
    WHERE ID_DIS= :id_dis");
    $affichage_creneau_fin->bindValue(':id_dis', $id_dis);
    $affichage_creneau_fin->execute();
    $affichage_creneaux_fin=$affichage_creneau_fin->fetch();
    $affichages_creneaux_fin = $affichage_creneaux_fin['DR_Creneau_Fin'];
    return $affichages_creneaux_fin;
}

function affichage_verif_personne_reunion($bdd, $id_dis)
{
    $affichage_verif_personne_reunion = $bdd->prepare("SELECT DIS_Priorité FROM Disponible  WHERE ID_DIS= :id_dis");
    $affichage_verif_personne_reunion ->bindValue(':id_dis', $id_dis);
    $affichage_verif_personne_reunion ->execute();
    $affichage_verif_personnes_reunion =$affichage_verif_personne_reunion ->fetch();
    $affichages_verif_personnes_reunion = $affichage_verif_personnes_reunion ['DIS_Priorité'];
    return $affichages_verif_personnes_reunion;
}

function affichage_personne_reunion($bdd, $id_dis)
{
    $affichage_personne_reunion = $bdd->prepare("SELECT CONCAT(UT_Nom,' ',UT_PRENOM) as nom FROM Disponible join Utilisateur U on Disponible.FK_UT = U.UT_MAIL
    WHERE ID_DIS= :id_dis");
    $affichage_personne_reunion->bindValue(':id_dis', $id_dis);
    $affichage_personne_reunion->execute();
    $affichage_personnes_reunion=$affichage_personne_reunion->fetch();
    $affichages_personnes_reunion = $affichage_personnes_reunion['nom'];
    return $affichages_personnes_reunion;
}

//fonction qui recupere le choix des utilisateur
function choix_personne($bdd, $personne_reunion){

    $prepare_personne = $bdd->prepare("SELECT CONCAT (UT_NOM,' ',UT_PRENOM) as user FROM Utilisateur WHERE CONCAT (UT_NOM,' ',UT_PRENOM) NOT IN (:personne_reunion)");
    $prepare_personne->bindValue(':personne_reunion', $personne_reunion);
    $prepare_personne->execute();
    //on stocke le résultat de la requête dans un array
    $arrListe_personne = $prepare_personne->fetchall();
    return $arrListe_personne;
}

function update_objet_reunion($bdd, $id_dis, $update_objet)
{
    $objet_reunion = $bdd->prepare("UPDATE Disponible JOIN Reunion R on Disponible.FK_RE = R.ID_RE SET RE_Object = :objet WHERE ID_DIS = :id_dis");
    $objet_reunion->bindValue(':id_dis', $id_dis);
    $objet_reunion->bindValue(':objet', $update_objet);
    $objet_reunion->execute();
}

function update_description_reunion($bdd, $id_dis, $update_description)
{
    $description_reunion = $bdd->prepare("UPDATE Disponible JOIN Reunion R on Disponible.FK_RE = R.ID_RE SET RE_Description = :description WHERE ID_DIS = :id_dis");
    $description_reunion->bindValue(':id_dis', $id_dis);
    $description_reunion->bindValue(':description', $update_description);
    $description_reunion->execute();
}

function update_lieu_reunion($bdd, $id_dis, $update_lieux, $update_selected_lieux)
{
    if (!empty($update_lieux)){
    $lieux_reunion = $bdd->prepare("UPDATE Disponible JOIN  Reunion R on Disponible.FK_RE = R.ID_RE join Lieu L on R.FK_LI = L.ID_LI SET LI_Libelle = :lieux
    WHERE ID_DIS = :id_dis");
    $lieux_reunion->bindValue(':id_dis', $id_dis);
    $lieux_reunion->bindValue(':lieux', $update_lieux);
    $lieux_reunion->execute();
    }

    else {
        $selected_lieux_reunion = $bdd->prepare("UPDATE Disponible JOIN  Reunion R on Disponible.FK_RE = R.ID_RE join Lieu L on R.FK_LI = L.ID_LI 
        SET LI_Libelle = :lieux WHERE ID_DIS = :id_dis");
        $selected_lieux_reunion->bindValue(':id_dis', $id_dis);
        $selected_lieux_reunion->bindValue(':lieux', $update_selected_lieux);
        $selected_lieux_reunion->execute();
    }
}

function update_date_reunion($bdd, $id_dis, $update_date_reunion_1)
{
    $date_reunion= $bdd-> prepare("UPDATE Disponible JOIN Date_Reunion DR on Disponible.FK_DR = DR.ID_DR SET DR_Date = :date_reunion WHERE ID_DIS = :id_dis");
    $date_reunion->bindValue(':id_dis', $id_dis);
    $date_reunion->bindValue(':date_reunion', $update_date_reunion_1);
    $date_reunion->execute();
}

function update_date_validiter($bdd, $id_dis, $update_date_validite)
{
    $date_validite= $bdd-> prepare("UPDATE Disponible JOIN Reunion R on Disponible.FK_RE = R.ID_RE SET RE_Fin_Valide = :date_validite WHERE ID_DIS = :id_dis");
    $date_validite->bindValue(':id_dis', $id_dis);
    $date_validite->bindValue(':date_validite', $update_date_validite);
    $date_validite->execute();
}

function update_creneau_debut_reunion($bdd, $id_dis, $update_creneau_debut_1)
{
    $creneau_debut_reunion= $bdd-> prepare("UPDATE Disponible JOIN Date_Reunion DR on Disponible.FK_DR = DR.ID_DR SET DR_Creneau_Debut = :creneau_debut_reunion
    WHERE ID_DIS = :id_dis");
    $creneau_debut_reunion->bindValue(':id_dis', $id_dis);
    $creneau_debut_reunion->bindValue(':creneau_debut_reunion', $update_creneau_debut_1);
    $creneau_debut_reunion->execute();
}

function update_creneau_fin_reunion($bdd, $id_dis, $update_creneau_fin_1)
{
    $creneau_fin_reunion= $bdd-> prepare("UPDATE Disponible JOIN Date_Reunion DR on Disponible.FK_DR = DR.ID_DR SET DR_Creneau_Fin = :creneau_fin_reunion
    WHERE ID_DIS = :id_dis");
    $creneau_fin_reunion->bindValue(':id_dis', $id_dis);
    $creneau_fin_reunion->bindValue(':creneau_fin_reunion', $update_creneau_fin_1);
    $creneau_fin_reunion->execute();
}

function update_personne_reunion($bdd, $id_dis, $update_personne_inviter_1, $update_personne_indispensable_1)
{
    if(!empty($update_personne_inviter_1) && empty($update_personne_indispensable_1))
    {
        $personne_inviter_reunion = $bdd->prepare("UPDATE Disponible SET DIS_Priorité = 0 and FK_UT = :personne_inviter WHERE ID_DIS = :id_dis");
        $personne_inviter_reunion->bindValue(':id_dis', $id_dis);
        $personne_inviter_reunion->bindValue(':personne_inviter', $update_personne_inviter_1);
        $personne_inviter_reunion->execute();
    }
    else {
        $update_personne_indispensable = $bdd->prepare("UPDATE Disponible SET DIS_Priorité = 1 and FK_UT = :personne_indispensable WHERE ID_DIS = :id_dis");
        $update_personne_indispensable->bindValue(':id_dis', $id_dis);
        $update_personne_indispensable->bindValue(':personne_indispensable', $update_personne_indispensable_1);
        $update_personne_indispensable->execute();
    }
}

?>