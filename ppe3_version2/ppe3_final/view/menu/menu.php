<?php
$nombre =explode("/",$_SERVER['PHP_SELF']);
$nb_dossier=COUNT($nombre);

if($nb_dossier=="6")
{
    $dossier="../../../";
}

else if ($nb_dossier=="5")
{
    $dossier="../../";

}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="<?php echo $dossier?>view/page_menu/Acceuil.php">FormaSport-Accueil </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo $dossier?>view/page_menu/consultation_reunion.php">Mes reunion <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo $dossier?>view/page_menu/description_reunion.php">creation reunion</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo $dossier?>view/page_menu/validation.php">validation reunion</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo $dossier?>view/page_menu/tableau_historique.php">Historique</a>
            </li>
        </ul>
    </div>
    <button class="btn btn-danger my-2 my-sm-0">Deconnexion</button>
</nav>
