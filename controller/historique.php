<?php
session_start();
//including the database connection files
include_once("config_db.php");
include_once("sql.php");

?>
<html>
<head>
    <title>Consultation des rÈunions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<span style="float:left;">rÈunions validÈ:</span>
<button style="float:right;" ctype="button" class="btn btn-info" data-toggle="collapse" data-target="#tableau2">
    Afficher
</button>
<div style="clear:both"><div>

        <div class="collapse" id="tableau2">
            <table width='100%' border=0>
                <td>Nom de rÈunion</td>
                <td>Organisateur</td>
                <td>Description</td>
                <td>invitÈs</td>
                <tr bgcolor='#CCCCCC'>

                </tr>
                <?php
                consultation_validee();
                ?>
            </table>
        </div>
</body>