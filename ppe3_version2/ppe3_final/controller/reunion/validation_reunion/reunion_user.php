<?php
session_start();
include_once '../../model/assets/config_sql/config_db.php';
include_once '../../model/assets/session/function_session.php';
include_once '../../model/assets/function_sql/function_validation_reunion.php';

$login=reunion_user()[0];
$fk_re=reunion_user()[1];

$creneau_user=creneau_user($bdd,$fk_re, $login);

// initialisation du numero du crenau
$compteur=0;

while($Donnee = $creneau_user->fetch())
{
    $compteur++;
    echo "<tr>";
    echo "<td>". $compteur ."</td>";
    echo "<td>".$Donnee['DR_Date']."</td>";
    echo "<td>".$Donnee['DR_Creneau_Debut']."</td>";
    echo "<td>".$Donnee['DR_Creneau_Fin']."</td>";
    echo "<form action='../../controller/reunion/validation_reunion/validation_reunion_user.php' method='post'><input type='hidden' name='date_reunion' value=" .$Donnee['ID_DR'].">";
    echo "<td><select id='select_Choix' name='selected_Choix'>
               <OPTION VALUE=".$Donnee['DIS_Choix'].">".$Donnee['DIS_Choix']."
               <OPTION VALUE='Disponible'> Disponible </OPTION>'
               <OPTION VALUE='indisponible'> indisponible </OPTION> </td></select>";
    echo "<td><select id='select_Raison' name='selected_Raison'>
               <OPTION VALUE=".$Donnee['DIS_Raison'].">".$Donnee['DIS_Raison']."
               <OPTION VALUE='Disponible'> Disponible </OPTION>'
               <OPTION VALUE='indisponible'> indisponible </OPTION> </td></select>";
    echo "<td><input type='checkbox' name='modifier'> </td>";
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
    echo "<td><input type='submit' value='valider'></form></td>";
    echo "</tr>";
}


?>

