<?php

include_once("../../model/assets/config_sql/config_db.php");
include_once ("../../model/assets/function_sql/function_historique_reunion.php");

$ReunionBientot=ReunionBientot($bdd);

while($Donnee = $ReunionBientot->fetch()){
    
    echo "<tr>";
    echo "<td>".$Donnee['NumeroReunion']."</td>";
    echo "<td>".$Donnee['Organisateur']."</td>";
    echo "<td>".$Donnee['ObjectReunion']."</td>";
    echo "<td>".$Donnee['Description']."</td>";
    echo "<td>".$Donnee['LieuReunion']."</td>";
    echo "<td>".$Donnee['JourReunion']."</td>";
    echo "<td>".$Donnee['DateDebutReunion']."</td>";
    echo "<td>".$Donnee['DateFinReunion']."</td>";
    echo "<td>".$Donnee['FinValidation']."</td>";
    echo "</tr>";
    


}




?>