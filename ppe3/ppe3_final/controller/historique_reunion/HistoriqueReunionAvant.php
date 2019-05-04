<?php

include_once("../../model/assets/config_sql/config_db.php");

$Date = $date = date("Y-m-d");


$req = $bdd->prepare("SELECT * FROM `HistorieReunion` WHERE JourReunion < :CURRENTDATE ");
$req->execute(array(':CURRENTDATE' => $Date));


while($Donnee = $req->fetch()){

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