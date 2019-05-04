<?php
session_start();
include_once '../view/header.php';
include_once '../view/menu.php';
include_once 'config_db.php';
include_once 'function_sql.php';

//on fait appel a la fonction sql qui recuperer tous les lieux possible pour la reunion
$arrListe_lieux=choix_lieux($bdd);
?>


<div class="container" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <h1>Ajouter l'intituler de la reunion</h1>
    <form  id="validate_description_reunion" action="date_reunion.php" method="post" class="form">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="objet">Objet</label>
                    <input id="objet_reunion" type="text" class="form-control" name="objet">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="description">Description</label>
                    <input id="description_reunion" type="text" class="form-control" name="description">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                     <label id ="lieu"  for="lieu">lieu :</label>
                    <br>
                    <select id="select_lieu" name='selected_lieu'>
                        <OPTION VALUE=''>  </OPTION>'
                        <?php
                    foreach($arrListe_lieux as $L) {
                        $lieu_resultat = $L['LI_libelle'];
                        echo "<OPTION VALUE='$lieu_resultat'> $lieu_resultat </OPTION>\n";
                    }
                    ?>
                            <OPTION id="other" VALUE='other'> other</OPTION>
                    </select>
                    <input id="lieu_other_reunion" type="text" class="form-control" name="lieu">
                </div>
            </div>
        </div>
        <div class="form-group">
            <input id="intitule_reunion" class="btn btn-primary"  type="button" value="suivant">
        </div>


    </form>
</div>
</body>
<script src="../model/js/description_reunion.js"></script>

<?php include '../view/footer.php';?>

