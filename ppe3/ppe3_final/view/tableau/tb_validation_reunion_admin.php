<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../model/css/styles.css">
    <link rel="stylesheet" type="text/css" href="../../model/css/tableau.css">


</head>



<body>
<?php
include_once '../../view/menu/menu.php';
session_start();
$fk_RE=$_SESSION['fk_re_admin']=$_POST['fk_re_admin'];
?>

<h1> Tableau resultat </h1>
<div id="validation">
    <table class="table table-hover" id="validation">
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
            <th>TotalVote</th>
            <th>VoteDisponibleInviter</th>
            <th>VoteDisponiblePrioriter</th>
            <th>Valider</th>
            <th>supprimer</th>
            <th>Validation</th>
        </tr>
        </thead>
        <tbody>

        <?php include("../../controller/reunion/validation_reunion/reunion_admin.php"); ?>

        </tbody>
    </table>
</div>
<br/>



</body>


</html>