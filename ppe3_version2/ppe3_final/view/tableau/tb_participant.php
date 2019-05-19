<?php
include_once '../menu/header.php';
include_once '../menu/menu.php';
?>

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

    include_once ("../../controller/reunion/validation_reunion/ListParticipant.php")
    ?>
    </tbody>
</table>

<?php
include_once '../menu/footer.php';
?>