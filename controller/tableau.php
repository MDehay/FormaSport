<?php
include ('config_db.php');
include_once ('fonctions.php');
$login=$_SESSION['Email'];

$requete=consultation_attente($bdd);

foreach ($requete as $req)
{
    echo "<tr>";
    echo "<td>".$req['RE_Object']."</td>";
    echo "<td>".$req['RE_Organisateur']."</td>";
    echo "<td>".$req['RE_Description']."</td>";
    echo "<td>".$req['LI_Libelle']."</td>";
    echo "<td>".$req['DR_Date']."</td>";
    echo "<td>".$req['DR_Creneau']."</td>";
    echo "<td>".$req['RE_Fin_Valide']."</td>";
    echo "<td>".$req['UT_Invite']."</td>";
    echo "<td>".$req['UT_MAIL']."</td>";
    echo "<td>".$req['DIS_Choix']."</td>";
    echo "<td>".$req['DIS_Raison']."</td>";

    if($req['RE_Organisateur'] == $login)
        {
            echo "<td><form action='modif_description_reunion.php' method='post'><input type='hidden' name='modif_user' value=".$req['ID_DIS']."><button type='submit' class='btn btn-success'> Modifier</button></form></td>";

        }
    else {
        echo "<td><form action='modif_description_reunion.php' method='post'><input type='hidden' name='modif_user' value=".$req['ID_DIS']."></form></td>";
    }
    echo "</tr>";

}






?>