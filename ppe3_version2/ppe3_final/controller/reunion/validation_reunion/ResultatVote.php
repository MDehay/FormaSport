<?php
session_start();
include_once("../../model/assets/config_sql/config_db.php");
include_once("../../model/assets/function_sql/function_validation_reunion.php");
include_once ("../../model/assets/session/function_session.php");

$login=organisation();
$info_reunion=info_reunion($bdd);

while($reunion_info=$info_reunion->fetch())
{
    echo "<tr>";
    echo "<td>" . $reunion_info['numero reunion'] . "</td>";
    echo "<td>" . $reunion_info['organisateur'] . "</td>";
    echo "<td>" . $reunion_info['objet reunion'] . "</td>";
    echo "<td>" . $reunion_info['description'] . "</td>";
    echo "<td>" . $reunion_info['lieux'] . "</td>";

    $compteur=nb_creneau_date($bdd,$reunion_info['numero reunion']);
    $date_creneau=reunion_date_creation($bdd, $reunion_info['numero reunion']);
    echo "<td>";

    for($i=0;$i<$compteur+1;$i++)
    {
        while($date=$date_creneau->fetch())
        {
                echo $date['date'] ."</br>";

            }
        }
    echo "</td>";

    $compteur=nb_creneau_date($bdd,$reunion_info['numero reunion']);
    $creneau_debut=creneau_debut_reunion($bdd, $reunion_info['numero reunion']);
    echo "<td>";

    for($i=0;$i<$compteur+1;$i++)
    {
        while($cre_deb=$creneau_debut->fetch())
        {
            echo $cre_deb['creneau debut'] ."</br>";

        }
    }
    echo "</td>";

    $compteur=nb_creneau_date($bdd,$reunion_info['numero reunion']);
    $creneau_fin=creneau_fin_reunion($bdd, $reunion_info['numero reunion']);

    echo "<td>";

    for($i=0;$i<$compteur+1;$i++)
    {
        while($cre_fin=$creneau_fin->fetch())
        {
            echo $cre_fin['creneau fin'] ."</br>";
        }
    }
    echo "</td>";


    echo "<td>" . $reunion_info['date validiter'] . "</td>";

    $nb_vote=nb_vote_reunion($bdd,$reunion_info['numero reunion']);
    while ($vote=$nb_vote->fetch())
    {
        echo "<td>" . $vote['TotalVote'] . "</td>";
        echo "<td>" . $vote['PasVote'] . "</td>";
        echo "<td>" . $vote['Disponible'] . "</td>";
        echo "<td>" . $vote['PasDisponible'] . "</td>";
        echo "<td>" . $vote['PasDisponiblePriorité'] . "</td>";
    }
    echo "<td> <form action='../tableau/tb_participant.php' method='post'><input type='hidden' name='participation_user' value=" . $reunion_info['numero reunion'] . "><button type='submit' class='btn btn-primary'> Voir Participant </button> </form></td>";
    if ($login == $reunion_info['organisateur']) {
        echo "<td><form action='../tableau/tb_validation_reunion_admin.php' method='post'><input type='hidden' name='fk_re_admin' value=" . $reunion_info['numero reunion'] . "><button type='submit' class='btn btn-success'> Valider reunion</button></form></td>";
    }
    else {
        echo "<td><form action='../tableau/tb_validation_reunion_user.php' method='post'><input type='hidden' name='participation_user' value=" . $reunion_info['numero reunion'] . "><button type='submit' class='btn btn-success'> Valider reunion</button></form></td>";
    }
    echo "<td><form action='../../controller/reunion/suppression_reunion/supprimer_reunion.php' method='post'><input type='hidden' name='del_id_re' value=" . $reunion_info['numero reunion'] . "><button type='submit' class='btn btn-danger'> Supprimez Reunion </button></form> </td>";

    echo "</tr>";
}

?>