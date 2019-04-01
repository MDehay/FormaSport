<?php
include_once 'config_db.php';
// post

$req = $bdd->prepare("SELECT ID_DR, DR_Date, DR_Creneau_Debut, DR_Creneau_Fin, DIS_Raison,
case DIS_Choix  
  WHEN 0 THEN 'aucun vote'
  WHEN 1 THEN 'Disponible'
  ELSE 'Indisponible'
END as DIS_Choix
FROM Disponible 
JOIN Date_Reunion ON Date_Reunion.ID_DR=Disponible.FK_DR WHERE FK_RE = :RE and FK_UT = :users and DIS_Choix=0 and DIS_Raison='AucunRaison'");
$req ->bindValue(":RE",$fk_re);
$req ->bindValue(":users",$login);
$req->execute();

// initialisation du numero du crenau
$compteur=0;

while($Donnee = $req->fetch()){

    $compteur++;
    echo "<tr>";
    echo "<td>". $compteur ."</td>";
    echo "<td>".$Donnee['DR_Date']."</td>";
    echo "<td>".$Donnee['DR_Creneau_Debut']."</td>";
    echo "<td>".$Donnee['DR_Creneau_Fin']."</td>";
    echo "<form action='validation_reunion_user.php' method='post'><input type='hidden' name='date_reunion' value=".$Donnee['ID_DR'].">";
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

