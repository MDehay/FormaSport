<?php
if(isset($_POST['MoisChoisi'])){
$mois= $_POST['MoisChoisi'];
}
if(isset($_POST['annees'])){
$annee=$_POST['annees'];
}
$bouton=1;

if(!empty($annee) && !empty($mois))
{
    calendrier($mois,$annee,$bdd);
}

?>