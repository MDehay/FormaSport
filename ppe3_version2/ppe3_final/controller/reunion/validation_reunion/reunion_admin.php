<?php

session_start();

include_once("../../model/assets/config_sql/config_db.php");
include_once("../../model/assets/function_sql/function_validation_reunion.php");
include_once("../../model/assets/session/function_session.php");

$fk_re=session_id_organisateur();
$creneau_organisateur=creneau_organisateur($bdd,$fk_re);


while($Donnee = $creneau_organisateur->fetch()){

    echo "<tr>";
    echo "<td>".$Donnee['NumeroReunion']."</td>";
    echo "<td>".$Donnee['Organisateur']."</td>";
    echo "<td>".$Donnee['ObjectReunion']."</td>";
    echo "<td>".$Donnee['Description']."</td>";
    echo "<td>".$Donnee['LieuReunion']."</td>";
    echo "<td>".$Donnee['Date_Reunion']."</td>";
    echo "<td>".$Donnee['DebutReunion']."</td>";
    echo "<td>".$Donnee['FinReunion']."</td>";
    echo "<td>".$Donnee['FinValidationVote']."</td>";
    echo "<td>".$Donnee['TotalVote']."</td>";
    echo "<td>".$Donnee['DisponibleInviter']."</td>";
    echo "<td>".$Donnee['DisponiblePriorite']."</td>";
    echo "<form action='../../controller/reunion/validation_reunion/validation_reunion_admin.php' method='post'><input type='hidden' name='date_reunion' value=" .$Donnee['NumeroHorraire'].">" ;
    echo "<input type='hidden' name='organisateur' value=".$Donnee['UsersReunion'].">"."<td>";
    echo "<input type='checkbox' name='valider'> </td>";
    echo "<td><input type='checkbox' name='supprimer'> </td>";
    echo "<td></td>";
    echo "</tr>";
    echo "<tr id='border-tableau'>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td><input type='submit' value='valider'></form></td>";
    echo "</tr>";
    echo "</tr>";


}




?>