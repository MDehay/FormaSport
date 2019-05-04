<?php
include('consultation_reunion.php');
include("../../model/assets/config_sql/config_db.php");
?>
<div id="calendrier">
    <?php
    if(isset($_POST['MoisChoisi'])){
        $mois= $_POST['MoisChoisi'];
    }
    if(isset($_POST['annees'])){
        $annee=$_POST['annees'];
    }
    $bouton=1;
    calendrier($mois,$annee);
    ?>
</div>