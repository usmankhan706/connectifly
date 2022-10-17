window.addEventListener("load", function(){

    $(".file-btn input").on("input", function(){

        if ($(this).val() != "") {
            $(this).siblings("label").css({
                "background" : "#ff9fb1",
                "color" : "#b10000"
            })
        } else {
            $(this).siblings("label").css({
                "background" : "#c9caea",
                "color" : "#4044A7"
            })
        }
    });
});