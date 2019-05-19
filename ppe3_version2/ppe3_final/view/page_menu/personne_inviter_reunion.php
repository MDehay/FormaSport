<?php
session_start();
include_once '../menu/header.php';
include_once('../menu/menu.php');
include_once ('../../controller/reunion/redirection/redirection_reunion.php');
?>
    <div class="container" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
        <h1> Ajouter les personnes inviter et personnes indispensables</h1>
        <form id="form_personne_reunion" action="<?php echo $redirection; ?>" method="post" class="form">
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
                            <?php
                            foreach($arrListe_personne as $pers_inv) {
                                $personne_inviter_resultat = $pers_inv['users'];
                                if($personne_inviter_resultat == $organisateur)
                                {
                                    if(!empty($id_dis))
                                    {?>
                                       <OPTION VALUE='<?php if($verif_personne_reunion==0){echo $personne_reunion;} ?>'> <?php if($verif_personne_reunion==0){echo $personne_reunion;} ?> </OPTION>
                                    <?php
                                                                                                                                                                                                          }
                                    else
                                        {
                                            echo "<OPTION VALUE=''></OPTION>\n";
                                        }
                                }
                                else {
                                    echo "<OPTION VALUE='$personne_inviter_resultat'> $personne_inviter_resultat </OPTION>\n";

                                }
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
                            <?php
                            foreach($arrListe_personne as $pers_inv) {
                                $personne_inviter_resultat = $pers_inv['users'];
                                if($personne_inviter_resultat == $organisateur)
                                {
                                    if(!empty($id_dis))
                                    { ?>
                                       <OPTION VALUE='<?php if($verif_personne_reunion==1){echo $personne_reunion;} ?>'> <?php if($verif_personne_reunion==1){echo $personne_reunion;} ?> </OPTION>
                                   <?php
                                    }
                                    else
                                        {
                                            echo "<OPTION VALUE=''></OPTION>\n";
                                        }
                                }
                                else {
                                    echo "<OPTION VALUE='$personne_inviter_resultat'> $personne_inviter_resultat </OPTION>\n";

                                }
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
                            <?php
                            foreach($arrListe_personne as $pers_inv) {
                                $personne_inviter_resultat = $pers_inv['users'];
                                if($personne_inviter_resultat == $organisateur)
                                {
                                    echo "<OPTION VALUE=''></OPTION>\n";
                                }
                                else {
                                    echo "<OPTION VALUE='$personne_inviter_resultat'> $personne_inviter_resultat </OPTION>\n";

                                }
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
                            <?php
                            foreach($arrListe_personne as $pers_inv) {
                                $personne_inviter_resultat = $pers_inv['users'];
                                if($personne_inviter_resultat == $organisateur)
                                {
                                    echo "<OPTION VALUE=''></OPTION>\n";
                                }
                                else {
                                    echo "<OPTION VALUE='$personne_inviter_resultat'> $personne_inviter_resultat </OPTION>\n";

                                }
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
                            <?php
                            foreach($arrListe_personne as $pers_inv) {
                                $personne_inviter_resultat = $pers_inv['users'];
                                if($personne_inviter_resultat == $organisateur)
                                {
                                    echo "<OPTION VALUE=''></OPTION>\n";
                                }
                                else {
                                    echo "<OPTION VALUE='$personne_inviter_resultat'> $personne_inviter_resultat </OPTION>\n";

                                }
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
                            <?php
                            foreach($arrListe_personne as $pers_inv) {
                                $personne_inviter_resultat = $pers_inv['users'];
                                if($personne_inviter_resultat == $organisateur)
                                {
                                    echo "<OPTION VALUE=''></OPTION>\n";
                                }
                                else {
                                    echo "<OPTION VALUE='$personne_inviter_resultat'> $personne_inviter_resultat </OPTION>\n";

                                }
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
                            <?php
                            foreach($arrListe_personne as $pers_inv) {
                                $personne_inviter_resultat = $pers_inv['users'];
                                if($personne_inviter_resultat == $organisateur)
                                {
                                    echo "<OPTION VALUE=''></OPTION>\n";
                                }
                                else {
                                    echo "<OPTION VALUE='$personne_inviter_resultat'> $personne_inviter_resultat </OPTION>\n";

                                }
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
                            <?php
                            foreach($arrListe_personne as $pers_inv) {
                                $personne_inviter_resultat = $pers_inv['users'];
                                if($personne_inviter_resultat == $organisateur)
                                {
                                    echo "<OPTION VALUE=''></OPTION>\n";
                                }
                                else {
                                    echo "<OPTION VALUE='$personne_inviter_resultat'> $personne_inviter_resultat </OPTION>\n";

                                }
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
                            <?php
                            foreach($arrListe_personne as $pers_inv) {
                                $personne_inviter_resultat = $pers_inv['users'];
                                if($personne_inviter_resultat == $organisateur)
                                {
                                    echo "<OPTION VALUE=''></OPTION>\n";
                                }
                                else {
                                    echo "<OPTION VALUE='$personne_inviter_resultat'> $personne_inviter_resultat </OPTION>\n";

                                }
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
                            <?php
                            foreach($arrListe_personne as $pers_inv) {
                                $personne_inviter_resultat = $pers_inv['users'];
                                if($personne_inviter_resultat == $organisateur)
                                {
                                    echo "<OPTION VALUE=''></OPTION>\n";
                                }
                                else {
                                    echo "<OPTION VALUE='$personne_inviter_resultat'> $personne_inviter_resultat </OPTION>\n";

                                }
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
                            <?php
                            foreach($arrListe_personne as $pers_inv) {
                                $personne_inviter_resultat = $pers_inv['users'];
                                if($personne_inviter_resultat == $organisateur)
                                {
                                    echo "<OPTION VALUE=''></OPTION>\n";
                                }
                                else {
                                    echo "<OPTION VALUE='$personne_inviter_resultat'> $personne_inviter_resultat </OPTION>\n";

                                }
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
                            <?php
                            foreach($arrListe_personne as $pers_inv) {
                                $personne_inviter_resultat = $pers_inv['users'];
                                if($personne_inviter_resultat == $organisateur)
                                {
                                    echo "<OPTION VALUE=''></OPTION>\n";
                                }
                                else {
                                    echo "<OPTION VALUE='$personne_inviter_resultat'> $personne_inviter_resultat </OPTION>\n";

                                }
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
                            <?php
                            foreach($arrListe_personne as $pers_inv) {
                                $personne_inviter_resultat = $pers_inv['users'];
                                if($personne_inviter_resultat == $organisateur)
                                {
                                    echo "<OPTION VALUE=''></OPTION>\n";
                                }
                                else {
                                    echo "<OPTION VALUE='$personne_inviter_resultat'> $personne_inviter_resultat </OPTION>\n";

                                }
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
                            <?php
                            foreach($arrListe_personne as $pers_inv) {
                                $personne_inviter_resultat = $pers_inv['users'];
                                if($personne_inviter_resultat == $organisateur)
                                {
                                    echo "<OPTION VALUE=''></OPTION>\n";
                                }
                                else {
                                    echo "<OPTION VALUE='$personne_inviter_resultat'> $personne_inviter_resultat </OPTION>\n";

                                }
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

<?php include '../menu/footer.php';
