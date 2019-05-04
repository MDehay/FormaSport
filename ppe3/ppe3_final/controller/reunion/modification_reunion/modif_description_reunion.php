<?php
session_start();
include_once '../../../view/menu/header.php';
include_once '../../../view/menu/menu.php';
include_once '../../../model/assets/config_sql/config_db.php';
include_once '../../../model/assets/session/function_session.php';
include_once '../../../model/assets/function_sql/function_modif_reunion.php';


$id_dis=modif_reunion();

$objet_reunion=affichage_object_reunion($bdd, $id_dis);

$description_reunion=affichage_description_reunion($bdd, $id_dis);

$lieux_reunion=affichage_lieux_reunion($bdd, $id_dis);

//on fait appel a la fonction sql qui recuperer tous les lieux possible pour la reunion
$lieu_existant=lieux_restant($bdd, $lieux_reunion);
?>


<div class="container" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <h1>Ajouter l'intituler de la reunion</h1>
    <form id="validate_description_reunion" action="modif_date_reunion.php" method="post" class="form">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="objet">Objet</label>
                    <input id="objet_reunion" type="text" class="form-control" name="objet" value="<?php echo $objet_reunion ?>">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="description">Description</label>
                    <input id="description_reunion" type="text" class="form-control" name="description" value="<?php echo $description_reunion ?>">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label id ="lieu"  for="lieu">lieu :</label>
                    <br>
                    <select id="select_lieu" name='selected_lieu'>
                        <OPTION VALUE='<?php echo $lieux_reunion ?>'> <?php echo $lieux_reunion ?> </OPTION>'
                        <?php
                        foreach($lieu_existant as $Le) {
                            $lieu_existants = $Le['LI_Libelle'];
                            echo "<OPTION VALUE='$lieu_existants'> $lieu_existants </OPTION>\n";
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
<script src="../../../model/js/description_reunion.js"></script>

<?php include '../../../view/menu/footer.php';?>

