$(function() {
    //fonction qui affiche et masque les difference creneaux et horaire
    $("div#creneau_1.row").hide();
    $("div#creneau_2.row").hide();
    $("div#creneau_3.row").hide();
    $("div#creneau_4.row").hide();
    $("input#del_date_reunion.btn.btn-primary").hide();
    $("input#add_creneau_1.btn.btn-primary").click(function () {
        $("div#creneau_1.row").show();
        $("div input#add_creneau_1.btn.btn-primary").hide();
    });
    $("input#del_creneau_1.btn.btn-primary").click(function () {
        $("div#creneau_1.row").hide();
        $("div input#add_creneau_1.btn.btn-primary").show();
    });
    $("#add_date_reunion").click(function () {
        $("div#creneau_2.row").show();
        $("div#creneau_3.row").show();
        $("div input#add_creneau_2.btn.btn-primary").show();
        $("#add_date_reunion").hide();
        $("input#del_date_reunion.btn.btn-primary").show();
    });
    $("input#add_creneau_2.btn.btn-primary").click(function () {
        $("div#creneau_4.row").show();
        $("input#add_creneau_2.btn.btn-primary").hide();
        $("input#del_date_reunion.btn.btn-primary").show();
    });
    $("input#del_creneau_2.btn.btn-primary").click(function () {
        $("div#creneau_4.row").hide();
        $("input#add_creneau_2.btn.btn-primary").show();
        $("input#del_date_reunion.btn.btn-primary").hides();
    });
    $("input#del_date_reunion.btn.btn-primary").click(function () {
        $("div#creneau_2.row").hide();
        $("div#creneau_3.row").hide();
        $("div#creneau_4.row").hide();
        $("#add_date_reunion").show();
        $("input#del_date_reunion.btn.btn-primary").hide();
    });
    $("#horaire_reunion").click(function () {
        validate_date_reunion();
    })
});

function validate_date_reunion() {
    // on initialise la variable de validation du formulaire
    var valide_date_reunion = true;

    //on verifie que le champs date_reunion est vide
    if($("#date_reunion_1").val() == "")
    {
        $("p#horaire_reunion").remove();
        $("#date_reunion_1").after("<p id='horaire_reunion'> Veuillez saisir la date de la reunion </p>");
        $("p#horaire_reunion").addClass("color_erreur_champ");
        valide_date_reunion = false;
    }
    else{
        $("p#horaire_reunion").remove();

    }

    //on verifie que le champs date_valide est vide
    if($("#date_validate_1").val() == "")
    {
        $("p#horaire_reunion_validate").remove();
        $("#date_validate_1").after("<p id='horaire_reunion_validate'> Veuillez saisir la date de validation de la reunion </p>");
        $("p#horaire_reunion_validate").addClass("color_erreur_champ");
        valide_date_reunion = false;
    }
    else{
        $("p#horaire_reunion_validate").remove();

    }

    //on verifie que le champs date_valide est valide
    if($("#date_validate_1").val() > ($("#date_reunion_1").val()))
    {
        $("p#horaire_reunion_validate_date_reunion_1").remove();
        $("#date_validate_1").after("<p id='horaire_reunion_validate_date_reunion_1'> Veuillez saisir une date de validite inferieur a la date de reunion </p>");
        $("p#horaire_reunion_validate_date_reunion_1").addClass("color_erreur_champ");
        valide_date_reunion = false;
    }
    else{
        $("p#horaire_reunion_validate_date_reunion_1").remove();

    }

    //on verifie que le champs creneau_debut_1 est vide
    if($("#creneau_debut_1").val() == "")
    {
        $("p#creneau_debut").remove();
        $("#creneau_debut_1").after("<p id='creneau_debut'> Veuillez saisir le creneau de debut de la reunion </p>");
        $("p#creneau_debut").addClass("color_erreur_champ");
        valide_date_reunion = false;
    }
    else{
        $("p#creneau_debut").remove();

    }

    //on verifie que le champs creneau_debut_1 est vide
    if($("#creneau_fin_1").val() == "")
    {
        $("p#creneau_fin").remove();
        $("#creneau_fin_1").after("<p id='creneau_fin'> Veuillez saisir le creneau de fin de la reunion </p>");
        $("p#creneau_fin").addClass("color_erreur_champ");
        valide_date_reunion = false;
    }
    else{
        $("p#creneau_fin").remove();

    }

    if($("div#creneau_1.row").is(":visible") == true)
    {
        if($("#creneau_debut_2").val() == "")

        {
            $("p#creneau_debut_2").remove();
            $("#creneau_debut_2").after("<p id='creneau_debut_2'> Veuillez saisir le creneau de debut de la reunion </p>");
            $("p#creneau_debut_2").addClass("color_erreur_champ");
            valide_date_reunion = false;
        }
        else
        {
            $("p#creneau_debut_2").remove();
        }

        if($("#creneau_fin_2").val() == "")
        {
            $("p#creneau_fin_2").remove();
            $("#creneau_fin_2").after("<p id='creneau_fin_2'> Veuillez saisir le creneau de fin de la reunion </p>");
            $("p#creneau_fin_2").addClass("color_erreur_champ");
            valide_date_reunion = false;
        }
        else
        {
            $("p#creneau_fin_2").remove();
        }
    }

    if($("div#creneau_2.row").is(":visible") == true)
    {
        if($("#date2_reunion_2").val() == "")
        {
            $("p#horaire2_reunion_2").remove();
            $("#date2_reunion_2").after("<p id='horaire2_reunion_2'> Veuillez saisir la date de la reunion </p>");
            $("p#horaire2_reunion_2").addClass("color_erreur_champ");
            valide_date_reunion = false;
        }
        else{
            $("p#horaire2_reunion_2").remove();

        }
        if($("#date_validate_1").val() > ($("#date2_reunion_2").val()))
        {
            $("p#horaire_reunion_validate_date_reunion_1").remove();
            $("#date_validate_1").after("<p id='horaire_reunion_validate_date_reunion_1'> Veuillez saisir une date de validite inferieur a la date de reunion </p>");
            $("p#horaire_reunion_validate_date_reunion_1").addClass("color_erreur_champ");
            valide_date_reunion = false;
        }
        else{
            $("p#horaire_reunion_validate_date_reunion_1").remove();

        }
    }

    if($("div#creneau_3.row").is(":visible") == true)
    {
        if($("#creneau2_debut_1").val() == "")

        {
            $("p#creneau2_debut_1").remove();
            $("#creneau2_debut_1").after("<p id='creneau2_debut_1'> Veuillez saisir le creneau de debut de la reunion </p>");
            $("p#creneau2_debut_1").addClass("color_erreur_champ");
            valide_date_reunion = false;
        }
        else
        {
            $("p#creneau2_debut_1").remove();
        }

        if($("#creneau2_fin_1").val() == "")
        {
            $("p#creneau2_fin_1").remove();
            $("#creneau2_fin_1").after("<p id='creneau2_fin_1'> Veuillez saisir le creneau de fin de la reunion </p>");
            $("p#creneau2_fin_1").addClass("color_erreur_champ");
            valide_date_reunion = false;
        }
        else
        {
            $("p#creneau2_fin_1").remove();
        }

    }

    if($("div#creneau_4.row").is(":visible") == true)
    {
        if($("#creneau2_debut_2").val() == "")

        {
            $("p#creneau2_debut_2").remove();
            $("#creneau2_debut_2").after("<p id='creneau2_debut_2'> Veuillez saisir le creneau de debut de la reunion </p>");
            $("p#creneau2_debut_2").addClass("color_erreur_champ");
            valide_date_reunion = false;
        }
        else
        {
            $("p#creneau2_debut_2").remove();
        }

        if($("#creneau2_fin_2").val() == "")
        {
            $("p#creneau2_fin_2").remove();
            $("#creneau2_fin_2").after("<p id='creneau2_fin_2'> Veuillez saisir le creneau de fin de la reunion </p>");
            $("p#creneau2_fin_2").addClass("color_erreur_champ");
            valide_date_reunion = false;
        }
        else
        {
            $("p#creneau2_fin_2").remove();
        }

    }

    //on verifie si tous les champs sont rempli
    if(valide_date_reunion == true)
    {
        $("#form_horaire_reunion").submit();
    }

}