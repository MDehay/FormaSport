<?php

function participant_choisit($bdd, $fk_re)
{
    $participant = $bdd->prepare("SELECT * FROM voirparticipant WHERE Reunion = :RE ");
    $participant->bindValue(':RE', $fk_re);
    $participant->execute();
    $participant_chosit=$participant->fetchall();
    return $participant_chosit;
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


?>