$(function() {

    $("div#personne_inviter_1.col-sm-6").hide();
    $("div#personne_indispensable_1.col-sm-6").hide();
    $("div#personne_inviter_2.col-sm-6").hide();
    $("div#personne_indispensable_2.col-sm-6").hide();
    $("div#personne_inviter_3.col-sm-6").hide();
    $("div#personne_indispensable_3.col-sm-6").hide();
    $("div#personne_inviter_4.col-sm-6").hide();
    $("div#personne_indispensable_4.col-sm-6").hide();
    $("div#personne_inviter_5.col-sm-6").hide();
    $("div#personne_indispensable_5.col-sm-6").hide();
    $("div#personne_inviter_6.col-sm-6").hide();
    $("div#personne_indispensable_6.col-sm-6").hide();
    $("div#personne_inviter_7.col-sm-6").hide();
    $("div#personne_indispensable_7.col-sm-6").hide();


    $("input#add_personne_inviter_1.btn.btn-primary").click(function () {
        $("div#personne_inviter_1.col-sm-6").show();
        $("input#add_personne_inviter_1.btn.btn-primary").hide();
        if ($("div#personne_inviter_1.col-sm-6").is(":visible") == true){
            $("div#placement_personne_inviter_1.col-sm-6").remove();
        }
    });

    $("input#del_personne_inviter_1.btn.btn-primary").click(function () {

        if($("div#personne_inviter_1.col-sm-6").is(":visible") == true && $("div#personne_inviter_2.col-sm-6").is(":visible") == false
            && $("div#personne_inviter_3.col-sm-6").is(":visible") == false && $("div#personne_inviter_4.col-sm-6").is(":visible") == false
            && $("div#personne_inviter_5.col-sm-6").is(":visible") == false && $("div#personne_inviter_6.col-sm-6").is(":visible") == false
            &&  $("div#personne_inviter_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_inviter_1.col-sm-6").hide();
            $("input#add_personne_inviter_1.btn.btn-primary").show();
            $("div#placement_personne_inviter_1.col-sm-6").remove();
            $("div#personne_inviter_1.col-sm-6").after('<div id="placement_personne_inviter_1" class="col-sm-6"></div>');
        }

        else if($("div#personne_inviter_1.col-sm-6").is(":visible") == true && $("div#personne_inviter_2.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_3.col-sm-6").is(":visible") == false && $("div#personne_inviter_4.col-sm-6").is(":visible") == false
            && $("div#personne_inviter_5.col-sm-6").is(":visible") == false && $("div#personne_inviter_6.col-sm-6").is(":visible") == false
            &&  $("div#personne_inviter_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_inviter_2.col-sm-6").hide();
            $("input#add_personne_inviter_2.btn.btn-primary").show();
            $("div#placement_personne_inviter_2.col-sm-6").remove();
            $("div#personne_inviter_2.col-sm-6").after('<div id="placement_personne_inviter_2" class="col-sm-6"></div>');
        }

        else if($("div#personne_inviter_1.col-sm-6").is(":visible") == true && $("div#personne_inviter_2.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_3.col-sm-6").is(":visible") == true && $("div#personne_inviter_4.col-sm-6").is(":visible") == false
            && $("div#personne_inviter_5.col-sm-6").is(":visible") == false && $("div#personne_inviter_6.col-sm-6").is(":visible") == false
            &&  $("div#personne_inviter_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_inviter_3.col-sm-6").hide();
            $("input#add_personne_inviter_3.btn.btn-primary").show();
            $("div#placement_personne_inviter_3.col-sm-6").remove();
            $("div#personne_inviter_3.col-sm-6").after('<div id="placement_personne_inviter_3" class="col-sm-6"></div>');
        }

        else if($("div#personne_inviter_1.col-sm-6").is(":visible") == true && $("div#personne_inviter_2.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_3.col-sm-6").is(":visible") == true && $("div#personne_inviter_4.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_5.col-sm-6").is(":visible") == false && $("div#personne_inviter_6.col-sm-6").is(":visible") == false
            &&  $("div#personne_inviter_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_inviter_4.col-sm-6").hide();
            $("input#add_personne_inviter_4.btn.btn-primary").show();
            $("div#placement_personne_inviter_4.col-sm-6").remove();
            $("div#personne_inviter_4.col-sm-6").after('<div id="placement_personne_inviter_4" class="col-sm-6"></div>');
        }

        else if($("div#personne_inviter_1.col-sm-6").is(":visible") == true && $("div#personne_inviter_2.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_3.col-sm-6").is(":visible") == true && $("div#personne_inviter_4.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_5.col-sm-6").is(":visible") == true && $("div#personne_inviter_6.col-sm-6").is(":visible") == false
            &&  $("div#personne_inviter_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_inviter_5.col-sm-6").hide();
            $("input#add_personne_inviter_5.btn.btn-primary").show();
            $("div#placement_personne_inviter_5.col-sm-6").remove();
            $("div#personne_inviter_5.col-sm-6").after('<div id="placement_personne_inviter_5" class="col-sm-6"></div>');
        }


        else if($("div#personne_inviter_1.col-sm-6").is(":visible") == true && $("div#personne_inviter_2.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_3.col-sm-6").is(":visible") == true && $("div#personne_inviter_4.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_5.col-sm-6").is(":visible") == true && $("div#personne_inviter_6.col-sm-6").is(":visible") == true
            &&  $("div#personne_inviter_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_inviter_6.col-sm-6").hide();
            $("input#add_personne_inviter_6.btn.btn-primary").show();
            $("div#placement_personne_inviter_6.col-sm-6").remove();
            $("div#personne_inviter_6.col-sm-6").after('<div id="placement_personne_inviter_6" class="col-sm-6"></div>');
        }

        if  ($("div#personne_inviter_1.col-sm-6").is(":visible") == true && $("div#personne_inviter_2.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_3.col-sm-6").is(":visible") == true && $("div#personne_inviter_4.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_5.col-sm-6").is(":visible") == true && $("div#personne_inviter_6.col-sm-6").is(":visible") == true
            &&  $("div#personne_inviter_7.col-sm-6").is(":visible") == true)
        {
            $("div#personne_inviter_7.col-sm-6").hide();
            $("input#add_personne_inviter_7.btn.btn-primary").show();
            $("div#placement_personne_inviter_7.col-sm-6").remove();
            $("div#personne_inviter_7.col-sm-6").after('<div id="placement_personne_inviter_7" class="col-sm-6"></div>');
        }
    });

    $("input#add_personne_indispensable_1.btn.btn-primary").click(function () {
        $("div#personne_indispensable_1.col-sm-6").show();
        $("input#add_personne_indispensable_1.btn.btn-primary").hide();
        if ($("div#personne_inviter_1.col-sm-6").is(":visible") == false){
            $("div#placement_personne_inviter_1.col-sm-6").remove();
            $("div#personne_inviter_1.col-sm-6").after('<div id="placement_personne_inviter_1" class="col-sm-6"></div>');
        }
    });

    $("input#del_personne_indispensable_1.btn.btn-primary").click(function () {

        if($("div#personne_indispensable_1.col-sm-6").is(":visible") == true && $("div#personne_indispensable_2.col-sm-6").is(":visible") == false
            && $("div#personne_indispensable_3.col-sm-6").is(":visible") == false && $("div#personne_indispensable_4.col-sm-6").is(":visible") == false
            && $("div#personne_indispensable_5.col-sm-6").is(":visible") == false && $("div#personne_indispensable_6.col-sm-6").is(":visible") == false
            &&  $("div#personne_indispensable_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_indispensable_1.col-sm-6").hide();
            $("input#add_personne_indispensable_1.btn.btn-primary").show();
        }

        else if($("div#personne_indispensable_1.col-sm-6").is(":visible") == true && $("div#personne_indispensable_2.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_3.col-sm-6").is(":visible") == false && $("div#personne_indispensable_4.col-sm-6").is(":visible") == false
            && $("div#personne_indispensable_5.col-sm-6").is(":visible") == false && $("div#personne_indispensable_6.col-sm-6").is(":visible") == false
            &&  $("div#personne_indispensable_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_indispensable_2.col-sm-6").hide();
            $("input#add_personne_indispensable_2.btn.btn-primary").show();
        }
        else if($("div#personne_indispensable_1.col-sm-6").is(":visible") == true && $("div#personne_indispensable_2.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_3.col-sm-6").is(":visible") == true && $("div#personne_indispensable_4.col-sm-6").is(":visible") == false
            && $("div#personne_indispensable_5.col-sm-6").is(":visible") == false && $("div#personne_indispensable_6.col-sm-6").is(":visible") == false
            &&  $("div#personne_indispensable_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_indispensable_3.col-sm-6").hide();
            $("input#add_personne_indispensable_3.btn.btn-primary").show();
        }

        else if($("div#personne_indispensable_1.col-sm-6").is(":visible") == true && $("div#personne_indispensable_2.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_3.col-sm-6").is(":visible") == true && $("div#personne_indispensable_4.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_5.col-sm-6").is(":visible") == false && $("div#personne_indispensable_6.col-sm-6").is(":visible") == false
            &&  $("div#personne_indispensable_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_indispensable_4.col-sm-6").hide();
            $("input#add_personne_indispensable_4.btn.btn-primary").show();
        }
        else if($("div#personne_indispensable_1.col-sm-6").is(":visible") == true && $("div#personne_indispensable_2.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_3.col-sm-6").is(":visible") == true && $("div#personne_indispensable_4.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_5.col-sm-6").is(":visible") == true && $("div#personne_indispensable_6.col-sm-6").is(":visible") == false
            &&  $("div#personne_indispensable_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_indispensable_5.col-sm-6").hide();
            $("input#add_personne_indispensable_5.btn.btn-primary").show();
        }

        else if($("div#personne_indispensable_1.col-sm-6").is(":visible") == true && $("div#personne_indispensable_2.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_3.col-sm-6").is(":visible") == true && $("div#personne_indispensable_4.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_5.col-sm-6").is(":visible") == true && $("div#personne_indispensable_6.col-sm-6").is(":visible") == true
            &&  $("div#personne_indispensable_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_indispensable_6.col-sm-6").hide();
            $("input#add_personne_indispensable_6.btn.btn-primary").show();
        }

        if  ($("div#personne_indispensable_1.col-sm-6").is(":visible") == true && $("div#personne_indispensable_2.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_3.col-sm-6").is(":visible") == true && $("div#personne_indispensable_4.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_5.col-sm-6").is(":visible") == true && $("div#personne_indispensable_6.col-sm-6").is(":visible") == true
            &&  $("div#personne_indispensable_7.col-sm-6").is(":visible") == true)
        {
            $("div#personne_indispensable_7.col-sm-6").hide();
            $("input#add_personne_indispensable_7.btn.btn-primary").show();
        }
    });

    $("input#add_personne_inviter_2.btn.btn-primary").click(function () {
        $("div#personne_inviter_2.col-sm-6").show();
        $("input#add_personne_inviter_2.btn.btn-primary").hide();
        if ($("div#personne_inviter_2.col-sm-6").is(":visible") == true){
            $("div#placement_personne_inviter_2.col-sm-6").remove();
        }
    });
    $("input#del_personne_inviter_2.btn.btn-primary").click(function () {

        if($("div#personne_inviter_2.col-sm-6").is(":visible") == true && $("div#personne_inviter_3.col-sm-6").is(":visible") == false
            && $("div#personne_inviter_4.col-sm-6").is(":visible") == false && $("div#personne_inviter_5.col-sm-6").is(":visible") == false
            && $("div#personne_inviter_6.col-sm-6").is(":visible") == false && $("div#personne_inviter_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_inviter_2.col-sm-6").hide();
            $("input#add_personne_inviter_2.btn.btn-primary").show();
            $("div#placement_personne_inviter_2.col-sm-6").remove();
            $("div#personne_inviter_2.col-sm-6").after('<div id="placement_personne_inviter_2" class="col-sm-6"></div>');
        }

        else if($("div#personne_inviter_2.col-sm-6").is(":visible") == true && $("div#personne_inviter_3.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_4.col-sm-6").is(":visible") == false && $("div#personne_inviter_5.col-sm-6").is(":visible") == false
            && $("div#personne_inviter_6.col-sm-6").is(":visible") == false && $("div#personne_inviter_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_inviter_3.col-sm-6").hide();
            $("input#add_personne_inviter_3.btn.btn-primary").show();
            $("div#placement_personne_inviter_3.col-sm-6").remove();
            $("div#personne_inviter_3.col-sm-6").after('<div id="placement_personne_inviter_3" class="col-sm-6"></div>');
        }

        else if($("div#personne_inviter_2.col-sm-6").is(":visible") == true && $("div#personne_inviter_3.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_4.col-sm-6").is(":visible") == true && $("div#personne_inviter_5.col-sm-6").is(":visible") == false
            && $("div#personne_inviter_6.col-sm-6").is(":visible") == false && $("div#personne_inviter_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_inviter_4.col-sm-6").hide();
            $("input#add_personne_inviter_4.btn.btn-primary").show();
            $("div#placement_personne_inviter_4.col-sm-6").remove();
            $("div#personne_inviter_4.col-sm-6").after('<div id="placement_personne_inviter_4" class="col-sm-6"></div>');
        }

        else if($("div#personne_inviter_2.col-sm-6").is(":visible") == true && $("div#personne_inviter_3.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_4.col-sm-6").is(":visible") == true && $("div#personne_inviter_5.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_6.col-sm-6").is(":visible") == false && $("div#personne_inviter_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_inviter_5.col-sm-6").hide();
            $("input#add_personne_inviter_5.btn.btn-primary").show();
            $("div#placement_personne_inviter_5.col-sm-6").remove();
            $("div#personne_inviter_5.col-sm-6").after('<div id="placement_personne_inviter_5" class="col-sm-6"></div>');
        }


        else if($("div#personne_inviter_2.col-sm-6").is(":visible") == true && $("div#personne_inviter_3.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_4.col-sm-6").is(":visible") == true && $("div#personne_inviter_5.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_6.col-sm-6").is(":visible") == true && $("div#personne_inviter_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_inviter_6.col-sm-6").hide();
            $("input#add_personne_inviter_6.btn.btn-primary").show();
            $("div#placement_personne_inviter_6.col-sm-6").remove();
            $("div#personne_inviter_6.col-sm-6").after('<div id="placement_personne_inviter_6" class="col-sm-6"></div>');
        }

        if  ($("div#personne_inviter_2.col-sm-6").is(":visible") == true && $("div#personne_inviter_3.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_4.col-sm-6").is(":visible") == true && $("div#personne_inviter_5.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_6.col-sm-6").is(":visible") == true && $("div#personne_inviter_7.col-sm-6").is(":visible") == true)
        {
            $("div#personne_inviter_7.col-sm-6").hide();
            $("input#add_personne_inviter_7.btn.btn-primary").show();
            $("div#placement_personne_inviter_7.col-sm-6").remove();
            $("div#personne_inviter_7.col-sm-6").after('<div id="placement_personne_inviter_7" class="col-sm-6"></div>');
        }
    });
    $("input#add_personne_indispensable_2.btn.btn-primary").click(function () {
        $("div#personne_indispensable_2.col-sm-6").show();
        $("input#add_personne_indispensable_2.btn.btn-primary").hide();
        if ($("div#personne_inviter_2.col-sm-6").is(":visible") == false){
            $("div#placement_personne_inviter_2.col-sm-6").remove();
            $("div#personne_inviter_2.col-sm-6").after('<div id="placement_personne_inviter_2" class="col-sm-6"></div>');
        }
    });

    $("input#del_personne_indispensable_2.btn.btn-primary").click(function () {

        if($("div#personne_indispensable_2.col-sm-6").is(":visible") == true && $("div#personne_indispensable_3.col-sm-6").is(":visible") == false
            && $("div#personne_indispensable_4.col-sm-6").is(":visible") == false && $("div#personne_indispensable_5.col-sm-6").is(":visible") == false
            && $("div#personne_indispensable_6.col-sm-6").is(":visible") == false && $("div#personne_indispensable_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_indispensable_2.col-sm-6").hide();
            $("input#add_personne_indispensable_2.btn.btn-primary").show();
        }
        else if($("div#personne_indispensable_2.col-sm-6").is(":visible") == true && $("div#personne_indispensable_3.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_4.col-sm-6").is(":visible") == false && $("div#personne_indispensable_5.col-sm-6").is(":visible") == false
            && $("div#personne_indispensable_6.col-sm-6").is(":visible") == false && $("div#personne_indispensable_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_indispensable_3.col-sm-6").hide();
            $("input#add_personne_indispensable_3.btn.btn-primary").show();
        }

        else if($("div#personne_indispensable_2.col-sm-6").is(":visible") == true && $("div#personne_indispensable_3.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_4.col-sm-6").is(":visible") == true && $("div#personne_indispensable_5.col-sm-6").is(":visible") == false
            && $("div#personne_indispensable_6.col-sm-6").is(":visible") == false && $("div#personne_indispensable_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_indispensable_4.col-sm-6").hide();
            $("input#add_personne_indispensable_4.btn.btn-primary").show();
        }
        else if($("div#personne_indispensable_2.col-sm-6").is(":visible") == true && $("div#personne_indispensable_3.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_4.col-sm-6").is(":visible") == true && $("div#personne_indispensable_5.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_6.col-sm-6").is(":visible") == false && $("div#personne_indispensable_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_indispensable_5.col-sm-6").hide();
            $("input#add_personne_indispensable_5.btn.btn-primary").show();
        }

        else if($("div#personne_indispensable_2.col-sm-6").is(":visible") == true && $("div#personne_indispensable_3.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_4.col-sm-6").is(":visible") == true && $("div#personne_indispensable_5.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_6.col-sm-6").is(":visible") == true && $("div#personne_indispensable_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_indispensable_6.col-sm-6").hide();
            $("input#add_personne_indispensable_6.btn.btn-primary").show();
        }

        if  ($("div#personne_indispensable_2.col-sm-6").is(":visible") == true && $("div#personne_indispensable_3.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_4.col-sm-6").is(":visible") == true && $("div#personne_indispensable_5.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_6.col-sm-6").is(":visible") == true && $("div#personne_indispensable_7.col-sm-6").is(":visible") == true)
        {
            $("div#personne_indispensable_7.col-sm-6").hide();
            $("input#add_personne_indispensable_7.btn.btn-primary").show();
        }
    });
    $("input#add_personne_inviter_3.btn.btn-primary").click(function () {
        $("div#personne_inviter_3.col-sm-6").show();
        $("input#add_personne_inviter_3.btn.btn-primary").hide();
        if ($("div#personne_inviter_3.col-sm-6").is(":visible") == true){
            $("div#placement_personne_inviter_3.col-sm-6").remove();
        }
    });
    $("input#del_personne_inviter_3.btn.btn-primary").click(function () {
        if($("div#personne_inviter_3.col-sm-6").is(":visible") == true && $("div#personne_inviter_4.col-sm-6").is(":visible") == false
            && $("div#personne_inviter_5.col-sm-6").is(":visible") == false && $("div#personne_inviter_6.col-sm-6").is(":visible") == false
            && $("div#personne_inviter_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_inviter_3.col-sm-6").hide();
            $("input#add_personne_inviter_3.btn.btn-primary").show();
            $("div#placement_personne_inviter_3.col-sm-6").remove();
            $("div#personne_inviter_3.col-sm-6").after('<div id="placement_personne_inviter_3" class="col-sm-6"></div>');
        }


        else if($("div#personne_inviter_3.col-sm-6").is(":visible") == true && $("div#personne_inviter_4.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_5.col-sm-6").is(":visible") == false  && $("div#personne_inviter_6.col-sm-6").is(":visible") == false
            && $("div#personne_inviter_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_inviter_4.col-sm-6").hide();
            $("input#add_personne_inviter_4.btn.btn-primary").show();
            $("div#placement_personne_inviter_4.col-sm-6").remove();
            $("div#personne_inviter_4.col-sm-6").after('<div id="placement_personne_inviter_4" class="col-sm-6"></div>');
        }

        else if($("div#personne_inviter_3.col-sm-6").is(":visible") == true && $("div#personne_inviter_4.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_5.col-sm-6").is(":visible") == true && $("div#personne_inviter_6.col-sm-6").is(":visible") == false
            && $("div#personne_inviter_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_inviter_5.col-sm-6").hide();
            $("input#add_personne_inviter_5.btn.btn-primary").show();
            $("div#placement_personne_inviter_5.col-sm-6").remove();
            $("div#personne_inviter_5.col-sm-6").after('<div id="placement_personne_inviter_5" class="col-sm-6"></div>');
        }


        else if($("div#personne_inviter_3.col-sm-6").is(":visible") == true && $("div#personne_inviter_4.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_5.col-sm-6").is(":visible") == true && $("div#personne_inviter_6.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_inviter_6.col-sm-6").hide();
            $("input#add_personne_inviter_6.btn.btn-primary").show();
            $("div#placement_personne_inviter_6.col-sm-6").remove();
            $("div#personne_inviter_6.col-sm-6").after('<div id="placement_personne_inviter_6" class="col-sm-6"></div>');
        }

        if  ($("div#personne_inviter_3.col-sm-6").is(":visible") == true && $("div#personne_inviter_4.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_5.col-sm-6").is(":visible") == true && $("div#personne_inviter_6.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_7.col-sm-6").is(":visible") == true )
        {
            $("div#personne_inviter_7.col-sm-6").hide();
            $("input#add_personne_inviter_7.btn.btn-primary").show();
            $("div#placement_personne_inviter_7.col-sm-6").remove();
            $("div#personne_inviter_7.col-sm-6").after('<div id="placement_personne_inviter_7" class="col-sm-6"></div>');
        }

    });
    $("input#add_personne_indispensable_3.btn.btn-primary").click(function () {
        $("div#personne_indispensable_3.col-sm-6").show();
        $("input#add_personne_indispensable_3.btn.btn-primary").hide();
        if ($("div#personne_inviter_3.col-sm-6").is(":visible")== false){
            $("div#placement_personne_inviter_3.col-sm-6").remove();
            $("div#personne_inviter_3.col-sm-6").after('<div id="placement_personne_inviter_3" class="col-sm-6"></div>');
        }
    });

    $("input#del_personne_indispensable_3.btn.btn-primary").click(function () {
        if($("div#personne_indispensable_3.col-sm-6").is(":visible") == true && $("div#personne_indispensable_4.col-sm-6").is(":visible") == false
            && $("div#personne_indispensable_5.col-sm-6").is(":visible") == false && $("div#personne_indispensable_6.col-sm-6").is(":visible") == false
            && $("div#personne_indispensable_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_indispensable_3.col-sm-6").hide();
            $("input#add_personne_indispensable_3.btn.btn-primary").show();
        }

        else if($("div#personne_indispensable_3.col-sm-6").is(":visible") == true && $("div#personne_indispensable_4.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_5.col-sm-6").is(":visible") == false  && $("div#personne_indispensable_6.col-sm-6").is(":visible") == false
            && $("div#personne_indispensable_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_indispensable_4.col-sm-6").hide();
            $("input#add_personne_indispensable_4.btn.btn-primary").show();
        }
        else if($("div#personne_indispensable_3.col-sm-6").is(":visible") == true && $("div#personne_indispensable_4.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_5.col-sm-6").is(":visible") == true && $("div#personne_indispensable_6.col-sm-6").is(":visible") == false
            && $("div#personne_indispensable_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_indispensable_5.col-sm-6").hide();
            $("input#add_personne_indispensable_5.btn.btn-primary").show();
        }

        else if($("div#personne_indispensable_3.col-sm-6").is(":visible") == true && $("div#personne_indispensable_4.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_5.col-sm-6").is(":visible") == true && $("div#personne_indispensable_6.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_indispensable_6.col-sm-6").hide();
            $("input#add_personne_indispensable_6.btn.btn-primary").show();
        }

        if  ($("div#personne_indispensable_3.col-sm-6").is(":visible") == true && $("div#personne_indispensable_4.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_5.col-sm-6").is(":visible") == true && $("div#personne_indispensable_6.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_7.col-sm-6").is(":visible") == true )
        {
            $("div#personne_indispensable_7.col-sm-6").hide();
            $("input#add_personne_indispensable_7.btn.btn-primary").show();
        }

    });
    $("input#add_personne_inviter_4.btn.btn-primary").click(function () {
        $("div#personne_inviter_4.col-sm-6").show();
        $("input#add_personne_inviter_4.btn.btn-primary").hide();
        if ($("div#personne_inviter_4.col-sm-6").is(":visible") == true){
            $("div#placement_personne_inviter_4.col-sm-6").remove();
        }
    });
    $("input#del_personne_inviter_4.btn.btn-primary").click(function () {
        if($("div#personne_inviter_4.col-sm-6").is(":visible") == true && $("div#personne_inviter_5.col-sm-6").is(":visible") == false
            && $("div#personne_inviter_6.col-sm-6").is(":visible") == false && $("div#personne_inviter_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_inviter_4.col-sm-6").hide();
            $("input#add_personne_inviter_4.btn.btn-primary").show();
            $("div#placement_personne_inviter_4.col-sm-6").remove();
            $("div#personne_inviter_4.col-sm-6").after('<div id="placement_personne_inviter_4" class="col-sm-6"></div>');
        }

        else if($("div#personne_inviter_4.col-sm-6").is(":visible") == true && $("div#personne_inviter_5.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_6.col-sm-6").is(":visible") == false  && $("div#personne_inviter_7.col-sm-6").is(":visible") == false){
            $("div#personne_inviter_5.col-sm-6").hide();
            $("input#add_personne_inviter_5.btn.btn-primary").show();
            $("div#placement_personne_inviter_5.col-sm-6").remove();
            $("div#personne_inviter_5.col-sm-6").after('<div id="placement_personne_inviter_5" class="col-sm-6"></div>');
        }
        else if($("div#personne_inviter_4.col-sm-6").is(":visible") == true && $("div#personne_inviter_5.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_6.col-sm-6").is(":visible") == true && $("div#personne_inviter_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_inviter_6.col-sm-6").hide();
            $("input#add_personne_inviter_6.btn.btn-primary").show();
            $("div#placement_personne_inviter_6.col-sm-6").remove();
            $("div#personne_inviter_6.col-sm-6").after('<div id="placement_personne_inviter_6" class="col-sm-6"></div>');
        }

        if  ($("div#personne_inviter_4.col-sm-6").is(":visible") == true && $("div#personne_inviter_5.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_6.col-sm-6").is(":visible") == true && $("div#personne_inviter_7.col-sm-6").is(":visible") == true )
        {
            $("div#personne_inviter_7.col-sm-6").hide();
            $("input#add_personne_inviter_7.btn.btn-primary").show();
            $("div#placement_personne_inviter_7.col-sm-6").remove();
            $("div#personne_inviter_7.col-sm-6").after('<div id="placement_personne_inviter_7" class="col-sm-6"></div>');
        }
    });
    $("input#add_personne_indispensable_4.btn.btn-primary").click(function () {
        $("div#personne_indispensable_4.col-sm-6").show();
        $("input#add_personne_indispensable_4.btn.btn-primary").hide();
        if ($("div#personne_inviter_4.col-sm-6").is(":visible") == false){
            $("div#placement_personne_inviter_4.col-sm-6").remove();
            $("div#personne_inviter_4.col-sm-6").after('<div id="placement_personne_inviter_4" class="col-sm-6"></div>');
        }
    });
    $("input#del_personne_indispensable_4.btn.btn-primary").click(function () {
        if($("div#personne_indispensable_4.col-sm-6").is(":visible") == true && $("div#personne_indispensable_5.col-sm-6").is(":visible") == false
            && $("div#personne_indispensable_6.col-sm-6").is(":visible") == false && $("div#personne_indispensable_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_indispensable_4.col-sm-6").hide();
            $("input#add_personne_indispensable_4.btn.btn-primary").show();
        }

        else if($("div#personne_indispensable_4.col-sm-6").is(":visible") == true && $("div#personne_indispensable_5.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_6.col-sm-6").is(":visible") == false  && $("div#personne_indispensable_7.col-sm-6").is(":visible") == false){
            $("div#personne_indispensable_5.col-sm-6").hide();
            $("input#add_personne_indispensable_5.btn.btn-primary").show();
        }
        else if($("div#personne_indispensable_4.col-sm-6").is(":visible") == true && $("div#personne_indispensable_5.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_6.col-sm-6").is(":visible") == true && $("div#personne_indispensable_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_indispensable_6.col-sm-6").hide();
            $("input#add_personne_indispensable_6.btn.btn-primary").show();
        }

        if  ($("div#personne_indispensable_4.col-sm-6").is(":visible") == true && $("div#personne_indispensable_5.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_6.col-sm-6").is(":visible") == true && $("div#personne_indispensable_7.col-sm-6").is(":visible") == true )
        {
            $("div#personne_indispensable_7.col-sm-6").hide();
            $("input#add_personne_indispensable_7.btn.btn-primary").show();
        }

    });
    $("input#add_personne_inviter_5.btn.btn-primary").click(function () {
        $("div#personne_inviter_5.col-sm-6").show();
        $("input#add_personne_inviter_5.btn.btn-primary").hide();
        if ($("div#personne_inviter_5.col-sm-6").is(":visible") == true){
            $("div#placement_personne_inviter_5.col-sm-6").remove();
        }
    });
    $("input#del_personne_inviter_5.btn.btn-primary").click(function () {

        if($("div#personne_inviter_5.col-sm-6").is(":visible") == true && $("div#personne_inviter_6.col-sm-6").is(":visible") == false
            && $("div#personne_inviter_7.col-sm-6").is(":visible") == false){
            $("div#personne_inviter_5.col-sm-6").hide();
            $("input#add_personne_inviter_5.btn.btn-primary").show();
            $("div#placement_personne_inviter_5.col-sm-6").remove();
            $("div#personne_inviter_5.col-sm-6").after('<div id="placement_personne_inviter_5" class="col-sm-6"></div>');
        }
        else if($("div#personne_inviter_5.col-sm-6").is(":visible") == true && $("div#personne_inviter_6.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_inviter_6.col-sm-6").hide();
            $("input#add_personne_inviter_6.btn.btn-primary").show();
            $("div#placement_personne_inviter_6.col-sm-6").remove();
            $("div#personne_inviter_6.col-sm-6").after('<div id="placement_personne_inviter_6" class="col-sm-6"></div>');
        }

        if  ($("div#personne_inviter_5.col-sm-6").is(":visible") == true && $("div#personne_inviter_6.col-sm-6").is(":visible") == true
            && $("div#personne_inviter_7.col-sm-6").is(":visible") == true)
        {
            $("div#personne_inviter_7.col-sm-6").hide();
            $("input#add_personne_inviter_7.btn.btn-primary").show();
            $("div#placement_personne_inviter_7.col-sm-6").remove();
            $("div#personne_inviter_7.col-sm-6").after('<div id="placement_personne_inviter_7" class="col-sm-6"></div>');
        }

    });
    $("input#add_personne_indispensable_5.btn.btn-primary").click(function () {
        $("div#personne_indispensable_5.col-sm-6").show();
        $("input#add_personne_indispensable_5.btn.btn-primary").hide();
        if ($("div#personne_inviter_5.col-sm-6").is(":visible") == false){
            $("div#placement_personne_inviter_5.col-sm-6").remove();
            $("div#personne_inviter_5.col-sm-6").after('<div id="placement_personne_inviter_5" class="col-sm-6"></div>');
        }
    });

    $("input#del_personne_indispensable_5.btn.btn-primary").click(function () {
        if($("div#personne_indispensable_5.col-sm-6").is(":visible") == true && $("div#personne_indispensable_6.col-sm-6").is(":visible") == false
            && $("div#personne_indispensable_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_indispensable_5.col-sm-6").hide();
            $("input#add_personne_indispensable_5.btn.btn-primary").show();
        }

        else if($("div#personne_indispensable_5.col-sm-6").is(":visible") == true && $("div#personne_indispensable_6.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_7.col-sm-6").is(":visible") == false){
            $("div#personne_indispensable_6.col-sm-6").hide();
            $("input#add_personne_indispensable_6.btn.btn-primary").show();
        }

        if  ($("div#personne_indispensable_5.col-sm-6").is(":visible") == true && $("div#personne_indispensable_6.col-sm-6").is(":visible") == true
            && $("div#personne_indispensable_7.col-sm-6").is(":visible") == true)
        {
            $("div#personne_indispensable_7.col-sm-6").hide();
            $("input#add_personne_indispensable_7.btn.btn-primary").show();
        }
    });
    $("input#add_personne_inviter_6.btn.btn-primary").click(function () {
        $("div#personne_inviter_6.col-sm-6").show();
        $("input#add_personne_inviter_6.btn.btn-primary").hide();
        if ($("div#personne_inviter_6.col-sm-6").is(":visible") == true){
            $("div#placement_personne_inviter_6.col-sm-6").remove();
        }
    });
    $("input#del_personne_inviter_6.btn.btn-primary").click(function () {
        if($("div#personne_inviter_6.col-sm-6").is(":visible") == true && $("div#personne_inviter_7.col-sm-6").is(":visible") == false){
            $("div#personne_inviter_6.col-sm-6").hide();
            $("input#add_personne_inviter_6.btn.btn-primary").show();
            $("div#placement_personne_inviter_6.col-sm-6").remove();
            $("div#personne_inviter_6.col-sm-6").after('<div id="placement_personne_inviter_6" class="col-sm-6"></div>');
        }
        if ($("div#personne_inviter_6.col-sm-6").is(":visible") == true && $("div#personne_inviter_7.col-sm-6").is(":visible") == true){
            $("div#personne_inviter_7.col-sm-6").hide();
            $("input#add_personne_inviter_7.btn.btn-primary").show();
            $("div#placement_personne_inviter_7.col-sm-6").remove();
            $("div#personne_inviter_7.col-sm-6").after('<div id="placement_personne_inviter_7" class="col-sm-6"></div>');
        }
    });
    $("input#add_personne_indispensable_6.btn.btn-primary").click(function () {
        $("div#personne_indispensable_6.col-sm-6").show();
        $("input#add_personne_indispensable_6.btn.btn-primary").hide();
        if ($("div#personne_inviter_6.col-sm-6").is(":visible") == false){
            $("div#placement_personne_inviter_6.col-sm-6").remove();
            $("div#personne_inviter_6.col-sm-6").after('<div id="placement_personne_inviter_6" class="col-sm-6"></div>');
        }

    });
    $("input#del_personne_indispensable_6.btn.btn-primary").click(function () {

        if($("div#personne_indispensable_6.col-sm-6").is(":visible") == true && $("div#personne_indispensable_7.col-sm-6").is(":visible") == false)
        {
            $("div#personne_indispensable_6.col-sm-6").hide();
            $("input#add_personne_indispensable_6.btn.btn-primary").show();
        }

        if ($("div#personne_indispensable_6.col-sm-6").is(":visible") == true && $("div#personne_indispensable_7.col-sm-6").is(":visible") == true)
        {
            $("div#personne_indispensable_7.col-sm-6").hide();
            $("input#add_personne_indispensable_7.btn.btn-primary").show();
        }

    });
    $("input#add_personne_inviter_7.btn.btn-primary").click(function () {
        $("div#personne_inviter_7.col-sm-6").show();
        $("input#add_personne_inviter_7.btn.btn-primary").hide();
        if ($("div#personne_inviter_7.col-sm-6").is(":visible") == true){
            $("div#placement_personne_inviter_7.col-sm-6").remove();
        }
    });
    $("input#del_personne_inviter_7.btn.btn-primary").click(function () {
        $("div#personne_inviter_7.col-sm-6").hide();
        $("input#add_personne_inviter_7.btn.btn-primary").show();
        if ($("div#personne_inviter_7.col-sm-6").is(":visible") == false){
            $("div#personne_inviter_7.col-sm-6").after('<div id="placement_personne_inviter_7" class="col-sm-6"></div>');
        }
    });
    $("input#add_personne_indispensable_7.btn.btn-primary").click(function () {
        $("div#personne_indispensable_7.col-sm-6").show();
        $("input#add_personne_indispensable_7.btn.btn-primary").hide();
        if ($("div#personne_inviter_7.col-sm-6").is(":visible") == false){
            $("div#placement_personne_inviter_7.col-sm-6").remove();
            $("div#personne_inviter_7.col-sm-6").after('<div id="placement_personne_inviter_7" class="col-sm-6"></div>');
        }
    });
    $("input#del_personne_indispensable_7.btn.btn-primary").click(function () {
        $("div#personne_indispensable_7.col-sm-6").hide();
        $("input#add_personne_indispensable_7.btn.btn-primary").show();
        if ($("div#personne_inviter_7.col-sm-6").is(":visible") == false){
            $("div#placement_personne_inviter_7.col-sm-6").remove();
        }
    });
    $("#personne_reunion").click(function () {
        if($("div#personne_inviter_1.col-sm-6").is(":visible") == true && $("div#personne_indispensable_1.col-sm-6").is(":visible") == false
        || $("div#personne_inviter_1.col-sm-6").is(":visible") == false && $("div#personne_indispensable_1.col-sm-6").is(":visible") == true)
        {
            verif_champs_remplis_personne_inviter_indispensable()
        }
        else{
            personne_inviter_indispensable_identique();
        }
    })
});
