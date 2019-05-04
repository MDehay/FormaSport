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
session_start();
include_once '../menu/menu.php';
include_once '../../model/assets/session/function_session.php';
$fk_re=participant();
?>
<!--   <h5> Si tu clique sur voir paticipant tu obtient ce tableau (parametre par deffaut fk_re = 1 FK_DR = 2</h5> -->

<h1> Participant de la reunion</h1>
<table class="table table-hover">
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Grade</th>
        <th>NumeroTelephone</th>
        <th>Vote</th>
        <th>Raison</th>
        <th>Priorité</th>

    </tr>
    </thead>
    <tbody>

<?php


    include_once ("../../controller/reunion/validation_reunion/VoirParticipant.php")
    ?>
    </tbody>
</table>

</body>
</html>
