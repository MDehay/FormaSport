
<?php
include_once  '../menu/header.php';
include_once '../menu/menu.php';
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

<?php
include_once '../menu/footer.php';
?>