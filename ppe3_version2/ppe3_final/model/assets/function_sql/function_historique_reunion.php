<?php

function ReunionAujourdhui($bdd)
{
    $ReunionAujourdhui = $bdd->prepare("SELECT * FROM `HistorieReunion` WHERE JourReunion = current_date() ");
    $ReunionAujourdhui->execute();
    return $ReunionAujourdhui;
}

function ReunionAvant($bdd)
{
    $ReunionAvant = $bdd->prepare("SELECT * FROM `HistorieReunion` WHERE JourReunion < current_date() ");
    $ReunionAvant->execute();
    return $ReunionAvant;
}

function ReunionBientot($bdd)
{
    $ReunionBientot= $bdd->prepare("SELECT * FROM `HistorieReunion` WHERE JourReunion > current_date() ");
    $ReunionBientot->execute();
    return $ReunionBientot;
}
