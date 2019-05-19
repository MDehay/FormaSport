<?php
include_once  '../menu/header.php';
include_once '../menu/menu.php';
?>

<h1> Tableau Historique (Bientot A venir) <h1>
<table class="table table-hover">
    <thead>
      <tr>
        <th>NumeroReunion</th>
        <th>Organisateur</th>
        <th>ObjectReunion</th>
        <th>Description</th>  
        <th>LieuReunion</th>
        <th>JourReunion</th>
        <th>DateDebutReunion</th>
        <th>DateFinReunion</th>
        <th>FinValidation</th>

    </tr>
    </thead>
    <tbody>
   
    <?php include("../../controller/historique_reunion/HistoriqueReunionBientot.php"); ?>

    </tbody>
  </table>

<br/>
<h1> Tableau Aujourd'hui  <h1>
<table class="table table-hover">
    <thead>
      <tr>
        <th>NumeroReunion</th>
        <th>Organisateur</th>
        <th>ObjectReunion</th>
        <th>Description</th>  
        <th>LieuReunion</th>
        <th>JourReunion</th>
        <th>DateDebutReunion</th>
        <th>DateFinReunion</th>
        <th>FinValidation</th>

    </tr>
    </thead>
    <tbody>
   
    <?php include("../../controller/historique_reunion/HistoriqueReunionAJD.php"); ?>

    </tbody>
  </table>

<br/>
<h1> Tableau Historique (Deja Passé) <h1>
<table class="table table-hover">
    <thead>
      <tr>
        <th>NumeroReunion</th>
        <th>Organisateur</th>
        <th>ObjectReunion</th>
        <th>Description</th>  
        <th>LieuReunion</th>
        <th>JourReunion</th>
        <th>DateDebutReunion</th>
        <th>DateFinReunion</th>
        <th>FinValidation</th>

    </tr>
    </thead>
    <tbody>
   
    <?php include("../../controller/historique_reunion/HistoriqueReunionAvant.php"); ?>

    </tbody>
  </table>


<br/>

<?php
include_once '../menu/footer.php'
?>