<?php

include_once("../../model/assets/config_sql/config_db.php");


$req = $bdd->prepare("SELECT * FROM `reponsevote`");
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
echo "<td>".$Donnee['PasVote']."</td>";
echo "<td>".$Donnee['Disponible']."</td>";
echo "<td>".$Donnee['PasDisponible']."</td>";
echo "<td>".$Donnee['PasDisponiblePriorité']."</td>";
echo "<td> <form action='tb_participant.php' method='post'><input type='hidden' name='participation_user' value=" .$Donnee['NumeroReunion']."><button type='submit' class='btn btn-primary'> Voir Participant </button> </form></td>";
if($login == $Donnee['Organisateur'])
{
    echo "<td><form action='tb_validation_reunion_admin.php' method='post'><input type='hidden' name='fk_re_admin' value=" .$Donnee['NumeroReunion']."><button type='submit' class='btn btn-success'> Valider reunion</button></form></td>";
}
else
{
    echo "<td><form action='tb_validation_reunion_user.php' method='post'><input type='hidden' name='participation_user' value=" .$Donnee['NumeroReunion']."><button type='submit' class='btn btn-success'> Valider reunion</button></form></td>";
}

echo "<td><form action='../../controller/reunion/suppression_reunion/supprimer_reunion.php' method='post'><input type='hidden' name='del_id_re' value=" .$Donnee['NumeroReunion']."><button type='submit' class='btn btn-danger'> Supprimez Reunion </button></form> </td>";

echo "</tr>";


}




?>