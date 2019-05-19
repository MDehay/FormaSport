<?php
session_start();
include_once('../../view/menu/header.php');
include_once("../../view/menu/menu.php");
include("../../model/assets/config_sql/config_db.php");
include_once("../../model/assets/function_sql/functions_calendar.php");
include_once ("../../controller/calendrier/calendrier_session.php");
?>
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
                <form method="post" action="consultation_reunion.php">
                    <div>
                        <br>
                        <div>
                            <label for="MoisChoisi">Mois:</label>
                            <SELECT id="MoisChoisi" name="MoisChoisi" size="1">
                               <?php include_once '../../controller/calendrier/calendrier_mois.php'?>
                            </SELECT>
                            <div>AnnÈe:
                                <?php include_once '../../controller/calendrier/calendrier_annees.php' ?>
                            </div>
                        </div>


                        <label for="username">Recherche utilisateur:</label>
                        <?php
                        Recherche_Utilisateur($bdd);
                        ?>
                        <div>
                            <input id="list_reunion" class="btn btn-primary" type="submit" value="envoyer">
                        </div>
                </form>
            </td>
        </table>
    </div>
    <div id="calendrier">
        <?php
        include_once '../../controller/calendrier/affichage_calendrier.php';
        ?>
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
                include_once('../../controller/calendrier/liste_reunion.php');
                ?>
                <tr bgcolor='#CCCCCC'>

                </tr>
            </table>

        </div></div>


<?php
    include_once ("../../view/menu/footer.php");

    ?>