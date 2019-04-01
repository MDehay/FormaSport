function verif_champs_remplis_personne_inviter_indispensable() {
    // on initialise la variable de validation du formulaire
    var personne_inviter_indispensable_remplis = true;

    // verifie si les champs personne inviter et personne indispensable ne sont pas ajouter
    if ($("div#personne_inviter_1.col-sm-6").is(":visible") == false && $("div#personne_indispensable_1.col-sm-6").is(":visible") == false) {
        $("span#message_champs_non_remplis").remove();
        $("h1").after('<span id="message_champs_non_remplis"> Veuillez ajouter une personne inviter ou une personne indispensable a la reunion </span>');
        $("span#message_champs_non_remplis").addClass("color_erreur_champ");
        $("span#message_champs_non_remplis").addClass("taille_erreur_champ");
        $("span#message_champs_non_remplis").addClass("border_erreur_champ");
        personne_inviter_indispensable_remplis = false;
    }
    if ($("div#personne_inviter_1.col-sm-6").is(":visible") == true || $("div#personne_indispensable_1.col-sm-6").is(":visible") == true) {
        $("span#message_champs_non_remplis").remove();
    }

    // verifier le champs personne_inviter_1 est afficher
    if ($("div#personne_inviter_1.col-sm-6").is(":visible") == true) {
        // verifier si le champs_personne_inviter_1 la valeur est vide
        if ($("#select_personne_inviter_1 option:selected").val().replace(/ /g, "") == "") {
            $("p#personne_inviter_1").remove();
            $("div#personne_inviter_1.form-group").after('<p id="personne_inviter_1"> Veuillez selectionner une personne inviter </p>');
            $("p#personne_inviter_1").addClass("color_erreur_champ");
            personne_inviter_indispensable_remplis = false;
        }
        else {
            $("p#personne_inviter_1").remove();

        }
    }
    // verifier le champs personne_indispensable_1 est afficher
    if ($("div#personne_indispensable_1.col-sm-6").is(":visible") == true) {
        // verifier si le champs_personne_indispensable_1 la valeur est vide
        if ($("#select_personne_indispensable_1 option:selected").val().replace(/ /g, "") == "") {
            $("p#personne_indispensable_1").remove();
            $("div#personne_indispensable_1.form-group").after('<p id="personne_indispensable_1"> Veuillez selectionner une personne indispensable </p>');
            $("p#personne_indispensable_1").addClass("color_erreur_champ");
            personne_inviter_indispensable_remplis = false;
        }
        else {
            $("p#personne_indispensable_1").remove();
        }

    }

    // verifier le champs personne_inviter_2 est afficher
    if ($("div#personne_inviter_2.col-sm-6").is(":visible") == true) {
        // verifier si le champs_personne_inviter_2 la valeur est vide
        if ($("#select_personne_inviter_2 option:selected").val().replace(/ /g, "") == "") {
            $("p#personne_inviter_2").remove();
            $("div#personne_inviter_2.form-group").after('<p id="personne_inviter_2"> Veuillez selectionner une personne inviter </p>');
            $("p#personne_inviter_2").addClass("color_erreur_champ");
            personne_inviter_indispensable_remplis = false;
        }
        else {
            $("p#personne_inviter_2").remove();

        }
    }

    // verifier le champs personne_indispensable_2 est afficher
    if ($("div#personne_indispensable_2.col-sm-6").is(":visible") == true) {
        // verifier si le champs_personne_indispensable_2 la valeur est vide
        if ($("#select_personne_indispensable_2 option:selected").val().replace(/ /g, "") == "") {
            $("p#personne_indispensable_2").remove();
            $("div#personne_indispensable_2.form-group").after('<p id="personne_indispensable_2"> Veuillez selectionner une personne indispensable </p>');
            $("p#personne_indispensable_2").addClass("color_erreur_champ");
            personne_inviter_indispensable_remplis = false;
        }
        else {
            $("p#personne_indispensable_2").remove();
        }

    }

    // verifier le champs personne_inviter_3 est afficher
    if ($("div#personne_inviter_3.col-sm-6").is(":visible") == true) {
        // verifier si le champs_personne_inviter_3 la valeur est vide
        if ($("#select_personne_inviter_3 option:selected").val().replace(/ /g, "") == "") {
            $("p#personne_inviter_3").remove();
            $("div#personne_inviter_3.form-group").after('<p id="personne_inviter_3"> Veuillez selectionner une personne inviter </p>');
            $("p#personne_inviter_3").addClass("color_erreur_champ");
            personne_inviter_indispensable_remplis = false;
        }
        else {
            $("p#personne_inviter_3").remove();
        }
    }

    // verifier le champs personne_indispensable_3 est afficher
    if ($("div#personne_indispensable_3.col-sm-6").is(":visible") == true) {
        // verifier si le champs_personne_indispensable_3 la valeur est vide
        if ($("#select_personne_indispensable_3 option:selected").val().replace(/ /g, "") == "") {
            $("p#personne_indispensable_3").remove();
            $("div#personne_indispensable_3.form-group").after('<p id="personne_indispensable_3"> Veuillez selectionner une personne indispensable </p>');
            $("p#personne_indispensable_3").addClass("color_erreur_champ");
            personne_inviter_indispensable_remplis = false;
        }
        else {
            $("p#personne_indispensable_3").remove();
        }
    }

    // verifier le champs personne_inviter_4 est afficher
    if ($("div#personne_inviter_4.col-sm-6").is(":visible") == true) {
        // verifier si le champs_personne_inviter_4 la valeur est vide
        if ($("#select_personne_inviter_4 option:selected").val().replace(/ /g, "") == "") {
            $("p#personne_inviter_4").remove();
            $("div#personne_inviter_4.form-group").after('<p id="personne_inviter_4"> Veuillez selectionner une personne inviter </p>');
            $("p#personne_inviter_4").addClass("color_erreur_champ");
            personne_inviter_indispensable_remplis = false;
        }
        else {
            $("p#personne_inviter_4").remove();
        }
    }

    // verifier le champs personne_indispensable_4 est afficher
    if ($("div#personne_indispensable_4.col-sm-6").is(":visible") == true) {
        // verifier si le champs_personne_indispensable_4 la valeur est vide
        if ($("#select_personne_indispensable_4 option:selected").val().replace(/ /g, "") == "") {
            $("p#personne_indispensable_4").remove();
            $("div#personne_indispensable_4.form-group").after('<p id="personne_indispensable_4"> Veuillez selectionner une personne indispensable </p>');
            $("p#personne_indispensable_4").addClass("color_erreur_champ");
            personne_inviter_indispensable_remplis = false;
        }
        else {
            $("p#personne_indispensable_4").remove();
        }
    }

    // verifier le champs personne_inviter_5 est afficher
    if ($("div#personne_inviter_5.col-sm-6").is(":visible") == true) {
        // verifier si le champs_personne_inviter_5 la valeur est vide
        if ($("#select_personne_inviter_5 option:selected").val().replace(/ /g, "") == "") {
            $("p#personne_inviter_5").remove();
            $("div#personne_inviter_5.form-group").after('<p id="personne_inviter_5"> Veuillez selectionner une personne inviter </p>');
            $("p#personne_inviter_5").addClass("color_erreur_champ");
            personne_inviter_indispensable_remplis = false;
        }
        else {
            $("p#personne_inviter_5").remove();
        }
    }

    // verifier le champs personne_indispensable_5 est afficher
    if ($("div#personne_indispensable_5.col-sm-6").is(":visible") == true) {
        // verifier si le champs_personne_indispensable_4 la valeur est vide
        if ($("#select_personne_indispensable_5 option:selected").val().replace(/ /g, "") == "") {
            $("p#personne_indispensable_5").remove();
            $("div#personne_indispensable_5.form-group").after('<p id="personne_indispensable_5"> Veuillez selectionner une personne indispensable </p>');
            $("p#personne_indispensable_5").addClass("color_erreur_champ");
            personne_inviter_indispensable_remplis = false;
        }
        else {
            $("p#personne_indispensable_5").remove();
        }
    }

    // verifier le champs personne_inviter_6 est afficher
    if ($("div#personne_inviter_6.col-sm-6").is(":visible") == true) {
        // verifier si le champs_personne_inviter_6 la valeur est vide
        if ($("#select_personne_inviter_6 option:selected").val().replace(/ /g, "") == "") {
            $("p#personne_inviter_6").remove();
            $("div#personne_inviter_6.form-group").after('<p id="personne_inviter_6"> Veuillez selectionner une personne inviter </p>');
            $("p#personne_inviter_6").addClass("color_erreur_champ");
            personne_inviter_indispensable_remplis = false;
        }
        else {
            $("p#personne_inviter_6").remove();
        }
    }

    // verifier le champs personne_indispensable_6 est afficher
    if ($("div#personne_indispensable_6.col-sm-6").is(":visible") == true) {
        // verifier si le champs_personne_indispensable_6 la valeur est vide
        if ($("#select_personne_indispensable_6 option:selected").val().replace(/ /g, "") == "") {
            $("p#personne_indispensable_6").remove();
            $("div#personne_indispensable_6.form-group").after('<p id="personne_indispensable_6"> Veuillez selectionner une personne indispensable </p>');
            $("p#personne_indispensable_6").addClass("color_erreur_champ");
            personne_inviter_indispensable_remplis = false;
        }
        else {
            $("p#personne_indispensable_6").remove();
        }
    }

    // verifier le champs personne_inviter_7 est afficher
    if ($("div#personne_inviter_7.col-sm-6").is(":visible") == true) {
        // verifier si le champs_personne_inviter_6 la valeur est vide
        if ($("#select_personne_inviter_7 option:selected").val().replace(/ /g, "") == "") {
            $("p#personne_inviter_7").remove();
            $("div#personne_inviter_7.form-group").after('<p id="personne_inviter_7"> Veuillez selectionner une personne inviter </p>');
            $("p#personne_inviter_7").addClass("color_erreur_champ");
            personne_inviter_indispensable_remplis = false;
        }
        else {
            $("p#personne_inviter_7").remove();
        }
    }

    // verifier le champs personne_indispensable_7 est afficher
    if ($("div#personne_indispensable_7.col-sm-6").is(":visible") == true) {
        // verifier si le champs_personne_indispensable_7 la valeur est vide
        if ($("#select_personne_indispensable_7 option:selected").val().replace(/ /g, "") == "") {
            $("p#personne_indispensable_7").remove();
            $("div#personne_indispensable_7.form-group").after('<p id="personne_indispensable_7"> Veuillez selectionner une personne indispensable </p>');
            $("p#personne_indispensable_7").addClass("color_erreur_champ");
            personne_inviter_indispensable_remplis = false;
        }
        else {
            $("p#personne_indispensable_7").remove();
        }
    }


    if( personne_inviter_indispensable_remplis == true)
    {
        personne_inviter_indispensable_identique();
    }
}

