<?php
function Recherche_Utilisateur(){
    include_once("../../model/assets/config_sql/config_db.php");
    echo'<select value="username" name="username" >';
    echo '<option value="">Tout le monde</option>';
    $req =$bdd->prepare('select UT_NDC from utilisateur');
    $req->execute();

    if($_SESSION['last_user']=='' ) {
        $last=$_SESSION['last_user'];
    }
    else{
        $last="";
    }

    while($row=$req->fetch()){
        if($row['UT_NDC'] == $last){
            echo '<option value="'.$row['UT_NDC'].'" selected>'.$row['UT_NDC'].'</option>';
        }
        else{
            echo '<option value="'.$row['UT_NDC'].'">'.$row['UT_NDC'].'</option>';
        }
    }
    echo'</select>';
}

function consultation_attente($bdd){
    $req2=$bdd->prepare("SELECT * FROM consultation_reunion");
    $req2->execute();
    $requete=$req2->fetchAll();
    return $requete;

}

function calendrier($m, $y){
include("../../model/assets/config_sql/config_db.php");

// Sinon on rÈcupËre la date du 1er jour du mois donnÈ.
$timestamp = mktime(0, 0, 0, $m, 1, $y );



/* Si le mois et l'annÈe de la variable $timestamp correspondent au mois et ‡ l'annÈe d'aujourd'hui, on retient le jour actuel.
Sinon le jour actuel ne se situe pas dans le mois et on ne retient rien */

if(date('m', $timestamp) == date('m') && date('Y', $timestamp) == date('Y'))
{
    $coloreNum = date('d');
}

?>
<?php

$m = array("01" => "Janvier", "02" => "FÈvrier", "03" => "Mars", "04" => "Avril");
$m += array("05" => "Mai", "06" => "Juin", "07" => "Juillet", "08" => "Août");
$m += array("09" => "Septembre", "10" => "Octobre",  "11" => "Novembre", "12" => "DÈcembre");

$j = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
// Souvenez-vous que les dates en PHP commencent par dimanche !


$numero_mois = date('m', $timestamp);
$annee = date('Y', $timestamp);

if($numero_mois == 12)
{
    // Dans le cas du mois de dÈcembre
    $annee_avant = $annee;
    $annee_apres = $annee + 1;	// L'annÈe d'aprËs change
    $mois_avant = $numero_mois - 1;
    $mois_apres = 01;		// Le mois d'aprËs est janvier
}
elseif($numero_mois == 01)
{
    // Dans le cas du mois de janvier
    $annee_avant = $annee - 1;	// L'annÈe d'avant change
    $annee_apres = $annee;
    $mois_avant = 12;		// Le mois d'avant est dÈcembre
    $mois_apres = $numero_mois + 1;
}
else
{
    // Il ne s'agit ni de janvier ni de dÈcembre
    $annee_avant = $annee;
    $annee_apres = $annee;
    $mois_avant = $numero_mois - 1;
    $mois_apres = $numero_mois + 1;
}

$numero_jour1er = date('w', $timestamp);  // 0 => Dimanche, 1 => Lundi, 2 = > Mardi...

// Changement du numÈro du jour car l'array commence ‡ l'indice 0.
if ($numero_jour1er == 0)
{
    /*
        Si c'est dimanche, on le place en 6e position
        (car on commencera notre boucle ‡ 0)


*/

    $numero_jour1er = 6;
}
else
{
    // Sinon on met lundi ‡ 0 ou mardi ‡ 1 ou mercredi ‡ 2...
    $numero_jour1er--;
}

?>
<table id="id_table" class="table" style="width: 100%;">
    <caption>
        <?php
        // Affichage du mois et de l'annÈe
        $moisannee=$m[$numero_mois].' '.$annee;
        echo '<h1><span style="color: #4C8FBD;"><center>  '.$moisannee.'</span></center></h1>  ';
        ?>
    </caption>
    <thead>
    <tr>
        <th><center>Lundi</center></th>
        <th><center>Mardi</center></th>
        <th><center>Mercredi</center></th>
        <th><center>Jeudi</center></th>
        <th><center>Vendredi</center></th>
        <th><center>Samedi</center></th>
        <th><center>Dimanche</center></th>
    </tr>
    </thead>
    <tbody class="totals">
    <?php
    echo '<tr>'; // Nouvelle ligne du tableau (celle de la 1Ëre semaine, donc)

    // …criture de colonnes vides tant que le mois ne dÈmarre pas.
    for($i = 0 ; $i < $numero_jour1er ; $i++)
    {
        echo '<td></td>';
    }

    for($i = 1 ; $i <= 7 - $numero_jour1er; $i++)
    {

    if($i%2 ==0)
    {
        $case='#e8e8e8';
    }else
    {
        $case='#edf3f4';
    }
    echo '<td style="background-color:'.$case.';"><a href="#complet'.$i.'" data-toggle="collapse">'.$i.'</a>';
    $temps_deb=date('Y-m-d', mktime(0,0,0,$numero_mois, $i, $y ));//jour du bug
    $i2=$i+1;
    $temps_fin=date('Y-m-d', mktime(0,0,0,$numero_mois, $i2, $y ));//limitation au jour suivant pour la recherche par
    if(isset($_POST['username'])){
        $util= $_POST['username'];
    }
    else{
        $util='';
    }
    $req= $bdd -> prepare("SELECT ID_RE,
							`disponible`.`FK_UT` AS `UT_MAIL`,
							CONCAT(`utilisateur`.`UT_Nom`,
							' ',
							`utilisateur`.`UT_Prenom`) AS `UT_Invite`,
								`reunion`.`RE_Organisateur` AS `RE_Organisateur`,
								`reunion`.`RE_Object` AS `RE_Object`,
								`reunion`.`RE_Description` AS `RE_Description`,
								`lieu`.`LI_Libelle` AS `LI_Libelle`,
								`date_reunion`.`DR_Date` AS `DR_Date`,
								CONCAT(`date_reunion`.`DR_Creneau_Debut`,
										'-',
										`date_reunion`.`DR_Creneau_Fin`) AS `DR_Creneau`,
								`reunion`.`RE_Fin_Valide` AS `RE_Fin_Valide`,
								`disponible`.`ID_DIS` AS `ID_DIS`,
								`disponible`.`DIS_Raison` AS `DIS_Raison`,
								`DIS_Choix`
							FROM
								((((`disponible`
								JOIN `date_reunion` ON ((`date_reunion`.`ID_DR` = `disponible`.`FK_DR`)))
								JOIN `reunion` ON ((`reunion`.`ID_RE` = `disponible`.`FK_RE`)))
								JOIN `utilisateur` ON ((`utilisateur`.`UT_MAIL` = `disponible`.`FK_UT`)))
								JOIN `lieu` ON ((`lieu`.`ID_LI` = `reunion`.`FK_LI`)))
								where DR_Date <= :temps_deb and DR_Date >= :temps_fin
								and UT_NDC=:util
								");

    $req->execute(array(
            ':temps_deb'=>$temps_deb,
            ':temps_fin'=>$temps_fin,
            ':util'=>$util)
    );
    $contenu=0; //inisialisation de la variable pour cache le contenu supplÈmentaire
    echo '<div class="collapse" id="complet'.$i.'">';
    foreach ( $req->fetchall() as $t_item ) {
        echo '<center><a href="#'.$i,$contenu.'" data-toggle="collapse"><h5>rÈunion de'.$t_item['RE_Object'].' crÈe par '.$t_item['RE_Organisateur'].'</a>';
        echo '<div class="collapse"id="'.$i,$contenu.'"><a href="modify.php?id='.$t_item['ID_RE'].'"></br>','</br>Description de la rÈunion: ',
        $t_item['RE_Description'],'</br>Lieu: ',$t_item['LI_Libelle'],'</br>CrÈneau: ',$t_item['DR_Creneau'],
            '</br>Choix:'.$t_item['DIS_Choix'].'</br>Raison si non disponible',$t_item['DIS_Raison'].'<br>cliquer pour modifier</h5></a></center>';

        $contenu+=1;
    }
    echo '</div><font color="#4C8FBD"></br>Nb de rÈunion:'.$contenu;
    ?></td></div></font></div><?php
    }


    echo '</tr>';

    ?>
    <?php
    $nbLignes = ceil((date('t', $timestamp) - ($i-1)) / 7);
    for($ligne = 0 ; $ligne < $nbLignes ; $ligne++)
    {
    echo '<tr>'; // Nouvelle ligne du tableau (celle de la nouvelle semaine)

    for($colone = 0 ; $colone < 7 ; $colone++)
    {
    if($i <= date('t', $timestamp))
    {
    if($i%2 ==0)
    {
        $case='#e8e8e8';
    }else
    {
        $case='#edf3f4';
    }
    echo '<td style="background-color:'.$case.';"><a href="#complet'.$i.'" data-toggle="collapse">'.$i.'</a>';
    $temps_deb=date('Y-m-d', mktime(0,0,0,$numero_mois, $i, $y ));//jour du bug
    $i2=$i +1;
    $temps_fin=date('Y-m-d', mktime(0,0,0,$numero_mois, $i2, $y ));//limitation au jour suivant pour la recherche par jour
    if(isset($_POST['username'])){
        $util= $_POST['username'];
    }
    else{
        $util='';
    }
    $req= $bdd -> prepare("SELECT ID_RE,
							`disponible`.`FK_UT` AS `UT_MAIL`,
							CONCAT(`utilisateur`.`UT_Nom`,
									' ',
									`utilisateur`.`UT_Prenom`) AS `UT_Invite`,
							`reunion`.`RE_Organisateur` AS `RE_Organisateur`,
							`reunion`.`RE_Object` AS `RE_Object`,
							`reunion`.`RE_Description` AS `RE_Description`,
							`lieu`.`LI_Libelle` AS `LI_Libelle`,
							`date_reunion`.`DR_Date` AS `DR_Date`,
							CONCAT(`date_reunion`.`DR_Creneau_Debut`,
									'-',
									`date_reunion`.`DR_Creneau_Fin`) AS `DR_Creneau`,
							`reunion`.`RE_Fin_Valide` AS `RE_Fin_Valide`,
							`disponible`.`ID_DIS` AS `ID_DIS`,
							`disponible`.`DIS_Raison` AS `DIS_Raison`,
							(CASE
								WHEN (`disponible`.`DIS_Choix` = 0) THEN 'aucun vote'
								WHEN (`disponible`.`DIS_Choix` = 1) THEN 'disponible'
								ELSE 'indisponible'
							END) AS `DIS_Choix`
						FROM
							((((`disponible`
							JOIN `date_reunion` ON ((`date_reunion`.`ID_DR` = `disponible`.`FK_DR`)))
							JOIN `reunion` ON ((`reunion`.`ID_RE` = `disponible`.`FK_RE`)))
							JOIN `utilisateur` ON ((`utilisateur`.`UT_MAIL` = `disponible`.`FK_UT`)))
							JOIN `lieu` ON ((`lieu`.`ID_LI` = `reunion`.`FK_LI`)))
							where DR_Date <= :temps_deb and DR_Date >= :temps_fin
							and UT_NDC=:util
							");

    $req->execute(array(
            ':temps_deb'=>$temps_deb,
            ':temps_fin'=>$temps_fin,
            ':util'=>$util)
    );
    $contenu=0; //inisialisation de la variable pour cache le contenu supplÈmentaire
    echo '<div class="collapse" id="complet'.$i.'">';
    foreach ( $req->fetchall() as $t_item ) {
        echo '<center><a href="#'.$i,$contenu.'" data-toggle="collapse"><h5>rÈunion de'.$t_item['RE_Object'].' crÈe par '.$t_item['RE_Organisateur'].'</a>';
        echo '<div class="collapse"id="'.$i,$contenu.'"><a href="modify.php?id='.$t_item['ID_RE'].'"></br>','</br>Description de la rÈunion: ',
        $t_item['RE_Description'],'</br>Lieu: ',$t_item['LI_Libelle'],'</br>CrÈneau: ',$t_item['DR_Creneau'],
            '</br>Choix:'.$t_item['DIS_Choix'].'</br>Raison si non disponible',$t_item['DIS_Raison'].'<br>cliquer pour modifier</h5></a></center>';

        $contenu+=1;
    }
    echo '</div><font color="#4C8FBD"></br>Nb de rÈunion:'.$contenu;
    ?></td></div></font></div><?php
    }
    else
    {
        echo '<td></td>';
    }

    $i = $i +1;
    }

    echo '</tr>';
    }
    echo '</tbody></table>';
    }



    ?>
