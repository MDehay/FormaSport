<?php
include_once  '../menu/header.php';
include_once '../menu/menu.php';
?>

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

<?php
include_once '../menu/footer.php';
?>