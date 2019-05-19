<html>
    <?php
    $page =explode("/",$_SERVER['PHP_SELF']);
    $nb_dossier=COUNT($page);

    if($nb_dossier=="6")
    {
        $pages=$page[5];
        $titre_page=explode(".",$pages);
        $titre = $titre_page[0];
    }

    else if ($nb_dossier=="5") {
        $pages=$page[4];
        $titre_page=explode(".",$pages);
        $titre = $titre_page[0];
    }
    else if ($nb_dossier=="3")
    {
        $pages=$page[2];
        $titre = "FormaSport Connexion";
    }

    ?>

    <title> <?php echo $titre; ?> </title>

    <meta charset="UTF-8">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--jquerry -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- css -->
    <?php
    if($pages == "date_reunion.php" ||$pages == "description_reunion.php" || $pages == "personne_inviter_reunion.php") {
    echo '<link rel="stylesheet" type="text/css" href="../../model/css/styles.css">';
    }

    if($pages == "validation.php" || $pages == "tb_participant.php")
    {
       echo '<link rel="stylesheet" type="text/css" href="../../model/css/styles.css">
        <link rel="stylesheet" type="text/css" href="../../model/css/tableau.css">';
    }

    if($pages == "index.php") {
        echo '<link rel = "stylesheet" type = "text/css" href = "model/css/testformulaire.css" >';
    }

    if($pages == "consultation_reunion.php")
    {
    echo '<link rel="stylesheet" href="../../model/css/tableau.css">';
    }

    ?>

<body>


