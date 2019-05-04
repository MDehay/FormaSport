<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
        <meta name="viewport" content="width=device-width, initial-scale=1">


</head>



<body>
<?php
include_once '../view/menu.php';
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
   
    <?php include("HistoriqueReunionBientot.php"); ?>

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
   
    <?php include("HistoriqueReunionAJD.php"); ?>

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
   
    <?php include("HistoriqueReunionAvant.php"); ?>

    </tbody>
  </table>


<br/>

</body>


</html>