function personne_inviter_indispensable_identique()
{
    if ($("div#personne_inviter_1.col-sm-6").is(":visible") == true)
    {
        if ($("#select_personne_indispensable_1").val() != "")
        {
            personne_inviter_1_indispensable_1_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_1").val())
            {
                $("#select_personne_indispensable_1").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_2").val() != "")
        {
            personne_inviter_1_indispensable_2_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_2").val())
            {
                $("#select_personne_indispensable_2").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_3").val() != "")
        {
            personne_inviter_1_indispensable_3_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_3").val())
            {
                $("#select_personne_indispensable_3").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_4").val() != "")
        {
            personne_inviter_1_indispensable_4_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_4").val())
            {
                $("#select_personne_indispensable_4").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_5").val() != "")
        {
            personne_inviter_1_indispensable_5_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_5").val())
            {
                $("#select_personne_indispensable_5").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_6").val() != "")
        {
            personne_inviter_1_indispensable_6_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_6").val())
            {
                $("#select_personne_indispensable_6").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_7").val() != "")
        {
            personne_inviter_1_indispensable_7_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_7").val())
            {
                $("#select_personne_indispensable_7").removeClass("border_erreur_champ");
            }
        }
        if($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_2").val()
        && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_4").val()
        && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_6").val()
        && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_7").val())
        {
            $("#select_personne_inviter_1").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_1 = true
        }

        if(valid_error_inviter_1 == true)
        {
            $("span#personne_inviter_indispensable_identique").remove();
            var valid_inviter_1=true;
        }


    }
     if ($("div#personne_inviter_1.col-sm-6").is(":visible") == true && $("div#personne_inviter_2.col-sm-6").is(":visible") == true)
    {
        if ($("#select_personne_indispensable_1").val() != "")
        {
            personne_inviter_1_indispensable_1_identique();
            personne_inviter_2_indispensable_1_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_1").val())
                {
                   $("#select_personne_indispensable_1").removeClass("border_erreur_champ");
                }
        }
        if ($("#select_personne_indispensable_2").val() != "")
        {
            personne_inviter_1_indispensable_2_identique();
            personne_inviter_2_indispensable_2_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_2").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_2").val())
            {
               $("#select_personne_indispensable_2").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_3").val() != "")
        {
            personne_inviter_1_indispensable_3_identique();
            personne_inviter_2_indispensable_3_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_3").val())
            {
                $("#select_personne_indispensable_3").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_4").val() != "")
        {
            personne_inviter_1_indispensable_4_identique();
            personne_inviter_2_indispensable_4_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_4").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_4").val())
            {
                $("#select_personne_indispensable_4").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_5").val() != "")
        {
            personne_inviter_1_indispensable_5_identique();
            personne_inviter_2_indispensable_5_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_5").val())
            {
                $("#select_personne_indispensable_5").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_6").val() != "")
        {
            personne_inviter_1_indispensable_6_identique();
            personne_inviter_2_indispensable_6_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_6").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_6").val())
            {
                $("#select_personne_indispensable_6").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_7").val() != "")
        {
            personne_inviter_1_indispensable_7_identique();
            personne_inviter_2_indispensable_7_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_7").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_7").val())
            {
                $("#select_personne_indispensable_7").removeClass("border_erreur_champ");
            }
        }
        if($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_7").val())
        {
            $("#select_personne_inviter_1").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_1 = true
        }
        if($("#select_personne_inviter_2").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_7").val())
        {
            $("#select_personne_inviter_2").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_2 = true
        }
        if(valid_error_inviter_1 == true && valid_error_inviter_2 == true)
        {
            $("span#personne_inviter_indispensable_identique").remove();
        }
    }
    if ($("div#personne_inviter_1.col-sm-6").is(":visible") == true && $("div#personne_inviter_2.col-sm-6").is(":visible") == true && $("div#personne_inviter_3.col-sm-6").is(":visible") == true)
    {
        if ($("#select_personne_indispensable_1").val() != "")
        {
            personne_inviter_1_indispensable_1_identique();
            personne_inviter_2_indispensable_1_identique();
            personne_inviter_3_indispensable_1_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_1").val()
            && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_1").val())
            {
                $("#select_personne_indispensable_1").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_2").val() != "")
        {
            personne_inviter_1_indispensable_2_identique();
            personne_inviter_2_indispensable_2_identique();
            personne_inviter_3_indispensable_2_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_2").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_2").val())
            {
                $("#select_personne_indispensable_2").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_3").val() != "")
        {
            personne_inviter_1_indispensable_3_identique();
            personne_inviter_2_indispensable_3_identique();
            personne_inviter_3_indispensable_3_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_3").val()
            && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_3").val())
            {
                $("#select_personne_indispensable_3").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_4").val() != "")
        {
            personne_inviter_1_indispensable_4_identique();
            personne_inviter_2_indispensable_4_identique();
            personne_inviter_3_indispensable_4_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_4").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_4").val())
            {
                $("#select_personne_indispensable_4").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_5").val() != "")
        {
            personne_inviter_1_indispensable_5_identique();
            personne_inviter_2_indispensable_5_identique();
            personne_inviter_3_indispensable_5_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_5").val()
            && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_5").val())
            {
                $("#select_personne_indispensable_5").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_6").val() != "")
        {
            personne_inviter_1_indispensable_6_identique();
            personne_inviter_2_indispensable_6_identique();
            personne_inviter_3_indispensable_6_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_6").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_6").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_6").val())
            {
                $("#select_personne_indispensable_6").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_7").val() != "")
        {
            personne_inviter_1_indispensable_7_identique();
            personne_inviter_2_indispensable_7_identique();
            personne_inviter_3_indispensable_7_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_7").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_7").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_7").val())
            {
                $("#select_personne_indispensable_7").removeClass("border_erreur_champ");
            }
        }
        if($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_7").val())
        {
            $("#select_personne_inviter_1").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_1 = true;

        }
        if($("#select_personne_inviter_2").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_7").val())
        {
            $("#select_personne_inviter_2").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_2 = true;
        }
        if($("#select_personne_inviter_3").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_7").val())
        {
            $("#select_personne_inviter_3").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_3 = true;
        }
        if(valid_error_inviter_1 == true && valid_error_inviter_2 == true && valid_error_inviter_3 == true)
        {
            $("span#personne_inviter_indispensable_identique").remove();
        }
    }
    if ($("div#personne_inviter_1.col-sm-6").is(":visible") == true && $("div#personne_inviter_2.col-sm-6").is(":visible") == true && $("div#personne_inviter_3.col-sm-6").is(":visible") == true
    && $("div#personne_inviter_4.col-sm-6").is(":visible") == true)
    {
        if ($("#select_personne_indispensable_1").val() != "")
        {
            personne_inviter_1_indispensable_1_identique();
            personne_inviter_2_indispensable_1_identique();
            personne_inviter_3_indispensable_1_identique();
            personne_inviter_4_indispensable_1_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_1").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_1").val())
            {
                $("#select_personne_indispensable_1").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_2").val() != "")
        {
            personne_inviter_1_indispensable_2_identique();
            personne_inviter_2_indispensable_2_identique();
            personne_inviter_3_indispensable_2_identique();
            personne_inviter_4_indispensable_2_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_2").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_2").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_2").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_2").val())
            {
                $("#select_personne_indispensable_2").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_3").val() != "")
        {
            personne_inviter_1_indispensable_3_identique();
            personne_inviter_2_indispensable_3_identique();
            personne_inviter_3_indispensable_3_identique();
            personne_inviter_4_indispensable_3_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_3").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_3").val())
            {
                $("#select_personne_indispensable_3").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_4").val() != "")
        {
            personne_inviter_1_indispensable_4_identique();
            personne_inviter_2_indispensable_4_identique();
            personne_inviter_3_indispensable_4_identique();
            personne_inviter_4_indispensable_4_identique();


            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_4").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_4").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_4").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_4").val())
            {
                $("#select_personne_indispensable_4").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_5").val() != "")
        {
            personne_inviter_1_indispensable_5_identique();
            personne_inviter_2_indispensable_5_identique();
            personne_inviter_3_indispensable_5_identique();
            personne_inviter_4_indispensable_5_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_5").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_5").val())
            {
                $("#select_personne_indispensable_5").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_6").val() != "")
        {
            personne_inviter_1_indispensable_6_identique();
            personne_inviter_2_indispensable_6_identique();
            personne_inviter_3_indispensable_6_identique();
            personne_inviter_4_indispensable_6_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_6").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_6").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_6").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_6").val())
            {
                $("#select_personne_indispensable_6").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_7").val() != "")
        {
            personne_inviter_1_indispensable_7_identique();
            personne_inviter_2_indispensable_7_identique();
            personne_inviter_3_indispensable_7_identique();
            personne_inviter_4_indispensable_7_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_7").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_7").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_7").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_7").val())
            {
                $("#select_personne_indispensable_7").removeClass("border_erreur_champ");
            }
        }
        if($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_7").val())
        {
            $("#select_personne_inviter_1").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_1 = true;

        }
        if($("#select_personne_inviter_2").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_7").val())
        {
            $("#select_personne_inviter_2").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_2 = true;
        }
        if($("#select_personne_inviter_3").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_7").val())
        {
            $("#select_personne_inviter_3").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_3 = true;
        }
        if($("#select_personne_inviter_4").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_7").val())
        {
            $("#select_personne_inviter_4").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_4 = true;
        }
        if(valid_error_inviter_1 == true && valid_error_inviter_2 == true && valid_error_inviter_3 == true && valid_error_inviter_4 == true)
        {
            $("span#personne_inviter_indispensable_identique").remove();
        }
    }
    if ($("div#personne_inviter_1.col-sm-6").is(":visible") == true && $("div#personne_inviter_2.col-sm-6").is(":visible") == true && $("div#personne_inviter_3.col-sm-6").is(":visible") == true
        && $("div#personne_inviter_4.col-sm-6").is(":visible") == true && $("div#personne_inviter_5.col-sm-6").is(":visible") == true)
    {
        if ($("#select_personne_indispensable_1").val() != "")
        {
            personne_inviter_1_indispensable_1_identique();
            personne_inviter_2_indispensable_1_identique();
            personne_inviter_3_indispensable_1_identique();
            personne_inviter_4_indispensable_1_identique();
            personne_inviter_5_indispensable_1_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_1").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_1").val()
                && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_1").val())
            {
                $("#select_personne_indispensable_1").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_2").val() != "")
        {
            personne_inviter_1_indispensable_2_identique();
            personne_inviter_2_indispensable_2_identique();
            personne_inviter_3_indispensable_2_identique();
            personne_inviter_4_indispensable_2_identique();
            personne_inviter_5_indispensable_2_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_2").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_2").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_2").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_2").val()
                && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_2").val())
            {
                $("#select_personne_indispensable_2").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_3").val() != "")
        {
            personne_inviter_1_indispensable_3_identique();
            personne_inviter_2_indispensable_3_identique();
            personne_inviter_3_indispensable_3_identique();
            personne_inviter_4_indispensable_3_identique();
            personne_inviter_5_indispensable_3_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_3").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_3").val()
                && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_3").val())
            {
                $("#select_personne_indispensable_3").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_4").val() != "")
        {
            personne_inviter_1_indispensable_4_identique();
            personne_inviter_2_indispensable_4_identique();
            personne_inviter_3_indispensable_4_identique();
            personne_inviter_4_indispensable_4_identique();
            personne_inviter_5_indispensable_4_identique();


            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_4").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_4").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_4").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_4").val()
                && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_4").val())
            {
                $("#select_personne_indispensable_4").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_5").val() != "")
        {
            personne_inviter_1_indispensable_5_identique();
            personne_inviter_2_indispensable_5_identique();
            personne_inviter_3_indispensable_5_identique();
            personne_inviter_4_indispensable_5_identique();
            personne_inviter_5_indispensable_4_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_5").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_5").val()
                && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_5").val())
            {
                $("#select_personne_indispensable_5").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_6").val() != "")
        {
            personne_inviter_1_indispensable_6_identique();
            personne_inviter_2_indispensable_6_identique();
            personne_inviter_3_indispensable_6_identique();
            personne_inviter_4_indispensable_6_identique();
            personne_inviter_5_indispensable_6_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_6").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_6").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_6").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_6").val()
                && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_6").val())
            {
                $("#select_personne_indispensable_6").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_7").val() != "")
        {
            personne_inviter_1_indispensable_7_identique();
            personne_inviter_2_indispensable_7_identique();
            personne_inviter_3_indispensable_7_identique();
            personne_inviter_4_indispensable_7_identique();
            personne_inviter_5_indispensable_7_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_7").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_7").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_7").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_7").val()
                && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_7").val())
            {
                $("#select_personne_indispensable_7").removeClass("border_erreur_champ");
            }
        }
        if($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_7").val())
        {
            $("#select_personne_inviter_1").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_1 = true;

        }
        if($("#select_personne_inviter_2").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_7").val())
        {
            $("#select_personne_inviter_2").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_2 = true;
        }
        if($("#select_personne_inviter_3").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_7").val())
        {
            $("#select_personne_inviter_3").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_3 = true;
        }
        if($("#select_personne_inviter_4").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_7").val())
        {
            $("#select_personne_inviter_4").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_4 = true;
        }
        if($("#select_personne_inviter_5").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_7").val())
        {
            $("#select_personne_inviter_5").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_5 = true;
        }
        if(valid_error_inviter_1 == true && valid_error_inviter_2 == true && valid_error_inviter_3 == true && valid_error_inviter_4 == true && valid_error_inviter_5 == true)
        {
            $("span#personne_inviter_indispensable_identique").remove();
        }
    }
    if ($("div#personne_inviter_1.col-sm-6").is(":visible") == true && $("div#personne_inviter_2.col-sm-6").is(":visible") == true && $("div#personne_inviter_3.col-sm-6").is(":visible") == true
        && $("div#personne_inviter_4.col-sm-6").is(":visible") == true && $("div#personne_inviter_5.col-sm-6").is(":visible") == true && $("div#personne_inviter_6.col-sm-6").is(":visible") == true)
    {
        if ($("#select_personne_indispensable_1").val() != "")
        {
            personne_inviter_1_indispensable_1_identique();
            personne_inviter_2_indispensable_1_identique();
            personne_inviter_3_indispensable_1_identique();
            personne_inviter_4_indispensable_1_identique();
            personne_inviter_5_indispensable_1_identique();
            personne_inviter_6_indispensable_1_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_1").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_1").val()
                && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_6").val() != $("#select_personne_indispensable_1").val())
            {
                $("#select_personne_indispensable_1").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_2").val() != "")
        {
            personne_inviter_1_indispensable_2_identique();
            personne_inviter_2_indispensable_2_identique();
            personne_inviter_3_indispensable_2_identique();
            personne_inviter_4_indispensable_2_identique();
            personne_inviter_5_indispensable_2_identique();
            personne_inviter_6_indispensable_2_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_2").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_2").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_2").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_2").val()
                && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_2").val() && $("#select_personne_inviter_6").val() != $("#select_personne_indispensable_2").val())
            {
                $("#select_personne_indispensable_2").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_3").val() != "")
        {
            personne_inviter_1_indispensable_3_identique();
            personne_inviter_2_indispensable_3_identique();
            personne_inviter_3_indispensable_3_identique();
            personne_inviter_4_indispensable_3_identique();
            personne_inviter_5_indispensable_3_identique();
            personne_inviter_6_indispensable_3_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_3").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_3").val()
                && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_6").val() != $("#select_personne_indispensable_3").val())
            {
                $("#select_personne_indispensable_3").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_4").val() != "")
        {
            personne_inviter_1_indispensable_4_identique();
            personne_inviter_2_indispensable_4_identique();
            personne_inviter_3_indispensable_4_identique();
            personne_inviter_4_indispensable_4_identique();
            personne_inviter_5_indispensable_4_identique();
            personne_inviter_6_indispensable_4_identique();


            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_4").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_4").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_4").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_4").val()
                && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_4").val() && $("#select_personne_inviter_6").val() != $("#select_personne_indispensable_4").val())
            {
                $("#select_personne_indispensable_4").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_5").val() != "")
        {
            personne_inviter_1_indispensable_5_identique();
            personne_inviter_2_indispensable_5_identique();
            personne_inviter_3_indispensable_5_identique();
            personne_inviter_4_indispensable_5_identique();
            personne_inviter_5_indispensable_5_identique();
            personne_inviter_6_indispensable_5_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_5").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_5").val()
                && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_6").val() != $("#select_personne_indispensable_5").val())
            {
                $("#select_personne_indispensable_5").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_6").val() != "")
        {
            personne_inviter_1_indispensable_6_identique();
            personne_inviter_2_indispensable_6_identique();
            personne_inviter_3_indispensable_6_identique();
            personne_inviter_4_indispensable_6_identique();
            personne_inviter_5_indispensable_6_identique();
            personne_inviter_6_indispensable_6_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_6").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_6").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_6").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_6").val()
                && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_6").val() && $("#select_personne_inviter_6").val() != $("#select_personne_indispensable_6").val())
            {
                $("#select_personne_indispensable_6").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_7").val() != "")
        {
            personne_inviter_1_indispensable_7_identique();
            personne_inviter_2_indispensable_7_identique();
            personne_inviter_3_indispensable_7_identique();
            personne_inviter_4_indispensable_7_identique();
            personne_inviter_5_indispensable_7_identique();
            personne_inviter_6_indispensable_7_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_7").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_7").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_7").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_7").val()
                && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_7").val() && $("#select_personne_inviter_6").val() != $("#select_personne_indispensable_7").val())
            {
                $("#select_personne_indispensable_7").removeClass("border_erreur_champ");
            }
        }
        if($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_7").val())
        {
            $("#select_personne_inviter_1").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_1 = true;

        }
        if($("#select_personne_inviter_2").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_7").val())
        {
            $("#select_personne_inviter_2").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_2 = true;
        }
        if($("#select_personne_inviter_3").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_7").val())
        {
            $("#select_personne_inviter_3").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_3 = true;
        }
        if($("#select_personne_inviter_4").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_7").val())
        {
            $("#select_personne_inviter_4").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_4 = true;
        }
        if($("#select_personne_inviter_5").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_7").val())
        {
            $("#select_personne_inviter_5").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_5 = true;
        }
        if($("#select_personne_inviter_6").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_6").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_6").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_6").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_6").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_6").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_6").val() != $("#select_personne_indispensable_7").val() )
        {
            $("#select_personne_inviter_6").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_6 = true;
        }
        if(valid_error_inviter_1 == true && valid_error_inviter_2 == true && valid_error_inviter_3 == true && valid_error_inviter_4 == true && valid_error_inviter_5 == true && valid_error_inviter_6 == true)
        {
            $("span#personne_inviter_indispensable_identique").remove();
        }
    }
    if ($("div#personne_inviter_1.col-sm-6").is(":visible") == true && $("div#personne_inviter_2.col-sm-6").is(":visible") == true && $("div#personne_inviter_3.col-sm-6").is(":visible") == true
        && $("div#personne_inviter_4.col-sm-6").is(":visible") == true && $("div#personne_inviter_5.col-sm-6").is(":visible") == true && $("div#personne_inviter_6.col-sm-6").is(":visible") == true
        && $("div#personne_inviter_7.col-sm-6").is(":visible") == true)
    {
        if ($("#select_personne_indispensable_1").val() != "")
        {
            personne_inviter_1_indispensable_1_identique();
            personne_inviter_2_indispensable_1_identique();
            personne_inviter_3_indispensable_1_identique();
            personne_inviter_4_indispensable_1_identique();
            personne_inviter_5_indispensable_1_identique();
            personne_inviter_6_indispensable_1_identique();
            personne_inviter_7_indispensable_1_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_1").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_1").val()
                && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_6").val() != $("#select_personne_indispensable_1").val()
                && $("#select_personne_inviter_7").val() != $("#select_personne_indispensable_1").val())
            {
                $("#select_personne_indispensable_1").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_2").val() != "")
        {
            personne_inviter_1_indispensable_2_identique();
            personne_inviter_2_indispensable_2_identique();
            personne_inviter_3_indispensable_2_identique();
            personne_inviter_4_indispensable_2_identique();
            personne_inviter_5_indispensable_2_identique();
            personne_inviter_6_indispensable_2_identique();
            personne_inviter_7_indispensable_2_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_2").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_2").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_2").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_2").val()
                && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_2").val() && $("#select_personne_inviter_6").val() != $("#select_personne_indispensable_2").val()
                && $("#select_personne_inviter_7").val() != $("#select_personne_indispensable_2").val())
            {
                $("#select_personne_indispensable_2").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_3").val() != "")
        {
            personne_inviter_1_indispensable_3_identique();
            personne_inviter_2_indispensable_3_identique();
            personne_inviter_3_indispensable_3_identique();
            personne_inviter_4_indispensable_3_identique();
            personne_inviter_5_indispensable_3_identique();
            personne_inviter_6_indispensable_3_identique();
            personne_inviter_7_indispensable_3_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_3").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_3").val()
                && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_6").val() != $("#select_personne_indispensable_3").val()
                && $("#select_personne_inviter_7").val() != $("#select_personne_indispensable_3").val())
            {
                $("#select_personne_indispensable_3").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_4").val() != "")
        {
            personne_inviter_1_indispensable_4_identique();
            personne_inviter_2_indispensable_4_identique();
            personne_inviter_3_indispensable_4_identique();
            personne_inviter_4_indispensable_4_identique();
            personne_inviter_5_indispensable_4_identique();
            personne_inviter_6_indispensable_4_identique();
            personne_inviter_7_indispensable_4_identique();


            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_4").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_4").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_4").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_4").val()
                && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_4").val() && $("#select_personne_inviter_6").val() != $("#select_personne_indispensable_4").val()
                && $("#select_personne_inviter_7").val() != $("#select_personne_indispensable_4").val())
            {
                $("#select_personne_indispensable_4").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_5").val() != "")
        {
            personne_inviter_1_indispensable_5_identique();
            personne_inviter_2_indispensable_5_identique();
            personne_inviter_3_indispensable_5_identique();
            personne_inviter_4_indispensable_5_identique();
            personne_inviter_5_indispensable_5_identique();
            personne_inviter_6_indispensable_5_identique();
            personne_inviter_7_indispensable_5_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_5").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_5").val()
                && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_6").val() != $("#select_personne_indispensable_5").val()
                && $("#select_personne_inviter_7").val() != $("#select_personne_indispensable_5").val())
            {
                $("#select_personne_indispensable_5").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_6").val() != "")
        {
            personne_inviter_1_indispensable_6_identique();
            personne_inviter_2_indispensable_6_identique();
            personne_inviter_3_indispensable_6_identique();
            personne_inviter_4_indispensable_6_identique();
            personne_inviter_5_indispensable_6_identique();
            personne_inviter_6_indispensable_6_identique();
            personne_inviter_7_indispensable_6_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_6").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_6").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_6").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_6").val()
                && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_6").val() && $("#select_personne_inviter_6").val() != $("#select_personne_indispensable_6").val()
                && $("#select_personne_inviter_7").val() != $("#select_personne_indispensable_6").val())
            {
                $("#select_personne_indispensable_6").removeClass("border_erreur_champ");
            }
        }
        if ($("#select_personne_indispensable_7").val() != "")
        {
            personne_inviter_1_indispensable_7_identique();
            personne_inviter_2_indispensable_7_identique();
            personne_inviter_3_indispensable_7_identique();
            personne_inviter_4_indispensable_7_identique();
            personne_inviter_5_indispensable_7_identique();
            personne_inviter_6_indispensable_7_identique();
            personne_inviter_7_indispensable_7_identique();

            if ($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_7").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_7").val()
                && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_7").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_7").val()
                && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_7").val() && $("#select_personne_inviter_6").val() != $("#select_personne_indispensable_7").val()
                && $("#select_personne_inviter_7").val() != $("#select_personne_indispensable_7").val())
            {
                $("#select_personne_indispensable_7").removeClass("border_erreur_champ");
            }
        }
        if($("#select_personne_inviter_1").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_1").val() != $("#select_personne_indispensable_7").val())
        {
            $("#select_personne_inviter_1").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_1 = true;

        }
        if($("#select_personne_inviter_2").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_2").val() != $("#select_personne_indispensable_7").val())
        {
            $("#select_personne_inviter_2").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_2 = true;
        }
        if($("#select_personne_inviter_3").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_3").val() != $("#select_personne_indispensable_7").val())
        {
            $("#select_personne_inviter_3").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_3 = true;
        }
        if($("#select_personne_inviter_4").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_4").val() != $("#select_personne_indispensable_7").val())
        {
            $("#select_personne_inviter_4").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_4 = true;
        }
        if($("#select_personne_inviter_5").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_5").val() != $("#select_personne_indispensable_7").val())
        {
            $("#select_personne_inviter_5").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_5 = true;
        }
        if($("#select_personne_inviter_6").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_6").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_6").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_6").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_6").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_6").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_6").val() != $("#select_personne_indispensable_7").val() )
        {
            $("#select_personne_inviter_6").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_6 = true;
        }
        if($("#select_personne_inviter_7").val() != $("#select_personne_indispensable_1").val() && $("#select_personne_inviter_7").val() != $("#select_personne_indispensable_2").val()
            && $("#select_personne_inviter_7").val() != $("#select_personne_indispensable_3").val() && $("#select_personne_inviter_7").val() != $("#select_personne_indispensable_4").val()
            && $("#select_personne_inviter_7").val() != $("#select_personne_indispensable_5").val() && $("#select_personne_inviter_7").val() != $("#select_personne_indispensable_6").val()
            && $("#select_personne_inviter_7").val() != $("#select_personne_indispensable_7").val() )
        {
            $("#select_personne_inviter_7").removeClass("border_erreur_champ");
            // creation d'une variable qui est a true si aucune champs personne invite et indispensable sont identiques
            var valid_error_inviter_7 = true;
        }
        if(valid_error_inviter_1 == true && valid_error_inviter_2 == true && valid_error_inviter_3 == true && valid_error_inviter_4 == true && valid_error_inviter_5 == true && valid_error_inviter_6 == true && valid_error_inviter_7 == true)
        {
            $("span#personne_inviter_indispensable_identique").remove();
        }
    }

    if(typeof valid_error_inviter_1 !== 'undefined' && typeof valid_error_inviter_2 == 'undefined' && typeof valid_error_inviter_3 == 'undefined' && typeof valid_error_inviter_4 == 'undefined' && typeof valid_error_inviter_5 == 'undefined'
        && typeof valid_error_inviter_6 == 'undefined' && typeof valid_error_inviter_7 == 'undefined')
    {
        $("#form_personne_reunion").submit();
    }

    else if (typeof valid_error_inviter_1 !== 'undefined' && typeof valid_error_inviter_2 !== 'undefined' && typeof valid_error_inviter_3 == 'undefined' && typeof valid_error_inviter_4 == 'undefined' && typeof valid_error_inviter_5 == 'undefined'
        && typeof valid_error_inviter_6 == 'undefined' && typeof valid_error_inviter_7 == 'undefined')
    {
        $("#form_personne_reunion").submit();
    }

    else if (typeof valid_error_inviter_1 !== 'undefined' && typeof valid_error_inviter_2 !== 'undefined' && typeof valid_error_inviter_3 !== 'undefined' && typeof valid_error_inviter_4 == 'undefined' && typeof valid_error_inviter_5 == 'undefined'
        && typeof valid_error_inviter_6 == 'undefined' && typeof valid_error_inviter_7 == 'undefined')
    {
        $("#form_personne_reunion").submit();
    }

    else if (typeof valid_error_inviter_1 !== 'undefined' && typeof valid_error_inviter_2 !== 'undefined' && typeof valid_error_inviter_3 !== 'undefined' && typeof valid_error_inviter_4 !== 'undefined' && typeof valid_error_inviter_5 == 'undefined'
        && typeof valid_error_inviter_6 == 'undefined' && typeof valid_error_inviter_7 == 'undefined')
    {
        $("#form_personne_reunion").submit();
    }

    else if (typeof valid_error_inviter_1 !== 'undefined' && typeof valid_error_inviter_2 !== 'undefined' && typeof valid_error_inviter_3 == 'undefined' && typeof valid_error_inviter_4 !== 'undefined' && typeof valid_error_inviter_5 !== 'undefined'
        && typeof valid_error_inviter_6 == 'undefined' && typeof valid_error_inviter_7 == 'undefined')
    {
        $("#form_personne_reunion").submit();
    }

    else if (typeof valid_error_inviter_1 !== 'undefined' && typeof valid_error_inviter_2 !== 'undefined' && typeof valid_error_inviter_3 !== 'undefined' && typeof valid_error_inviter_4 !== 'undefined' && typeof valid_error_inviter_5 !== 'undefined'
        && typeof valid_error_inviter_6 !== 'undefined' && typeof valid_error_inviter_7 == 'undefined')
    {
        $("#form_personne_reunion").submit();
    }

    else if (typeof valid_error_inviter_1 !== 'undefined' && typeof valid_error_inviter_2 !== 'undefined' && typeof valid_error_inviter_3 !== 'undefined' && typeof valid_error_inviter_4 !== 'undefined' && typeof valid_error_inviter_5 !== 'undefined'
        && typeof valid_error_inviter_6 !== 'undefined' && typeof valid_error_inviter_7 !== 'undefined')
    {
        $("#form_personne_reunion").submit();
    }
}