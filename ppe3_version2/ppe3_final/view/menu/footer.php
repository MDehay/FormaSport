</body>
<?php
$page =explode("/",$_SERVER['PHP_SELF']);
$nb_dossier=COUNT($page);

if($nb_dossier=="6")
{
    $pages=$page[5];
    $dossier="../../../";
    $script=$dossier."model/js/deconnexion_2.js";
}

else if ($nb_dossier=="5")
{
    $pages=$page[4];
    $dossier="../../";
    $script=$dossier."model/js/deconnexion.js";
}

else if ($nb_dossier=="3")
{
    $pages=$page[2];
}

if($pages == "index.php") {
    echo '<script src="model/js/valid_login.js"></script>';
}

if($pages != "index.php")
{
echo '<script src='.$script.'></script>';
}

if($pages == "date_reunion.php")
{
    echo '<script src="../../model/js/horaire_creneau_reunion.js"></script>';
}

if($pages == "description_reunion.php")
{
     echo '<script src="../../model/js/description_reunion.js"></script>';
}

if($pages == "personne_inviter_reunion.php")
{
    echo '<script src="../../model/js/verif_champs_remplis_personne_inviter_indispensable.js"></script>
    <script src="../../model/js/function_personne_inviter_indispensable_identique.js"></script>
    <script src="../../model/js/personne_inviter_indispensable_identique.js"></script>
    <script src="../../model/js/placement_button_personnes.js"></script>';
}

if($pages == "consultation_reunion.php")
{
    echo '<script src="../../model/js/affichage_tableau.js"></script>
          <script src="../../model/js/calendrier.js"></script>';
}

?>
</html>
