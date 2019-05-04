<?php

include_once("config_db.php");


$req = $bdd->prepare("SELECT * FROM `ReponseVote` WHERE NumeroReunion=:fk_RE");
$req->bindValue(":fk_RE", $fk_RE);
$req->execute();

while($Donnee = $req->fetch()){

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
    echo "<form action='validation_reunion_admin.php' method='post'><input type='hidden' name='date_reunion' value=".$Donnee['NumeroHorraire'].">" ;
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