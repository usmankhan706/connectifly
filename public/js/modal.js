window.addEventListener("load", function () {
    document.querySelectorAll(".modal-close-icon").forEach(element => {

        element.addEventListener("click", function () {
            document.querySelector("body").style.overflowY = "auto";
            var id = element.parentElement.parentElement.getAttribute("id");
            document.getElementById(id).style.top = "-100%";
        });
    });

    document.querySelectorAll("#modal-toggle").forEach(button => {
        button.addEventListener("click", function () {
            document.querySelector("body").style.overflowY = "hidden";
            var modal = button.getAttribute("data-toggle");
            document.getElementById(modal).style.top = "0%";
        })
    });


    document.querySelectorAll(".popup-toggle").forEach(element => {
        element.addEventListener("click", function () {
            let pop_id = element.getAttribute("data-popup");

            if (document.getElementById(pop_id).classList.contains("hide-popup")) {
                document.getElementById(pop_id).classList.add("view-popup");
                document.getElementById(pop_id).classList.remove("hide-popup");
            } else {
                document.getElementById(pop_id).classList.remove("view-popup");
                document.getElementById(pop_id).classList.add("hide-popup");
            }
        });
    });


    document.getElementById("#chat-about-toogle").addEventListener("click", function () {

        this.parentElement.parentElement.classList.remove("view-popup");
        this.parentElement.parentElement.classList.add("hide-popup");

        document.querySelector(".main-chat-box").classList.add("grid-area-about");
        document.querySelector(".main-chat-box").classList.remove("grid-area-chat");
        document.querySelector(".message-reply-section").classList.add("hidden-md");
        document.querySelector(".message-reply-section").classList.remove("visible-md");
        document.querySelector(".replies").classList.add("hidden-md");
        document.querySelector(".replies").classList.remove("flex-md");
        document.querySelector(".about-sender").classList.add("visible-md");
        document.querySelector(".about-sender").classList.remove("hidden-md");
    });

    document.querySelector(".back-to-chat").addEventListener("click", function () {

        document.querySelector(".main-chat-box").classList.remove("grid-area-about");
        document.querySelector(".main-chat-box").classList.add("grid-area-chat");
        document.querySelector(".message-reply-section").classList.add("visible-md");
        document.querySelector(".message-reply-section").classList.remove("hidden-md");
        document.querySelector(".replies").classList.add("flex-md");
        document.querySelector(".replies").classList.remove("hidden-md");
        document.querySelector(".about-sender").classList.add("hidden-md");
        document.querySelector(".about-sender").classList.remove("visible-md");
    });

    // document.querySelectorAll(".single-inbox").forEach(element => {
    //     element.addEventListener("click", function () {
    //         document.querySelector(".chat-wrapper").classList.add("chat-wrapper-area");
    //         document.querySelector(".chat-wrapper").classList.remove("chat-wrapper-toggle");
    //         document.querySelector(".main-chat-box").classList.add("grid-sm");
    //         document.querySelector(".main-chat-box").classList.remove("hidden-sm");
    //         document.querySelector(".sidebar").classList.add("hidden-sm");
    //         document.querySelector(".sidebar").classList.remove("flex-sm");
    //     });
    // });

    $(document).on("click", ".single-inbox", function(){
        document.querySelector(".chat-wrapper").classList.add("chat-wrapper-area");
        document.querySelector(".chat-wrapper").classList.remove("chat-wrapper-toggle");
        document.querySelector(".main-chat-box").classList.add("grid-sm");
        document.querySelector(".main-chat-box").classList.remove("hidden-sm");
        document.querySelector(".sidebar").classList.add("hidden-sm");
        document.querySelector(".sidebar").classList.remove("flex-sm");
    })




    document.querySelector("#chat-select-back").addEventListener("click", function () {
        document.querySelector(".main-chat-box").classList.remove("grid-sm");
        document.querySelector(".main-chat-box").classList.add("hidden-sm");
        document.querySelector(".sidebar").classList.remove("hidden-sm");
        document.querySelector(".sidebar").classList.add("flex-sm");
    });
});

window.addEventListener("click", function (e) {

    let modals = document.querySelectorAll(".modal-container");
    for (const iterator of modals) {

        if (e.target == iterator) {
            document.querySelector("body").style.overflowY = "auto";
            iterator.style.top = "-100%";
        }
    }

});
