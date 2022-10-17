window.addEventListener("load", function () {

    this.document.querySelectorAll(".toogle-section").forEach(element => {
        element.addEventListener("click", function () {

            document.querySelectorAll(".toogle-section").forEach(e => {
                e.classList.remove("active");
            });
            element.classList.add("active");

            document.querySelectorAll(".page-wrapper section").forEach(section => {
                if ((element.getAttribute("data-show") != section.id) & (section.id != "company-profile-nav") & (section.id != "company_profile_upper")) {

                    if (element.getAttribute("data-show") == "all") {
                        section.style.display = "block";
                        section.style.marginBottom = "0px";
                    } else {
                        document.querySelector("#"+element.getAttribute("data-show")).style.display = "block";
                        document.querySelector("#"+element.getAttribute("data-show")).style.marginBottom = "100px";
                        section.style.display = "none";
                        section.style.marginBottom = "0px";
                    }
                }
            });


            document.querySelectorAll(".forms").forEach(div => {

                if ( div.classList.contains(element.getAttribute("data-show"))) {
                    div.style.display="block";
                    div.style.marginBottom = "100px";
                } else {
                    div.style.display="none";
                    div.style.marginBottom = "0px";

                }

            });
        });
    });
});
