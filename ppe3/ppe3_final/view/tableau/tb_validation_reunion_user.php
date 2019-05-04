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
$login=reunion_user()[0];
$fk_re=reunion_user()[1];

?>
<!--   <h5> Si tu clique sur voir paticipant tu obtient ce tableau (parametre par deffaut fk_re = 1 FK_DR = 2</h5> -->

<h1> Creneau disponible de la reunion </h1>
<table class="table table-hover">
    <thead>
    <tr>
        <th>Numero Creneau</th>
        <th>Date du Creneau</th>
        <th>Creneau de debut</th>
        <th>Creneau de fin</th>
        <th>Choix</th>
        <th>Raison</th>
        <th>Modifier</th>
        <th>Supprimer</th>
        <th>Validation</th>
    </tr>
    </thead>
    <tbody>

    <?php include("../../controller/reunion/validation_reunion/reunion_user.php"); ?>

    </tbody>
</table>

</body>
</html>
