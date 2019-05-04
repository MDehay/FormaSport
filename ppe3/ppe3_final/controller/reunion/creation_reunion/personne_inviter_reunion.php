<?php
session_start();
include_once '../../../view/menu/header.php';
include_once('../../../view/menu/menu.php');
include_once '../../../model/assets/session/function_session.php';
include_once 'valeur_session_date_reunion.php';
include_once '../../../model/assets/config_sql/config_db.php';
include_once '../../../model/assets/function_sql/function_insert_reunion.php';

//on fait appel a une fonction qui afficher tous les utilisateur posible dans une liste deroulantes
$arrListe_personne=choix_personne($bdd);

?>
    <div class="container" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
        <h1> Ajouter les personnes inviter et personnes indispensables</h1>
        <form id="form_personne_reunion" action="insert_reunion.php" method="post" class="form">
            <div class="row">
                <div class="col-sm-6">
                    <input id="add_personne_inviter_1" class="btn btn-primary" type="button" value="ajouter personne inviter">
                </div>
                <div class="col-sm-6">
                    <input id="add_personne_indispensable_1" class="btn btn-primary" type="button" value="ajouter personne indispensablesable">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6" id="personne_inviter_1">
                    <div class="form-group" id="personne_inviter_1" >
                        <label id ="personne_inviter_1"  for="personne_inviter_1">personne inviter :</label>
                        <br>
                        <select id="select_personne_inviter_1" name='selected_personne_inviter_1'>
                            <OPTION VALUE=''>  </OPTION>'
                            <?php
                            foreach($arrListe_personne as $pers_inv) {
                                $personne_inviter_resultat = $pers_inv['users'];
                                echo "<OPTION VALUE='$personne_inviter_resultat'> $personne_inviter_resultat </OPTION>\n";
                            }
                            ?>
                        </select>
                    </div>
                    <input id="add_personne_inviter_2" class="btn btn-primary" type="button" value="ajout personne inviter">
                    <input id="del_personne_inviter_1" class="btn btn-primary" type="button" value="supprimer personne inviter">
                </div>
                <div class="col-sm-6" id="personne_indispensable_1">
                    <div class="form-group" id="personne_indispensable_1">
                        <label id ="personne_indispensable_1"  for="personne_indispensable_1">personne indispensable :</label>
                        <br>
                        <select id="select_personne_indispensable_1" name='selected_personne_indispensable_1'>
                            <OPTION VALUE=''>  </OPTION>'
                            <?php
                            foreach($arrListe_personne as $pers_indis) {
                                $personne_indispensable_resultat = $pers_indis['users'];
                                echo "<OPTION VALUE='$personne_indispensable_resultat'> $personne_indispensable_resultat</OPTION>\n";
                            }
                            ?>
                        </select>
                    </div>
                    <input id="add_personne_indispensable_2" class="btn btn-primary" type="button" value="ajouter personne indispensable">
                    <input id="del_personne_indispensable_1" class="btn btn-primary" type="button" value="supprimer personne indispensable">
                </div>

            </div>
            <div class="row">
                <div class="col-sm-6" id="personne_inviter_2">
                    <div class="form-group" id="personne_inviter_2">
                        <label id ="personne_inviter_2"  for="personne_inviter_2">personne inviter :</label>
                        <br>
                        <select id="select_personne_inviter_2" name='selected_personne_inviter_2'>
                            <OPTION VALUE=''>  </OPTION>'
                            <?php
                            foreach($arrListe_personne as $pers_inv) {
                                $personne_inviter_resultat = $pers_inv['users'];
                                echo "<OPTION VALUE='$personne_inviter_resultat'> $personne_inviter_resultat </OPTION>\n";
                            }
                            ?>
                        </select>
                    </div>
                    <input id="add_personne_inviter_3" class="btn btn-primary" type="button" value="ajouter personne inviter">
                    <input id="del_personne_inviter_2" class="btn btn-primary" type="button" value="supprimer personne inviter">
                </div>
                <div class="col-sm-6" id="personne_indispensable_2">
                    <div class="form-group" id="personne_indispensable_2">
                        <label id ="personne_indispensable_2"  for="personne_indispensable_2">personne indispensable :</label>
                        <br>
                        <select id="select_personne_indispensable_2" name='selected_personne_indispensable_2'>
                            <OPTION VALUE=''>  </OPTION>'
                            <?php
                            foreach($arrListe_personne as $pers_indis) {
                                $personne_indispensable_resultat = $pers_indis['users'];
                                echo "<OPTION VALUE='$personne_indispensable_resultat'> $personne_indispensable_resultat</OPTION>\n";
                            }
                            ?>
                        </select>
                    </div>
                    <input id="add_personne_indispensable_3" class="btn btn-primary" type="button" value="ajouter personne indispensable">
                    <input id="del_personne_indispensable_2" class="btn btn-primary" type="button" value="supprimer personne indispensable">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6" id="personne_inviter_3">
                    <div class="form-group" id="personne_inviter_3">
                        <label id ="personne_inviter_3"  for="personne_inviter_3">personne inviter :</label>
                        <br>
                        <select id="select_personne_inviter_3" name='selected_personne_inviter_3'>
                            <OPTION VALUE=''>  </OPTION>'
                            <?php
                            foreach($arrListe_personne as $pers_inv) {
                                $personne_inviter_resultat = $pers_inv['users'];
                                echo "<OPTION VALUE='$personne_inviter_resultat'> $personne_inviter_resultat </OPTION>\n";
                            }
                            ?>
                        </select>
                    </div>
                    <input id="add_personne_inviter_4" class="btn btn-primary" type="button" value="ajouter personne inviter">
                    <input id="del_personne_inviter_3" class="btn btn-primary" type="button" value="supprimer personne inviter">
                </div>
                <div class="col-sm-6" id="personne_indispensable_3">
                    <div class="form-group" id="personne_indispensable_3">
                        <label id ="personne_indispensable_3"  for="personne_indispensable_3">personne indispensable :</label>
                        <br>
                        <select id="select_personne_indispensable_3" name='selected_personne_indispensable_3'>
                            <OPTION VALUE=''>  </OPTION>'
                            <?php
                            foreach($arrListe_personne as $pers_indis) {
                                $personne_indispensable_resultat = $pers_indis['users'];
                                echo "<OPTION VALUE='$personne_indispensable_resultat'> $personne_indispensable_resultat</OPTION>\n";
                            }
                            ?>
                        </select>
                    </div>
                    <input id="add_personne_indispensable_4" class="btn btn-primary" type="button" value="ajouter personne indispensable">
                    <input id="del_personne_indispensable_3" class="btn btn-primary" type="button" value="supprimer personne indispensable">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6" id="personne_inviter_4">
                    <div class="form-group" id="personne_inviter_4">
                        <label id ="personne_inviter_4"  for="personne_inviter_4">personne inviter :</label>
                        <br>
                        <select id="select_personne_inviter_4" name='selected_personne_inviter_4'>
                            <OPTION VALUE=''>  </OPTION>'
                            <?php
                            foreach($arrListe_personne as $pers_inv) {
                                $personne_inviter_resultat = $pers_inv['users'];
                                echo "<OPTION VALUE='$personne_inviter_resultat'> $personne_inviter_resultat </OPTION>\n";
                            }
                            ?>
                        </select>
                    </div>
                    <input id="add_personne_inviter_5" class="btn btn-primary" type="button" value="ajouter personne inviter">
                    <input id="del_personne_inviter_4" class="btn btn-primary" type="button" value="supprimer personne inviter">
                </div>
                <div class="col-sm-6" id="personne_indispensable_4">
                    <div class="form-group" id="personne_indispensable_4">
                        <label id ="personne_indispensable_4"  for="personne_indispensable_4">personne indispensable :</label>
                        <br>
                        <select id="select_personne_indispensable_4" name='selected_personne_indispensable_4'>
                            <OPTION VALUE=''>  </OPTION>'
                            <?php
                            foreach($arrListe_personne as $pers_indis) {
                                $personne_indispensable_resultat = $pers_indis['users'];
                                echo "<OPTION VALUE='$personne_indispensable_resultat'> $personne_indispensable_resultat</OPTION>\n";
                            }
                            ?>
                        </select>
                    </div>
                    <input id="add_personne_indispensable_5" class="btn btn-primary" type="button" value="ajouter personne indispensable">
                    <input id="del_personne_indispensable_4" class="btn btn-primary" type="button" value="supprimer personne indispensable">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6" id="personne_inviter_5">
                    <div class="form-group" id="personne_inviter_5">
                        <label id ="personne_inviter_5"  for="personne_inviter_5">personne inviter :</label>
                        <br>
                        <select id="select_personne_inviter_5" name='selected_personne_inviter_5'>
                            <OPTION VALUE=''>  </OPTION>'
                            <?php
                            foreach($arrListe_personne as $pers_inv) {
                                $personne_inviter_resultat = $pers_inv['users'];
                                echo "<OPTION VALUE='$personne_inviter_resultat'> $personne_inviter_resultat </OPTION>\n";
                            }
                            ?>
                        </select>
                    </div>
                    <input id="add_personne_inviter_6" class="btn btn-primary" type="button" value="ajouter personne inviter">
                    <input id="del_personne_inviter_5" class="btn btn-primary" type="button" value="supprimer personne inviter">
                </div>
                <div class="col-sm-6" id="personne_indispensable_5">
                    <div class="form-group" id="personne_indispensable_5">
                        <label id ="personne_indispensable_5"  for="personne_indispensable_5">personne indispensable :</label>
                        <br>
                        <select id="select_personne_indispensable_5" name='selected_personne_indispensable_5'>
                            <OPTION VALUE=''>  </OPTION>'
                            <?php
                            foreach($arrListe_personne as $pers_indis) {
                                $personne_indispensable_resultat = $pers_indis['users'];
                                echo "<OPTION VALUE='$personne_indispensable_resultat'> $personne_indispensable_resultat</OPTION>\n";
                            }
                            ?>
                        </select>
                    </div>
                    <input id="add_personne_indispensable_6" class="btn btn-primary" type="button" value="ajouter personne indispensable">
                    <input id="del_personne_indispensable_5" class="btn btn-primary" type="button" value="supprimer personne indispensable">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6" id="personne_inviter_6">
                    <div class="form-group" id="personne_inviter_6">
                        <label id ="personne_inviter_6"  for="personne_inviter_6">personne inviter :</label>
                        <br>
                        <select id="select_personne_inviter_6" name='selected_personne_inviter_6'>
                            <OPTION VALUE=''>  </OPTION>'
                            <?php
                            foreach($arrListe_personne as $pers_inv) {
                                $personne_inviter_resultat = $pers_inv['users'];
                                echo "<OPTION VALUE='$personne_inviter_resultat'> $personne_inviter_resultat </OPTION>\n";
                            }
                            ?>
                        </select>
                    </div>
                    <input id="add_personne_inviter_7" class="btn btn-primary" type="button" value="ajouter personne inviter">
                    <input id="del_personne_inviter_6" class="btn btn-primary" type="button" value="supprimer personne inviter">
                </div>
                <div class="col-sm-6" id="personne_indispensable_6">
                    <div class="form-group" id="personne_indispensable_6">
                        <label id ="personne_indispensable_6"  for="personne_indispensable_6">personne indispensable :</label>
                        <br>
                        <select id="select_personne_indispensable_6" name='selected_personne_indispensable_6'>
                            <OPTION VALUE=''>  </OPTION>'
                            <?php
                            foreach($arrListe_personne as $pers_indis) {
                                $personne_indispensable_resultat = $pers_indis['users'];
                                echo "<OPTION VALUE='$personne_indispensable_resultat'> $personne_indispensable_resultat</OPTION>\n";
                            }
                            ?>
                        </select>
                    </div>
                    <input id="add_personne_indispensable_7" class="btn btn-primary" type="button" value="ajouter personne indispensable">
                    <input id="del_personne_indispensable_6" class="btn btn-primary" type="button" value="supprimer personne indispensable">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6" id="personne_inviter_7">
                    <div class="form-group" id="personne_inviter_7">
                        <label id ="personne_inviter_7"  for="personne_inviter_7">personne inviter :</label>
                        <br>
                        <select id="select_personne_inviter_7" name='selected_personne_inviter_7'>
                            <OPTION VALUE=''>  </OPTION>'
                            <?php
                            foreach($arrListe_personne as $pers_inv) {
                                $personne_inviter_resultat = $pers_inv['users'];
                                echo "<OPTION VALUE='$personne_inviter_resultat'> $personne_inviter_resultat </OPTION>\n";
                            }
                            ?>
                        </select>
                    </div>
                    <input id="del_personne_inviter_7" class="btn btn-primary" type="button" value="supprimer personne inviter">
                </div>
                <div class="col-sm-6" id="personne_indispensable_7">
                    <div class="form-group" id="personne_indispensable_7">
                        <label id ="personne_indispensable_7"  for="personne_indispensable_7">personne indispensable :</label>
                        <br>
                        <select id="select_personne_indispensable_7" name='selected_personne_indispensable_7'>
                            <OPTION VALUE=''>  </OPTION>'
                            <?php
                            foreach($arrListe_personne as $pers_indis) {
                                $personne_indispensable_resultat = $pers_indis['users'];
                                echo "<OPTION VALUE='$personne_indispensable_resultat'> $personne_indispensable_resultat</OPTION>\n";
                            }
                            ?>
                        </select>
                    </div>
                    <input id="del_personne_indispensable_7" class="btn btn-primary" type="button" value="supprimer personne indispensable">
                </div>
            </div>
            <div class="form-group">
                <br>
                <input id="personne_reunion" class="btn btn-primary" type="button" value="ajouter la reunion">
            </div>
        </form>
    </div>
    </body>
    <script src="../../../model/js/verif_champs_remplis_personne_inviter_indispensable.js"></script>
    <script src="../../../model/js/function_personne_inviter_indispensable_identique.js"></script>
    <script src="../../../model/js/personne_inviter_indispensable_identique.js"></script>
    <script src="../../../model/js/placement_button_personnes.js"></script>
<?php include '../../../view/menu/footer.php';