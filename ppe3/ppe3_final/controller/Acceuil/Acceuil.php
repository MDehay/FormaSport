<?php
session_start();
include_once '../../view/menu/menu.php';
?>
<!DOCTYPE html>

<html lang="fr">

    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title> Accueil </title>

    </head>

    <body>
    <?php
    if (isset($_GET['message'])) {
        if ($_GET['message'] = 'insertion_reunion') {

            echo "<script> alert('votre reunion à été crée')</script>";
            header("Refresh:1,url=Acceuil.php");
        }
    }
    if (isset($_GET['information'])){
        if ($_GET['information'] = 'update_reunion') {
            echo "<script> alert('votre reunion à été mise à jour')</script>";
            header("Refresh:1,url=Acceuil.php");
        }
    }

    if (isset($_GET['validation'])){
        if ($_GET['validation'] = 'validate') {
            echo "<script> alert('votre creneau à été mis a jour')</script>";
            header("Refresh:1,url=Acceuil.php");
        }
        else if ($_GET['validation'] = 'supprimer') {
            echo "<script> alert('votre creneau supprimer')</script>";
            header("Refresh:1,url=Acceuil.php");
        }
    }

    if (isset($_GET['etat'])){
        if ($_GET['etat'] = 'reunion_valider') {
            echo "<script> alert('le créneau de la reunion a été validé')</script>";
            header("Refresh:1,url=Acceuil.php");
        }
    }
    if (isset($_GET['alert'])) {
        if ($_GET['alert'] = 'reunion_supprimer') {
            echo "<script> alert('le créneau de la reunion a été supprimer')</script>";
            header("Refresh:1,url=Acceuil.php");
        }
    }
    if (isset($_GET['del'])) {
        if ($_GET['del'] = 'oui') {
            echo "<script> alert('votre reunion a été supprimer')</script>";
            header("Refresh:1,url=Acceuil.php");
        }
    }
    ?>

    </body>



</html>
<script src="../../model/js/deconnexion.js"></script>

