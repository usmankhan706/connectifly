window.addEventListener("load", function(){
    document.querySelectorAll(".bookmark").forEach(element => {
        element.addEventListener("click", function(){
            let job_id= element.getAttribute("data-job");
            document.querySelector("#job-id").value = job_id;
        });
    });
    document.querySelectorAll(".easy-apply").forEach(element => {
        element.addEventListener("click", function(){
            let job_id= element.getAttribute("data-job");
            document.querySelector("#job-id").value = job_id;
        });
    });

    $("#attachment").on("input", function(){

        if ($(this).val() != "") {

            $(".file-name-show p").text($(this)[0].files[0].name);
            $(".file-name-show").css({
                "opacity" : "1",
            });

        } else {
            $(".file-name-show p").text("");
            $(".file-name-show").css({
                "opacity" : "0",
            });
        }
    });
    
});

