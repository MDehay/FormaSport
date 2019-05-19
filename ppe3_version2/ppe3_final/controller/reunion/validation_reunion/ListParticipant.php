<?php
session_start();
include_once("../../model/assets/config_sql/config_db.php");
include_once("../../model/assets/function_sql/function_validation_reunion.php");
include_once ("../../model/assets/session/function_session.php");

$fk_re=organisation();
$participant=participant_choisit($bdd, $fk_re);

while($participants=$participant->fetch())
{
    echo "<tr>";
    echo "<td>".$participants['Nom']."</td>";
    echo "<td>".$participants['Prenom']."</td>";
    echo "<td>".$participants['Grade']."</td>";
    echo "<td>".$participants['Numero']."</td>";
    echo "<td>".$participants['Vote']."</td>";
    echo "<td>".$participants['Raison']."</td>";
    echo "<td>".$participants['Priorité']."</td>";
    echo "</tr>";
}
?>

