<?php
session_start();
include_once("fonctions.php");
include_once ("../view/menu.php");
?>
<html>
<head>
    <title>Consultation des rÈunions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include ('../view/header.php'); ?>



    <script>
        $( function() {
            $( "#tabs" ).tabs({
                collapsible: true
            });
            $(".tabs-2").click(function() {$("#calendrier").hide();});
            $(".tabs-1").click(function() {$("#calendrier").show();});
        } );
    </script>
    <link rel="stylesheet" href="../model/css/tableau.css">
</head>
<body>
<?php
if(isset($_POST['username'])){
    $_SESSION['last_user']=$_POST['username'];
}else{
    $_SESSION['last_user']='';
}
if(isset($_POST['annees'])){
    $_SESSION['last_year']=$_POST['annees'];
}else{
    $_SESSION['last_year']=date('Y');
}
if(isset($_POST['MoisChoisi'])){
    $_SESSION['last_month']=$_POST['MoisChoisi'];
}else{
    $mois=date('n');
    $_SESSION['last_month']=intval($mois);
}?>

<div id="tabs">
    <ul>
        <li><a href="#tabs-1" class="tabs-1">calendrier</a></li>
        <li><a href="#tabs-2" class="tabs-2">Recherche</a></li>
    </ul>

    <div id="tabs-1">

        <table>
            <tr>
                <th class="recherche">
                    <h4><i class="ace-icon fa fa-columns"></i>Calendrier</h4>
                </th>
            </tr>
            <td class="recherche">
                <form method="post" action="calendrier.php">
                    <div>
                        <br>
                        <div>
                            <label for="MoisChoisi">Mois:</label>
                            <SELECT id="MoisChoisi" name="MoisChoisi" size="1">
                                <?php
                                $m = array("1" => "Janvier", "2" => "FÈvrier", "3" => "Mars", "4" => "Avril");
                                $m += array("5" => "Mai", "6" => "Juin", "7" => "Juillet", "8" => "Août");
                                $m += array("9" => "Septembre", "10" => "Octobre",  "11" => "Novembre", "12" => "DÈcembre");

                                $selected = '';

                                // Parcours du tableau
                                for($i=1; $i<=12; $i++)
                                {
                                    if($i == $_SESSION['last_month'])
                                    {
                                        $selected = ' selected="selected"';
                                    }
                                    echo "\t",'<option value="', $i ,'"', $selected ,'>', $m[$i],'</option>',"\n";
                                    $selected = '';
                                }

                                ?>
                            </SELECT>
                            <div>AnnÈe:
                                <?php
                                // Variable qui ajoutera l'attribut selected de la liste dÈroulante
                                $selected = '';

                                // Parcours du tableau
                                echo '<select name="annees">',"\n";
                                for($i=2016; $i<=2100; $i++)
                                {
                                    // L'annÈe est-elle l'annÈe courante ?
                                    if($i == $_SESSION['last_year'])
                                    {
                                        $selected = ' selected="selected"';
                                    }
                                    // Affichage de la ligne
                                    echo "\t",'<option value="', $i ,'"', $selected ,'>', $i ,'</option>',"\n";
                                    // Remise ‡ zÈro de $selected
                                    $selected='';
                                }
                                echo '</select>',"\n";
                                ?>
                            </div>
                        </div>


                        <label for="username">Recherche utilisateur:</label>
                        <?php
                        Recherche_Utilisateur();
                        ?>
                        <div>
                            <input type="submit"  name="bouton" class="btn btn-primary reset-selection" value="envoyer" />
                        </div>
                </form>
            </td>
        </table>
    </div>
    <div id="tabs-2">
        <h2><span style="float:left;">rÈunions en attente de validation</span></h2>
        <button style="float:right;" ctype="button" class="btn btn-info" data-toggle="collapse" data-target="#tableau1">
            Afficher
        </button>
        <div style="clear:both"></div>

        <div class="collapse" id="tableau1">
            <table>
                <td>Nom de rÈunion</td>
                <td>Organisateur</td>
                <td>Description</td>
                <td>Lieu</td>
                <td>date de la rÈunion</td>
                <td>crÈneau</td>
                <td>date d'ÈchÈance</td>
                <td>invitÈs</td>
                <td>mail de l'invitÈ</td>
                <td>choix</td>
                <td>raison</td>
                <td>modification</td>
                <?php
                include_once('tableau.php');
                ?>
                <tr bgcolor='#CCCCCC'>

                </tr>
            </table>

        </div></div>



</body>
</html>
<script src="../model/js/affichage_tableau.js"></script>
<script src="../model/js/deconnexion.js"></script>