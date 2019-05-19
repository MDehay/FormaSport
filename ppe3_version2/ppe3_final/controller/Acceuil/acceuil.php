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