$(function() {

    $("input.btn.btn-info.btn-md").click(function () {
        validate_connexion();
    });

});

function validate_connexion() {
    // on initialise la variable de validation du formulaire
    var valide_connexion = true;

    //on verifie si le login et le password sont vide
    if ($("#Email").val().replace(/ /g,"") == "" && $("#Mdp").val().replace(/ /g,"") == "" ) {
       alert("Veuillez saisir le login ou le mot de passe");
        valide_connexion = false;
    }

    // on verfie si le login  est vide
    else if ($("#Email").val().replace(/ /g,"") == "") {
        alert("Votre login est vide");
        valide_connexion = false;
    }

    // on verifie si le password est vide
    else if ($("#Mdp").val().replace(/ /g,"") == "") {
        alert("Votre mot de passe est vide");
        valide_connexion = false;
    }

    // on envoie le formulaire si tous les champs sont remplis
    if(valide_connexion ==true)
    {
        $("login-form").submit();
    }
}