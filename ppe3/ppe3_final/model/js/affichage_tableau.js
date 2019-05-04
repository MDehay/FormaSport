$(function() {
    $("div#tableau1").hide();
    $("button.btn.btn-info").click(function () {
        if($("div#tableau1").is(":visible") ==true)
        {
            $("div#tableau1").hide();
        }
        else {
            $("div#tableau1").show();
        }
        });
});

