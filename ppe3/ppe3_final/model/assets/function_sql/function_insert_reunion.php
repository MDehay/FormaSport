<?php

//fonction qui recupere le choix des lieux
function choix_lieux ($bdd)
{
    $prepare_choix_lieux = $bdd->prepare("SELECT LI_libelle FROM Lieu");
    $prepare_choix_lieux->execute();
    //on stocke le résultat de la requête dans un array
    $arrListe_lieux = $prepare_choix_lieux->fetchall();
    return $arrListe_lieux;
}

//fonction qui recupere le choix des utilisatuer
function choix_personne($bdd){

    $prepare_personne = $bdd->prepare("SELECT CONCAT (UT_NOM,' ',UT_PRENOM) as users FROM Utilisateur");
    $prepare_personne->execute();
    //on stocke le résultat de la requête dans un array
    $arrListe_personne = $prepare_personne->fetchall();
    return $arrListe_personne;
}

//foncton qui recupere les lieux selctionner dans une liste deroulantes
function select_lieu($bdd, $selected_lieu){
    $id_lieu = $bdd->prepare("SELECT ID_LI FROM Lieu WHERE LI_Libelle = :id_lieu");
    $id_lieu->bindValue(':id_lieu', $selected_lieu);
    $id_lieu->execute();
    $place = $id_lieu->fetch();
    $places = $place['ID_LI'];
    return $places;
}

//fonction qui insert dans la base de donnees les nouveaux lieux pour la reunion
function insert_lieu($bdd, $lieu)
{
    $ajout_lieu = $bdd->prepare("INSERT INTO Lieu VALUES (LAST_INSERT_ID(), :lieu)");
    $ajout_lieu->bindValue(':lieu', $lieu);
    $ajout_lieu->execute();
    $id_lieu = $bdd->lastInsertId("ID_LI");
    return $id_lieu;
}

//function qui insert les donnees de la reunion dans la base de donnees
function insert_reunion($bdd, $login,$objet, $description, $date_validite, $id_lieu, $places, $lieu)
{
    if (!empty($lieu)) {
        $reunion = $bdd->prepare("INSERT INTO Reunion 
        VALUES (null,:login,:objet,:description,:date_validite,:liaison_lieu)");
        $reunion->bindValue(':login', $login);
        $reunion->bindValue(':objet', $objet);
        $reunion->bindValue(':description', $description);
        $reunion->bindValue(':date_validite', $date_validite);
        $reunion->bindValue(':liaison_lieu', $id_lieu);
        $reunion->execute();
        $id_reunion = $bdd->lastInsertId("ID_RE");
        return $id_reunion;
    } else {
        $reunion = $bdd->prepare("INSERT INTO Reunion 
       VALUES (null,:login,:objet,:description,:date_validite,:liaison_lieu)");
        $reunion->bindValue(':login', $login);
        $reunion->bindValue(':objet', $objet);
        $reunion->bindValue(':description', $description);
        $reunion->bindValue(':date_validite', $date_validite);
        $reunion->bindValue(':liaison_lieu', $places);
        $reunion->execute();
        $id_reunion = $bdd->lastInsertId("ID_RE");
        return $id_reunion;
    }
}

//voici les function sql qui insert les donnes des creneaux de la reunion dans la de donnees
    function insert_creneau_1($bdd, $date_reunion_1, $creneau_debut_1,$creneau_fin_1)
    {
        $creneau_1 = $bdd->prepare("INSERT INTO Date_Reunion
            VALUES (null, :date_creneau, :creneau_debut,:creneau_fin)");
        $creneau_1->bindValue(':date_creneau', $date_reunion_1);
        $creneau_1->bindValue(':creneau_debut', $creneau_debut_1);
        $creneau_1->bindValue(':creneau_fin', $creneau_fin_1);
        $creneau_1->execute();
        $id_creneau_1 = $bdd->lastInsertId("ID_DR");
        return $id_creneau_1;
    }

    function insert_creneau_2($bdd, $date_reunion_1, $creneau_debut_2,$creneau_fin_2)
    {
        $creneau_2 = $bdd->prepare("INSERT INTO Date_Reunion
           VALUES (null, :date_creneau, :creneau_debut,:creneau_fin)");
        $creneau_2->bindValue(':date_creneau', $date_reunion_1);
        $creneau_2->bindValue(':creneau_debut', $creneau_debut_2);
        $creneau_2->bindValue(':creneau_fin', $creneau_fin_2);
        $creneau_2->execute();
        $id_creneau_2 = $bdd->lastInsertId("ID_DR");
        return $id_creneau_2;
    }

    function insert_creneau_3($bdd, $date_reunion_2, $creneau_debut_3,$creneau_fin_3)
    {
        $creneau_3 = $bdd->prepare("INSERT INTO Date_Reunion
           VALUES (null, :date_creneau, :creneau_debut,:creneau_fin)");
        $creneau_3->bindValue(':date_creneau', $date_reunion_2);
        $creneau_3->bindValue(':creneau_debut', $creneau_debut_3);
        $creneau_3->bindValue(':creneau_fin', $creneau_fin_3);
        $creneau_3->execute();
        $id_creneau_3 = $bdd->lastInsertId("ID_DR");
        return $id_creneau_3;
    }

    function insert_creneau_4($bdd, $date_reunion_2, $creneau_debut_4,$creneau_fin_4)
    {
        $creneau_4 = $bdd->prepare("INSERT INTO Date_Reunion
           VALUES (null, :date_creneau, :creneau_debut,:creneau_fin)");
        $creneau_4->bindValue(':date_creneau', $date_reunion_2);
        $creneau_4->bindValue(':creneau_debut', $creneau_debut_4);
        $creneau_4->bindValue(':creneau_fin', $creneau_fin_4);
        $creneau_4->execute();
        $id_creneau_4 = $bdd->lastInsertId("ID_DR");
        return $id_creneau_4;
    }

    //function qui selectionner l'id de la personne inviter 1
    function select_personne_inviter_1($bdd, $nom_personne_inviter_1, $prenom_personne_inviter_1)
    {
    $select_personne_inviter_1 = $bdd->prepare("SELECT UT_MAIL FROM Utilisateur WHERE UT_Nom= :nom and UT_Prenom= :prenom");
    $select_personne_inviter_1->bindValue(':nom',$nom_personne_inviter_1);
    $select_personne_inviter_1->bindValue(':prenom', $prenom_personne_inviter_1);
    $select_personne_inviter_1->execute();
    $id_select_personne_inviter_1=$select_personne_inviter_1->fetchall();

    return  $id_select_personne_inviter_1;
    }

    //function qui insert les donnees de la reunion avec les creneaux et les utilisateurs de la personne inviter 1
    function insert_personne_inviter_1($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_1)
    {
        if(!empty($id_creneau_1) && $id_creneau_1!= null)
        {
            $insert_personne_inviter_1 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
            VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_1->bindValue(':id_users',$id_select_personne_inviter_1);
            $insert_personne_inviter_1->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_1->bindValue(':id_date_reunion', $id_creneau_1);
            $insert_personne_inviter_1->execute();
        }

        if(!empty($id_creneau_2) && $id_creneau_2!= null)
        {
            $insert_personne_inviter_2 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
        VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_2->bindValue(':id_users',$id_select_personne_inviter_1);
            $insert_personne_inviter_2->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_2->bindValue(':id_date_reunion', $id_creneau_2);
            $insert_personne_inviter_2->execute();
        }
        if(!empty($id_creneau_3) && $id_creneau_3!= null)
        {
            $insert_personne_inviter_1 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
            VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_1->bindValue(':id_users',$id_select_personne_inviter_1);
            $insert_personne_inviter_1->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_1->bindValue(':id_date_reunion', $id_creneau_3);
            $insert_personne_inviter_1->execute();
        }
        if(!empty($id_creneau_4) && $id_creneau_4!= null)
        {
            $insert_personne_inviter_1 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
            VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_1->bindValue(':id_users',$id_select_personne_inviter_1);
            $insert_personne_inviter_1->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_1->bindValue(':id_date_reunion', $id_creneau_4);
            $insert_personne_inviter_1->execute();
        }
    }

    //function qui selectionner l'id de la personne indispensable 1
    function select_personne_indispensable_1($bdd, $nom_personne_indispensable_1, $prenom_personne_indispensable_1)
    {
    $select_personne_indispensable_1 = $bdd->prepare("SELECT UT_MAIL FROM Utilisateur WHERE UT_NOM= :nom and UT_PRENOM= :prenom");
    $select_personne_indispensable_1->bindValue(':nom',$nom_personne_indispensable_1);
    $select_personne_indispensable_1->bindValue(':prenom', $prenom_personne_indispensable_1);
    $select_personne_indispensable_1->execute();
    $id_select_personne_indispensable_1=$select_personne_indispensable_1->fetchall();

    return  $id_select_personne_indispensable_1;
    }

    //function qui insert les donnees de la reunion avec les creneaux et les utilisateurs de la personne indispensable 1
    function insert_personne_indispensable_1($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_1)
    {
        if(!empty($id_creneau_1) && $id_creneau_1!= null)
        {
            $insert_personne_indispensable_1 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité , FK_UT,FK_RE, FK_DR)
        VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_1->bindValue(':priorite', 1);
            $insert_personne_indispensable_1->bindValue(':id_users',$id_select_personne_indispensable_1);
            $insert_personne_indispensable_1->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_1->bindValue(':id_date_reunion', $id_creneau_1);
            $insert_personne_indispensable_1->execute();
        }

        if(!empty($id_creneau_2) && $id_creneau_2!= null)
        {
            $insert_personne_indispensable_1 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité , FK_UT,FK_RE, FK_DR)
        VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_1->bindValue(':priorite', 1);
            $insert_personne_indispensable_1->bindValue(':id_users',$id_select_personne_indispensable_1);
            $insert_personne_indispensable_1->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_1->bindValue(':id_date_reunion', $id_creneau_2);
            $insert_personne_indispensable_1->execute();
        }
        if(!empty($id_creneau_3) && $id_creneau_3!= null)
        {
            $insert_personne_indispensable_1 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité ,FK_UT,FK_RE, FK_DR)
            VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_1->bindValue(':priorite', 1);
            $insert_personne_indispensable_1->bindValue(':id_users',$id_select_personne_indispensable_1);
            $insert_personne_indispensable_1->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_1->bindValue(':id_date_reunion', $id_creneau_3);
            $insert_personne_indispensable_1->execute();
        }
        if(!empty($id_creneau_4) && $id_creneau_4!= null)
        {
            $insert_personne_indispensable_1 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité ,FK_UT,FK_RE, FK_DR)
            VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_1->bindValue('priorite', 1);
            $insert_personne_indispensable_1->bindValue(':id_users',$id_select_personne_indispensable_1);
            $insert_personne_indispensable_1->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_1->bindValue(':id_date_reunion', $id_creneau_4);
            $insert_personne_indispensable_1->execute();
        }
    }

    //function qui selectionner l'id de la personne inviter 2
    function select_personne_inviter_2($bdd, $nom_personne_inviter_2, $prenom_personne_inviter_2)
    {
    $select_personne_inviter_2 = $bdd->prepare("SELECT UT_MAIL FROM Utilisateur WHERE UT_NOM= :nom and UT_PRENOM= :prenom");
    $select_personne_inviter_2->bindValue(':nom',$nom_personne_inviter_2);
    $select_personne_inviter_2->bindValue(':prenom', $prenom_personne_inviter_2);
    $select_personne_inviter_2->execute();
    $id_select_personne_inviter_2=$select_personne_inviter_2->fetchall();
    return $id_select_personne_inviter_2;
    }

    //function qui insert les donnees de la reunion avec les creneaux et les utilisateurs de la personne inviter 2
    function insert_personne_inviter_2($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_2)
    {
        if(!empty($id_creneau_1) && $id_creneau_1!= null)
        {
            $insert_personne_inviter_2 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
            VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_2->bindValue(':id_users',$id_select_personne_inviter_2);
            $insert_personne_inviter_2->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_2->bindValue(':id_date_reunion', $id_creneau_1);
            $insert_personne_inviter_2->execute();
        }

        if(!empty($id_creneau_2) && $id_creneau_2!= null)
        {
            $insert_personne_inviter_2 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
        VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_2->bindValue(':id_users',$id_select_personne_inviter_2);
            $insert_personne_inviter_2->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_2->bindValue(':id_date_reunion', $id_creneau_2);
            $insert_personne_inviter_2->execute();
        }
        if(!empty($id_creneau_3) && $id_creneau_3!= null)
        {
            $insert_personne_inviter_2 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
            VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_2->bindValue(':id_users',$id_select_personne_inviter_2);
            $insert_personne_inviter_2->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_2->bindValue(':id_date_reunion', $id_creneau_3);
            $insert_personne_inviter_2->execute();
        }
        if(!empty($id_creneau_4) && $id_creneau_4!= null)
        {
            $insert_personne_inviter_2 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
            VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_2->bindValue(':id_users',$id_select_personne_inviter_2);
            $insert_personne_inviter_2->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_2->bindValue(':id_date_reunion', $id_creneau_4);
            $insert_personne_inviter_2->execute();
        }
    }

    //function qui selectionner l'id de la personne indispensable 2
    function select_personne_indispensable_2($bdd, $nom_personne_indispensable_2, $prenom_personne_indispensable_2)
    {
    $select_personne_indispensable_2 = $bdd->prepare("SELECT UT_MAIL FROM Utilisateur WHERE UT_NOM= :nom and UT_PRENOM= :prenom");
    $select_personne_indispensable_2->bindValue(':nom',$nom_personne_indispensable_2);
    $select_personne_indispensable_2->bindValue(':prenom', $prenom_personne_indispensable_2);
    $select_personne_indispensable_2->execute();
    $id_select_personne_indispensable_2=$select_personne_indispensable_2->fetchall();
    return $id_select_personne_indispensable_2;

    }

    //function qui insert les donnees de la reunion avec les creneaux et les utilisateurs de la personne indispensable 2
    function insert_personne_indispensable_2($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_2)
    {
        if(!empty($id_creneau_1) && $id_creneau_1!= null)
        {
            $insert_personne_indispensable_2 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité,FK_UT,FK_RE, FK_DR)
            VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_2->bindValue(':priorite', 1);
            $insert_personne_indispensable_2->bindValue(':id_users',$id_select_personne_indispensable_2);
            $insert_personne_indispensable_2->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_2->bindValue(':id_date_reunion', $id_creneau_1);
            $insert_personne_indispensable_2->execute();
        }

        if(!empty($id_creneau_2) && $id_creneau_2!= null)
        {
            $insert_personne_indispensable_2 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité,FK_UT,FK_RE, FK_DR)
            VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_2->bindValue(':priorite', 1);
            $insert_personne_indispensable_2->bindValue(':id_users',$id_select_personne_indispensable_2);
            $insert_personne_indispensable_2->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_2->bindValue(':id_date_reunion', $id_creneau_2);
            $insert_personne_indispensable_2->execute();
        }
        if(!empty($id_creneau_3) && $id_creneau_3!= null)
        {
            $insert_personne_indispensable_2 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité,FK_UT,FK_RE, FK_DR)
            VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_2->bindValue(':priorite', 1);
            $insert_personne_indispensable_2->bindValue(':id_users',$id_select_personne_indispensable_2);
            $insert_personne_indispensable_2->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_2->bindValue(':id_date_reunion', $id_creneau_3);
            $insert_personne_indispensable_2->execute();
        }
        if(!empty($id_creneau_4) && $id_creneau_4!= null)
        {
            $insert_personne_indispensable_2 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité,FK_UT,FK_RE, FK_DR)
            VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_2->bindValue('priorite', 1);
            $insert_personne_indispensable_2->bindValue(':id_users',$id_select_personne_indispensable_2);
            $insert_personne_indispensable_2->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_2->bindValue(':id_date_reunion', $id_creneau_4);
            $insert_personne_indispensable_2->execute();
        }
    }

    //function qui selectionner l'id de la personne inviter 3
    function select_personne_inviter_3($bdd, $nom_personne_inviter_3, $prenom_personne_inviter_3)
    {
    $select_personne_inviter_3 = $bdd->prepare("SELECT UT_MAIL FROM Utilisateur WHERE UT_NOM= :nom and UT_PRENOM= :prenom");
    $select_personne_inviter_3->bindValue(':nom',$nom_personne_inviter_3);
    $select_personne_inviter_3->bindValue(':prenom', $prenom_personne_inviter_3);
    $select_personne_inviter_3->execute();
    $id_select_personne_inviter_3=$select_personne_inviter_3->fetchall();
    return $id_select_personne_inviter_3;
    }

    //function qui insert les donnees de la reunion avec les creneaux et les utilisateurs de la personne inviter 3
    function insert_personne_inviter_3($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_3)
    {
        if(!empty($id_creneau_1) && $id_creneau_1!= null)
        {
            $insert_personne_inviter_3 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
            VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_3->bindValue(':id_users',$id_select_personne_inviter_3);
            $insert_personne_inviter_3->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_3->bindValue(':id_date_reunion', $id_creneau_1);
            $insert_personne_inviter_3->execute();
        }

        if(!empty($id_creneau_2) && $id_creneau_2!= null)
        {
            $insert_personne_inviter_3 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
        VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_3->bindValue(':id_users',$id_select_personne_inviter_3);
            $insert_personne_inviter_3->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_3->bindValue(':id_date_reunion', $id_creneau_2);
            $insert_personne_inviter_3->execute();
        }
        if(!empty($id_creneau_3) && $id_creneau_3!= null)
        {
            $insert_personne_inviter_3 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
            VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_3->bindValue(':id_users',$id_select_personne_inviter_3);
            $insert_personne_inviter_3->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_3->bindValue(':id_date_reunion', $id_creneau_3);
            $insert_personne_inviter_3->execute();
        }
        if(!empty($id_creneau_4) && $id_creneau_4!= null)
        {
            $insert_personne_inviter_3 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
            VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_3->bindValue(':id_users',$id_select_personne_inviter_3);
            $insert_personne_inviter_3->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_3->bindValue(':id_date_reunion', $id_creneau_4);
            $insert_personne_inviter_3->execute();
        }
    }

    //function qui selectionner l'id de la personne indispensable 3
    function select_personne_indispensable_3($bdd, $nom_personne_indispensable_3, $prenom_personne_indispensable_3)
    {
    $select_personne_indispensable_3= $bdd->prepare("SELECT UT_MAIL FROM Utilisateur WHERE UT_NOM= :nom and UT_PRENOM= :prenom");
    $select_personne_indispensable_3->bindValue(':nom',$nom_personne_indispensable_3);
    $select_personne_indispensable_3->bindValue(':prenom', $prenom_personne_indispensable_3);
    $select_personne_indispensable_3->execute();
    $id_select_personne_indispensable_3=$select_personne_indispensable_3->fetchall();
    return $id_select_personne_indispensable_3;
    }

    //function qui insert les donnees de la reunion avec les creneaux et les utilisateurs de la personne indispensable 3
    function insert_personne_indispensable_3($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_3)
    {
        if(!empty($id_creneau_1) && $id_creneau_1!= null)
        {
            $insert_personne_indispensable_3 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité,FK_UT,FK_RE, FK_DR)
            VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_3->bindValue(':priorite', 1);
            $insert_personne_indispensable_3->bindValue(':id_users',$id_select_personne_indispensable_3);
            $insert_personne_indispensable_3->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_3->bindValue(':id_date_reunion', $id_creneau_1);
            $insert_personne_indispensable_3->execute();
        }

        if(!empty($id_creneau_2) && $id_creneau_2!= null)
        {
            $insert_personne_indispensable_3 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité,FK_UT,FK_RE, FK_DR)
            VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_3->bindValue(':priorite', 1);
            $insert_personne_indispensable_3->bindValue(':id_users',$id_select_personne_indispensable_3);
            $insert_personne_indispensable_3->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_3->bindValue(':id_date_reunion', $id_creneau_2);
            $insert_personne_indispensable_3->execute();
        }
        if(!empty($id_creneau_3) && $id_creneau_3!= null)
        {
            $insert_personne_indispensable_3 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité,FK_UT,FK_RE, FK_DR)
            VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_3->bindValue(':priorite', 1);
            $insert_personne_indispensable_3->bindValue(':id_users',$id_select_personne_indispensable_3);
            $insert_personne_indispensable_3->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_3->bindValue(':id_date_reunion', $id_creneau_3);
            $insert_personne_indispensable_3->execute();
        }
        if(!empty($id_creneau_4) && $id_creneau_4!= null)
        {
            $insert_personne_indispensable_3 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité,FK_UT,FK_RE, FK_DR)
            VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_3->bindValue('priorite', 1);
            $insert_personne_indispensable_3->bindValue(':id_users',$id_select_personne_indispensable_3);
            $insert_personne_indispensable_3->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_3->bindValue(':id_date_reunion', $id_creneau_4);
            $insert_personne_indispensable_3->execute();
        }
    }

    //function qui selectionner l'id de la personne inviter 4
    function select_personne_inviter_4($bdd, $nom_personne_inviter_4, $prenom_personne_inviter_4)
    {
    $select_personne_inviter_4 = $bdd->prepare("SELECT UT_MAIL FROM Utilisateur WHERE UT_NOM= :nom and UT_PRENOM= :prenom");
    $select_personne_inviter_4->bindValue(':nom',$nom_personne_inviter_4);
    $select_personne_inviter_4->bindValue(':prenom', $prenom_personne_inviter_4);
    $select_personne_inviter_4->execute();
    $id_select_personne_inviter_4=$select_personne_inviter_4->fetchall();
    return $id_select_personne_inviter_4;
    }

    //function qui insert les donnees de la reunion avec les creneaux et les utilisateurs de la personne inviter 4
    function insert_personne_inviter_4($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_4)
    {
        if(!empty($id_creneau_1) && $id_creneau_1!= null)
        {
            $insert_personne_inviter_4 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
            VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_4->bindValue(':id_users',$id_select_personne_inviter_4);
            $insert_personne_inviter_4->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_4->bindValue(':id_date_reunion', $id_creneau_1);
            $insert_personne_inviter_4->execute();
        }

        if(!empty($id_creneau_2) && $id_creneau_2!= null)
        {
            $insert_personne_inviter_4 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
        VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_4->bindValue(':id_users',$id_select_personne_inviter_4);
            $insert_personne_inviter_4->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_4->bindValue(':id_date_reunion', $id_creneau_2);
            $insert_personne_inviter_4->execute();
        }
        if(!empty($id_creneau_3) && $id_creneau_3!= null)
        {
            $insert_personne_inviter_4 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
            VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_4->bindValue(':id_users',$id_select_personne_inviter_4);
            $insert_personne_inviter_4->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_4->bindValue(':id_date_reunion', $id_creneau_3);
            $insert_personne_inviter_4->execute();
        }
        if(!empty($id_creneau_4) && $id_creneau_4!= null)
        {
            $insert_personne_inviter_4 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
            VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_4->bindValue(':id_users',$id_select_personne_inviter_4);
            $insert_personne_inviter_4->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_4->bindValue(':id_date_reunion', $id_creneau_4);
            $insert_personne_inviter_4->execute();
        }
    }

    //function qui selectionner l'id de la personne indispensable 4
    function select_personne_indispensable_4($bdd, $nom_personne_indispensable_4, $prenom_personne_indispensable_4)
    {
    $select_personne_indispensable_4 = $bdd->prepare("SELECT UT_MAIL FROM Utilisateur WHERE UT_NOM= :nom and UT_PRENOM= :prenom");
    $select_personne_indispensable_4->bindValue(':nom',$nom_personne_indispensable_4);
    $select_personne_indispensable_4->bindValue(':prenom', $prenom_personne_indispensable_4);
    $select_personne_indispensable_4->execute();
    $id_select_personne_indispensable_4=$select_personne_indispensable_4->fetchall();
    return $id_select_personne_indispensable_4;
    }

    //function qui insert les donnees de la reunion avec les creneaux et les utilisateurs de la personne indispensable 4
    function insert_personne_indispensable_4($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_4)
    {
        if(!empty($id_creneau_1) && $id_creneau_1!= null)
        {
            $insert_personne_indispensable_4 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité,FK_UT,FK_RE, FK_DR)
            VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_4->bindValue(':priorite', 1);
            $insert_personne_indispensable_4->bindValue(':id_users',$id_select_personne_indispensable_4);
            $insert_personne_indispensable_4->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_4->bindValue(':id_date_reunion', $id_creneau_1);
            $insert_personne_indispensable_4->execute();
        }

        if(!empty($id_creneau_2) && $id_creneau_2!= null)
        {
            $insert_personne_indispensable_4 =$bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité,FK_UT,FK_RE, FK_DR)
            VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_4->bindValue(':priorite', 1);
            $insert_personne_indispensable_4->bindValue(':id_users',$id_select_personne_indispensable_4);
            $insert_personne_indispensable_4->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_4->bindValue(':id_date_reunion', $id_creneau_2);
            $insert_personne_indispensable_4->execute();
        }
        if(!empty($id_creneau_3) && $id_creneau_3!= null)
        {
            $insert_personne_indispensable_4 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité,FK_UT,FK_RE, FK_DR)
            VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_4->bindValue(':priorite', 1);
            $insert_personne_indispensable_4->bindValue(':id_users',$id_select_personne_indispensable_4);
            $insert_personne_indispensable_4->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_4->bindValue(':id_date_reunion', $id_creneau_3);
            $insert_personne_indispensable_4->execute();
        }
        if(!empty($id_creneau_4) && $id_creneau_4!= null)
        {
            $insert_personne_indispensable_4 =$bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité,FK_UT,FK_RE, FK_DR)
            VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_4->bindValue('priorite', 1);
            $insert_personne_indispensable_4->bindValue(':id_users',$id_select_personne_indispensable_4);
            $insert_personne_indispensable_4->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_4->bindValue(':id_date_reunion', $id_creneau_4);
            $insert_personne_indispensable_4->execute();
        }
    }

    //function qui selectionner l'id de la personne inviter 5
    function select_personne_inviter_5($bdd, $nom_personne_inviter_5, $prenom_personne_inviter_5)
    {
    $select_personne_inviter_5 = $bdd->prepare("SELECT UT_MAIL FROM Utilisateur WHERE UT_NOM= :nom and UT_PRENOM= :prenom");
    $select_personne_inviter_5->bindValue(':nom',$nom_personne_inviter_5);
    $select_personne_inviter_5->bindValue(':prenom', $prenom_personne_inviter_5);
    $select_personne_inviter_5->execute();
    $id_select_personne_inviter_5=$select_personne_inviter_5->fetchall();
    return $id_select_personne_inviter_5;
    }

    //function qui insert les donnees de la reunion avec les creneaux et les utilisateurs de la personne inviter 5
    function insert_personne_inviter_5($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_5)
    {
        if(!empty($id_creneau_1) && $id_creneau_1!= null)
        {
            $insert_personne_inviter_5 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
            VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_5->bindValue(':id_users',$id_select_personne_inviter_5);
            $insert_personne_inviter_5->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_5->bindValue(':id_date_reunion', $id_creneau_1);
            $insert_personne_inviter_5->execute();
        }

        if(!empty($id_creneau_2) && $id_creneau_2!= null)
        {
            $insert_personne_inviter_5 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
        VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_5->bindValue(':id_users',$id_select_personne_inviter_5);
            $insert_personne_inviter_5->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_5->bindValue(':id_date_reunion', $id_creneau_2);
            $insert_personne_inviter_5->execute();
        }
        if(!empty($id_creneau_3) && $id_creneau_3!= null)
        {
            $insert_personne_inviter_5 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
            VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_5->bindValue(':id_users',$id_select_personne_inviter_5);
            $insert_personne_inviter_5->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_5->bindValue(':id_date_reunion', $id_creneau_3);
            $insert_personne_inviter_5->execute();
        }
        if(!empty($id_creneau_4) && $id_creneau_4!= null)
        {
            $insert_personne_inviter_5 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
            VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_5->bindValue(':id_users',$id_select_personne_inviter_5);
            $insert_personne_inviter_5->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_5->bindValue(':id_date_reunion', $id_creneau_4);
            $insert_personne_inviter_5->execute();
        }
    }

    //function qui selectionner l'id de la personne indispensable 5
    function select_personne_indispensable_5($bdd, $nom_personne_indispensable_5, $prenom_personne_indispensable_5)
    {
    $select_personne_indispensable_5 = $bdd->prepare("SELECT UT_MAIL FROM Utilisateur WHERE UT_NOM= :nom and UT_PRENOM= :prenom");
    $select_personne_indispensable_5->bindValue(':nom',$nom_personne_indispensable_5);
    $select_personne_indispensable_5->bindValue(':prenom', $prenom_personne_indispensable_5);
    $select_personne_indispensable_5->execute();
    $id_select_personne_indispensable_5=$select_personne_indispensable_5->fetchall();
    return $id_select_personne_indispensable_5;
    }

    //function qui insert les donnees de la reunion avec les creneaux et les utilisateurs de la personne indispensable 5
    function insert_personne_indispensable_5($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_5)
    {
        if(!empty($id_creneau_1) && $id_creneau_1!= null)
        {
            $insert_personne_indispensable_5 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité,FK_UT,FK_RE, FK_DR)
            VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_5->bindValue(':priorite', 1);
            $insert_personne_indispensable_5->bindValue(':id_users',$id_select_personne_indispensable_5);
            $insert_personne_indispensable_5->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_5->bindValue(':id_date_reunion', $id_creneau_1);
            $insert_personne_indispensable_5->execute();
        }

        if(!empty($id_creneau_2) && $id_creneau_2!= null)
        {
            $insert_personne_indispensable_5 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité,FK_UT,FK_RE, FK_DR)
            VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_5->bindValue(':priorite', 1);
            $insert_personne_indispensable_5->bindValue(':id_users',$id_select_personne_indispensable_5);
            $insert_personne_indispensable_5->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_5->bindValue(':id_date_reunion', $id_creneau_2);
            $insert_personne_indispensable_5->execute();
        }
        if(!empty($id_creneau_3) && $id_creneau_3!= null)
        {
            $insert_personne_indispensable_5 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité,FK_UT,FK_RE, FK_DR)
            VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_5->bindValue(':priorite', 1);
            $insert_personne_indispensable_5->bindValue(':id_users',$id_select_personne_indispensable_5);
            $insert_personne_indispensable_5->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_5->bindValue(':id_date_reunion', $id_creneau_3);
            $insert_personne_indispensable_5->execute();
        }
        if(!empty($id_creneau_4) && $id_creneau_4!= null)
        {
            $insert_personne_indispensable_5 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité,FK_UT,FK_RE, FK_DR)
            VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_5->bindValue('priorite', 1);
            $insert_personne_indispensable_5->bindValue(':id_users',$id_select_personne_indispensable_5);
            $insert_personne_indispensable_5->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_5->bindValue(':id_date_reunion', $id_creneau_4);
            $insert_personne_indispensable_5->execute();
        }
    }

    //function qui selectionner l'id de la personne inviter 6
    function select_personne_inviter_6($bdd, $nom_personne_inviter_6, $prenom_personne_inviter_6)
    {
    $select_personne_inviter_6 = $bdd->prepare("SELECT UT_MAIL FROM Utilisateur WHERE UT_NOM= :nom and UT_PRENOM= :prenom");
    $select_personne_inviter_6->bindValue(':nom',$nom_personne_inviter_6);
    $select_personne_inviter_6->bindValue(':prenom', $prenom_personne_inviter_6);
    $select_personne_inviter_6->execute();
    $id_select_personne_inviter_6=$select_personne_inviter_6->fetchall();
    return $id_select_personne_inviter_6;
    }

    //function qui insert les donnees de la reunion avec les creneaux et les utilisateurs de la personne inviter 6
    function insert_personne_inviter_6($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_6)
    {
        if(!empty($id_creneau_1) && $id_creneau_1!= null)
        {
            $insert_personne_inviter_6 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
            VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_6->bindValue(':id_users',$id_select_personne_inviter_6);
            $insert_personne_inviter_6->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_6->bindValue(':id_date_reunion', $id_creneau_1);
            $insert_personne_inviter_6->execute();
        }

        if(!empty($id_creneau_2) && $id_creneau_2!= null)
        {
            $insert_personne_inviter_6 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
        VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_6->bindValue(':id_users',$id_select_personne_inviter_6);
            $insert_personne_inviter_6->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_6->bindValue(':id_date_reunion', $id_creneau_2);
            $insert_personne_inviter_6->execute();
        }
        if(!empty($id_creneau_3) && $id_creneau_3!= null)
        {
            $insert_personne_inviter_6 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
            VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_6->bindValue(':id_users',$id_select_personne_inviter_6);
            $insert_personne_inviter_6->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_6->bindValue(':id_date_reunion', $id_creneau_3);
            $insert_personne_inviter_6->execute();
        }
        if(!empty($id_creneau_4) && $id_creneau_4!= null)
        {
            $insert_personne_inviter_6 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
            VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_6->bindValue(':id_users',$id_select_personne_inviter_6);
            $insert_personne_inviter_6->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_6->bindValue(':id_date_reunion', $id_creneau_4);
            $insert_personne_inviter_6->execute();
        }
    }

    //function qui selectionner l'id de la personne indispensable 6
    function select_personne_indispensable_6($bdd, $nom_personne_indispensable_6, $prenom_personne_indispensable_6)
    {
    $select_personne_indispensable_6 = $bdd->prepare("SELECT UT_MAIL FROM Utilisateur WHERE UT_NOM= :nom and UT_PRENOM= :prenom");
    $select_personne_indispensable_6->bindValue(':nom',$nom_personne_indispensable_6);
    $select_personne_indispensable_6->bindValue(':prenom', $prenom_personne_indispensable_6);
    $select_personne_indispensable_6->execute();
    $id_select_personne_indispensable_6=$select_personne_indispensable_6->fetchall();
    return $id_select_personne_indispensable_6;
    }

    //function qui insert les donnees de la reunion avec les creneaux et les utilisateurs de la personne indispensable 6
    function insert_personne_indispensable_6($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_6)
    {
        if(!empty($id_creneau_1) && $id_creneau_1!= null)
        {
            $insert_personne_indispensable_6 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité,FK_UT,FK_RE, FK_DR)
            VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_6->bindValue(':priorite', 1);
            $insert_personne_indispensable_6->bindValue(':id_users',$id_select_personne_indispensable_6);
            $insert_personne_indispensable_6->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_6->bindValue(':id_date_reunion', $id_creneau_1);
            $insert_personne_indispensable_6->execute();
        }

        if(!empty($id_creneau_2) && $id_creneau_2!= null)
        {
            $insert_personne_indispensable_6 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité,FK_UT,FK_RE, FK_DR)
            VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_6->bindValue(':priorite', 1);
            $insert_personne_indispensable_6->bindValue(':id_users',$id_select_personne_indispensable_6);
            $insert_personne_indispensable_6->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_6->bindValue(':id_date_reunion', $id_creneau_2);
            $insert_personne_indispensable_6->execute();
        }
        if(!empty($id_creneau_3) && $id_creneau_3!= null)
        {
            $insert_personne_indispensable_6 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité,FK_UT,FK_RE, FK_DR)
            VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_6->bindValue(':priorite', 1);
            $insert_personne_indispensable_6->bindValue(':id_users',$id_select_personne_indispensable_6);
            $insert_personne_indispensable_6->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_6->bindValue(':id_date_reunion', $id_creneau_3);
            $insert_personne_indispensable_6->execute();
        }
        if(!empty($id_creneau_4) && $id_creneau_4!= null)
        {
            $insert_personne_indispensable_6 =$bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité,FK_UT,FK_RE, FK_DR)
            VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_6->bindValue('priorite', 1);
            $insert_personne_indispensable_6->bindValue(':id_users',$id_select_personne_indispensable_6);
            $insert_personne_indispensable_6->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_6->bindValue(':id_date_reunion', $id_creneau_4);
            $insert_personne_indispensable_6->execute();
        }
    }

    //function qui selectionner l'id de la personne inviter 7
    function select_personne_inviter_7($bdd, $nom_personne_inviter_7, $prenom_personne_inviter_7)
    {
    $select_personne_inviter_7 = $bdd->prepare("SELECT UT_MAIL FROM Utilisateur WHERE UT_NOM= :nom and UT_PRENOM= :prenom");
    $select_personne_inviter_7->bindValue(':nom',$nom_personne_inviter_7);
    $select_personne_inviter_7->bindValue(':prenom', $prenom_personne_inviter_7);
    $select_personne_inviter_7->execute();
    $id_select_personne_inviter_7=$select_personne_inviter_7->fetchall();
    return $id_select_personne_inviter_7;
    }

    //function qui insert les donnees de la reunion avec les creneaux et les utilisateurs de la personne inviter 7
    function insert_personne_inviter_7($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_inviter_7)
    {
        if (!empty($id_creneau_1) && $id_creneau_1 != null) {
            $insert_personne_inviter_7 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
            VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_7->bindValue(':id_users', $id_select_personne_inviter_7);
            $insert_personne_inviter_7->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_7->bindValue(':id_date_reunion', $id_creneau_1);
            $insert_personne_inviter_7->execute();
        }

        if (!empty($id_creneau_2) && $id_creneau_2 != null) {
            $insert_personne_inviter_7 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
        VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_7->bindValue(':id_users', $id_select_personne_inviter_7);
            $insert_personne_inviter_7->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_7->bindValue(':id_date_reunion', $id_creneau_2);
            $insert_personne_inviter_7->execute();
        }
        if (!empty($id_creneau_3) && $id_creneau_3 != null) {
            $insert_personne_inviter_7 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
            VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_inviter_7->bindValue(':id_users', $id_select_personne_inviter_7);
            $insert_personne_inviter_7->bindValue(':id_reunion', $id_reunion);
            $insert_personne_inviter_7->bindValue(':id_date_reunion', $id_creneau_3);
            $insert_personne_inviter_7->execute();
            }

            if (!empty($id_creneau_4) && $id_creneau_4 != null) {
                $insert_personne_inviter_7 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, FK_UT,FK_RE, FK_DR)
            VALUES(null, :id_users , :id_reunion, :id_date_reunion)");
                $insert_personne_inviter_7->bindValue(':id_users', $id_select_personne_inviter_7);
                $insert_personne_inviter_7->bindValue(':id_reunion', $id_reunion);
                $insert_personne_inviter_7->bindValue(':id_date_reunion', $id_creneau_4);
                $insert_personne_inviter_7->execute();
            }
    }

    //function qui selectionner l'id de la personne indispensable 7
    function select_personne_indispensable_7($bdd, $nom_personne_indispensable_7, $prenom_personne_indispensable_7)
    {
    $select_personne_indispensable_7 = $bdd->prepare("SELECT UT_MAIL FROM Utilisateur WHERE UT_NOM= :nom and UT_PRENOM= :prenom");
    $select_personne_indispensable_7->bindValue(':nom',$nom_personne_indispensable_7);
    $select_personne_indispensable_7->bindValue(':prenom', $prenom_personne_indispensable_7);
    $select_personne_indispensable_7->execute();
    $id_select_personne_indispensable_7=$select_personne_indispensable_7->fetchall();
    return $id_select_personne_indispensable_7;
    }

    //function qui insert les donnees de la reunion avec les creneaux et les utilisateurs de la personne indispensable 7
    function insert_personne_indispensable_7($bdd, $id_reunion, $id_creneau_1, $id_creneau_2, $id_creneau_3, $id_creneau_4, $id_select_personne_indispensable_7)
    {
        if(!empty($id_creneau_1) && $id_creneau_1!= null)
        {
            $insert_personne_indispensable_7 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité,FK_UT,FK_RE, FK_DR)
            VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_7->bindValue(':priorite', 1);
            $insert_personne_indispensable_7->bindValue(':id_users',$id_select_personne_indispensable_7);
            $insert_personne_indispensable_7->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_7->bindValue(':id_date_reunion', $id_creneau_1);
            $insert_personne_indispensable_7->execute();
        }

        if(!empty($id_creneau_2) && $id_creneau_2!= null)
        {
            $insert_personne_indispensable_7 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité,FK_UT,FK_RE, FK_DR)
            VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_7->bindValue(':priorite', 1);
            $insert_personne_indispensable_7->bindValue(':id_users',$id_select_personne_indispensable_7);
            $insert_personne_indispensable_7->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_7->bindValue(':id_date_reunion', $id_creneau_2);
            $insert_personne_indispensable_7->execute();
        }
        if(!empty($id_creneau_3) && $id_creneau_3!= null)
        {
            $insert_personne_indispensable_7 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité,FK_UT,FK_RE, FK_DR)
            VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_7->bindValue(':priorite', 1);
            $insert_personne_indispensable_7->bindValue(':id_users',$id_select_personne_indispensable_7);
            $insert_personne_indispensable_7->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_7->bindValue(':id_date_reunion', $id_creneau_3);
            $insert_personne_indispensable_7->execute();
        }
        if(!empty($id_creneau_4) && $id_creneau_4!= null)
        {
            $insert_personne_indispensable_7 = $bdd->prepare("INSERT INTO Disponible (ID_DIS, DIS_Priorité,FK_UT,FK_RE, FK_DR)
            VALUES(null, :priorite, :id_users , :id_reunion, :id_date_reunion)");
            $insert_personne_indispensable_7->bindValue('priorite', 1);
            $insert_personne_indispensable_7->bindValue(':id_users',$id_select_personne_indispensable_7);
            $insert_personne_indispensable_7->bindValue(':id_reunion', $id_reunion);
            $insert_personne_indispensable_7->bindValue(':id_date_reunion', $id_creneau_4);
            $insert_personne_indispensable_7->execute();
        }
    }




?>