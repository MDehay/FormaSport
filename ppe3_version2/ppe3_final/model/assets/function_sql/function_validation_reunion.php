<?php

function participant_choisit($bdd, $fk_re)
{
    $participant = $bdd->prepare("SELECT * FROM voirparticipant WHERE Reunion=1 ");
    $participant->execute();
    return $participant;
}

function user_validation_creneau($bdd, $raison, $choix, $fk_dr, $fk_re, $fk_ut)
{
    $user_validation_creneau=$bdd->prepare("UPDATE Disponible SET DIS_Raison= :Raison, DIS_Choix= :Choix WHERE FK_DR= :DR AND FK_RE= :RE AND FK_UT= :UT ");
    $user_validation_creneau->bindValue(':Raison', $raison);
    $user_validation_creneau->bindValue(':Choix', $choix);
    $user_validation_creneau->bindValue(':DR', $fk_dr);
    $user_validation_creneau->bindValue(':RE', $fk_re);
    $user_validation_creneau->bindValue(':UT', $fk_ut);
    $user_validation_creneau->execute();
}

function admin_validation_creneau($bdd, $fk_re, $fk_dr)
{
    $admin_validation_creneau= $bdd-> prepare("INSERT INTO Reunion_Valide VALUES (null, :RE, :DR)");
    $admin_validation_creneau->bindValue(':RE', $fk_re);
    $admin_validation_creneau->bindValue(':DR', $fk_dr);
    $admin_validation_creneau->execute();
}

function affichage_reunion($bdd)
{
    $validation_vote = $bdd->prepare("SELECT * FROM reponsevote");
    $validation_vote->execute();
    return $validation_vote;
}

function creneau_organisateur($bdd ,$fk_re)
{
    $creneau_organisateur = $bdd->prepare("SELECT * FROM `ReponseVote` WHERE NumeroReunion=:fk_RE");
    $creneau_organisateur->bindValue(":fk_RE", $fk_re);
    $creneau_organisateur->execute();
    return $creneau_organisateur;
}

function creneau_user($bdd, $fk_re, $login)
{
    $creneau_user = $bdd->prepare("SELECT ID_DR, DR_Date, DR_Creneau_Debut, DR_Creneau_Fin, DIS_Raison,
case DIS_Choix  
  WHEN 0 THEN 'aucun vote'
  WHEN 1 THEN 'Disponible'
  ELSE 'Indisponible'
END as DIS_Choix
FROM Disponible 
JOIN Date_Reunion ON Date_Reunion.ID_DR=Disponible.FK_DR WHERE FK_RE = :RE and FK_UT = :users and DIS_Choix=0 and DIS_Raison='AucunRaison'");
    $creneau_user->bindValue(":RE", $fk_re);
    $creneau_user->bindValue(":users", $login);
    $creneau_user->execute();
    return $creneau_user;
}

function info_reunion($bdd)
{
    $info_reunion = $bdd->prepare("select  distinct ID_RE as 'numero reunion', RE_Organisateur as organisateur, RE_Object as 'objet reunion',
       RE_Description as description, LI_Libelle as lieux, RE_Fin_Valide as 'date validiter'
      from disponible
      join reunion on disponible.FK_RE=reunion.ID_RE
      join lieu on reunion.FK_LI=Lieu.ID_LI
      where RE_Fin_Valide>=NOW()
        group by FK_RE");
    $info_reunion->execute();
    return $info_reunion;
}

function nb_vote_reunion($bdd,$fk_re)
{
    $nb_vote_reunion = $bdd->prepare("select  count(`formasport`.`disponible`.`DIS_Choix`) AS `TotalVote`,
       count((case `formasport`.`disponible`.`DIS_Choix` when 0 then 1 else NULL end)) AS `PasVote`,
       count((case `formasport`.`disponible`.`DIS_Choix` when 1 then 1 else NULL end)) AS `Disponible`,
       count((case `formasport`.`disponible`.`DIS_Choix` when 2 then 1 else NULL end)) AS `PasDisponible`,
       count((case `formasport`.`disponible`.`DIS_Choix`
                when 2 then (case `formasport`.`disponible`.`DIS_Priorité` when 1 then 1 else NULL end)
                else NULL end))                                                        AS 'PasDisponiblePriorité',
       count((case `formasport`.`disponible`.`DIS_Choix`
                when 1 then (case `formasport`.`disponible`.`DIS_Priorité` when 1 then 1 else NULL end)
                else NULL end))                                                        AS `DisponiblePriorite`,
       count((case `formasport`.`disponible`.`DIS_Choix`
                when 1 then (case `formasport`.`disponible`.`DIS_Priorité` when 0 then 0 else NULL end)
                else NULL end))                                                        AS `DisponibleInviter`
      from disponible
      join reunion on disponible.FK_RE=reunion.ID_RE
      join lieu on reunion.FK_LI=Lieu.ID_LI
      where FK_RE=:fk_re and RE_Fin_Valide >= NOW()");
    $nb_vote_reunion->bindValue(':fk_re',$fk_re);
    $nb_vote_reunion->execute();
    return $nb_vote_reunion;
}

function nb_creneau_date($bdd, $fk_re)
{
    $nb_creneau_date = $bdd->prepare("SELECT COUNT(FK_DR)
        from disponible
        join reunion on disponible.FK_RE=reunion.ID_RE
        where FK_RE=:fk_re and RE_Fin_Valide >= NOW()");
    $nb_creneau_date->bindValue(':fk_re', $fk_re);
    $nb_creneau_date->execute();
    return $nb_creneau_date;
}

function reunion_date_creation($bdd, $fk_re)
{
    $reunion_date_creation = $bdd->prepare("select DR_Date as date
    from disponible
    join reunion on disponible.FK_RE=reunion.ID_RE
    join date_reunion on disponible.FK_DR=date_reunion.ID_DR
    where ID_RE=:fk_re and RE_Fin_Valide >= NOW()");
    $reunion_date_creation->bindValue(':fk_re', $fk_re);
    $reunion_date_creation->execute();
    return $reunion_date_creation;
}
function creneau_debut_reunion($bdd, $fk_re)
{
    $creneau_debut_reunion = $bdd->prepare("select DR_Creneau_Debut as 'creneau debut'
    from disponible
    join reunion on disponible.FK_RE=reunion.ID_RE
    join date_reunion on disponible.FK_DR=date_reunion.ID_DR
    where ID_RE=:fk_re and RE_Fin_Valide >= NOW()");
    $creneau_debut_reunion->bindValue(':fk_re', $fk_re);
    $creneau_debut_reunion->execute();
    return $creneau_debut_reunion;
}

function creneau_fin_reunion($bdd, $fk_re)
{
    $creneau_fin_reunion = $bdd->prepare("select DR_Creneau_Fin as 'creneau fin'
    from disponible
    join reunion on disponible.FK_RE=reunion.ID_RE
    join date_reunion on disponible.FK_DR=date_reunion.ID_DR
    where ID_RE=:fk_re and RE_Fin_Valide >= NOW()");
    $creneau_fin_reunion->bindValue(':fk_re', $fk_re);
    $creneau_fin_reunion->execute();
    return $creneau_fin_reunion;
}

?>


