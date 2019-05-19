 $( function() {
    $( "#tabs" ).tabs({
        collapsible: true
    });
    $(".tabs-2").click(function() {
        $("#calendrier").hide();
    });
    $(".tabs-1").click(function() {
        $("#calendrier").show();
    });
});
