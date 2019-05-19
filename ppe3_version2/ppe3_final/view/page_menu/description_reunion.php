<?php
session_start();
include_once '../../view/menu/header.php';
include_once '../../view/menu/menu.php';
include_once  '../../controller/reunion/redirection/redirection_reunion.php';
?>


<div class="container" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <h1>Ajouter l'intituler de la reunion</h1>
    <form id="validate_description_reunion" action="date_reunion.php" method="post" class="form">
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
                        foreach ($arrListe_lieux as $L) {
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

<?php include '../menu/footer.php';?>

