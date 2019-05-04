<?php

include_once("../../model/assets/config_sql/config_db.php");
include_once("../../model/assets/function sql/function_validation_reunion.php");

$participant=participant_choisit($bdd, $fk_re);

foreach ($participant as $participant_choisit){

    echo "<tr>";
    echo "<td>".$participant_choisit['Nom']."</td>";
    echo "<td>".$participant_choisit['Prenom']."</td>";
    echo "<td>".$participant_choisit['Grade']."</td>";
    echo "<td>".$participant_choisit['Numero']."</td>";
    echo "<td>".$participant_choisit['Vote']."</td>";
    echo "<td>".$participant_choisit['Raison']."</td>";
    echo "<td>".$participant_choisit['Priorité']."</td>";
    echo "</tr>";
}

?>