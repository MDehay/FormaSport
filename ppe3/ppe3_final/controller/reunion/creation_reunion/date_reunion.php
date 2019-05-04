<?php
session_start();
include_once '../../../view/menu/header.php';
include_once('../../../view/menu/menu.php');
include_once '../../../model/assets/session/function_session.php';

// on fait appel a une fonction qui recupere tous les donnees de description de la reunion
description_reunion();

?>
    <div class="container">
    <h1 id="a">Ajouter les date et horaire de la reunion</h1>
    <form id="form_horaire_reunion" action="personne_inviter_reunion.php" method="post" class="form">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="date_reunion">Date de la reunion</label>
                    <input id="date_reunion_1"  type="date" class="form-control" name="date_reunion_1">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="date_validate">Date validation de la reunion</label>
                    <input id="date_validate_1" type="date" class="form-control" name="date_validite">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="creneau_debut">Date debut creneau</label>
                    <input id="creneau_debut_1" type="time" class="form-control" name="creneau_debut_1" placeholder="HH:MM">
                </div>
                    <input id="add_creneau_1" class="btn btn-primary" type="button" value="ajout du creneau">

            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="creneau_fin">Date fin creneau</label>
                    <input id="creneau_fin_1" type="time" class="form-control" name="creneau_fin_1" placeholder="HH:MM">

                </div>
            </div>
        </div>
            <div class="row" id="creneau_1">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="creneau_debut">Date debut creneau</label>
                        <input id="creneau_debut_2" type="time" class="form-control" name="creneau_debut_2" placeholder="HH:MM">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="creneau_fin">Date fin creneau</label>
                        <input id="creneau_fin_2" type="time" class="form-control" name="creneau_fin_2" placeholder="HH:MM">
                        <br>
                        <input id="del_creneau_1" class="btn btn-primary" type="button" value="suppression du creneau">
                    </div>
                </div>
            </div>
        <br>
        <input id="add_date_reunion" class="btn btn-primary" type="button" value="ajout de l'horaire">
        <br>
        <div class="row" id="creneau_2">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="date2_reunion">Date de la reunion</label>
                    <input id="date2_reunion_2"  type="date" class="form-control" name="date_reunion_2">
                </div>
            </div>
        </div>
        <div class="row" id="creneau_3">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="creneau2_debut">Date debut creneau</label>
                    <input id="creneau2_debut_1" type="time" class="form-control" name="creneau_debut_3" placeholder="HH:MM">
                </div>
                <input id="add_creneau_2" class="btn btn-primary" type="button" value="ajout du creneau">
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="creneau2_fin">Date fin creneau</label>
                    <input id="creneau2_fin_1" type="time" class="form-control" name="creneau_fin_3" placeholder="HH:MM">
                </div>
            </div>
        </div>
        <div class="row" id="creneau_4">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="creneau2_debut">Date debut creneau</label>
                    <input id="creneau2_debut_2" type="time" class="form-control" name="creneau_debut_4" placeholder="HH:MM">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="creneau2_fin">Date fin creneau</label>
                    <input id="creneau2_fin_2" type="time" class="form-control" name="creneau_fin_4" placeholder="HH:MM">
                </div>
                <input id="del_creneau_2" class="btn btn-primary" type="button" value="suppression du creneau">
            </div>
        </div>

        <br>
        <input id="del_date_reunion" class="btn btn-primary" type="button" value="suppression de l'horaire">
        <br><br>
        <div class="form-group">
            <input id="horaire_reunion" class="btn btn-primary" type="button" value="suivant">
        </div>


</form>
</div>
</body>
<script src="../../../model/js/horaire_creneau_reunion.js"></script>
<?php include '../../../view/menu/footer.php';?>