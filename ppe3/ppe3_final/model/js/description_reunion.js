
$(function() {

    $("#lieu_other_reunion").hide();

    //fonction qui permet d'afficher un champ texte dans le formulaire quand selectionne other dans le lieu
    $("#select_lieu").click(function () {
        if ($("#select_lieu option:selected").val() == "other") {
            $("p#lieu_reunion").remove();
            $("#select_lieu").hide();
            $("#lieu_other_reunion").show();
        }
    });
    //lancement de la verification du formulaire quand on clique sur suivant
    $("#intitule_reunion").click(function () {
        valid_description_reunion();
    });
});

function valid_description_reunion(){
    // on initialise la variable de validation du formulaire
    var valide_description_reunion = true;

    //on verifie si le champs objet de la reunion est vide
    if($("#objet_reunion").val().replace(/ /g,"") == "")
    {
        $("p#objet_reunion").remove();
        $("#objet_reunion").after("<p id='objet_reunion'> Veuillez saisir l'objet de la reunion </p>");
        $("p#objet_reunion").addClass("color_erreur_champ");
        valide_description_reunion = false;
    }
    else{
        $("p#objet_reunion").remove();

    }

    //on verifie si le champs description de la reunion est vide
    if($("#description_reunion").val().replace(/ /g,"") == "")
    {
        $("p#description_reunion").remove();
        $("#description_reunion").after("<p id='description_reunion'> Veuillez saisir la description de la reunion </p>");
        $("p#description_reunion").addClass("color_erreur_champ");
        valide_description_reunion = false;
    }
    else{
        $("p#description_reunion").remove();
    }

    //on verifie que le lieu est bien selectionner dans la liste deroulante
    if ($("#select_lieu option:selected").val().replace(/ /g,"") =="")
    {
        $("p#lieu_reunion").remove();
        $("#select_lieu").after("<p id='lieu_reunion'> Veuillez selectionner le lieu de la reunion </p>");
        $("p#lieu_reunion").addClass("color_erreur_champ");
        valide_description_reunion = false;
    }
    else{
        $("p#lieu_reunion").remove();

    }
    //on verifie si le lieu de la reunion est bien saisir quand selectionne other dans le lieux
    if ($("#select_lieu option:selected").val().replace(/ /g,"") =="other")
    {
        if($("#lieu_other_reunion").val().replace(/ /g,"") == "")
        {
            $("p#lieu_other_reunion").remove();
            $("#lieu_other_reunion").after("<p id='lieu_other_reunion'> Veuillez saisir le lieu de la reunion </p>");
            $("p#lieu_other_reunion").addClass("color_erreur_champ");
            valide_description_reunion = false;
        }

        else{
            $("p#lieu_other_reunion").remove();
        }
    }
    //envoyer le formulaire si tous les champs son rempli
    if(valide_description_reunion == true){
        $("#validate_description_reunion").submit();
    }
}