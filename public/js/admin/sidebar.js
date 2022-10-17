window.addEventListener("load", function () {

    document.querySelector(".sidebar-toogler span").addEventListener("click", function () {

        if (document.getElementById("admin-dashboard").classList.contains("sidebar-open")) {

            document.querySelector("#admin-dashboard").classList.add("sidebar-close-md");
            document.querySelector("#admin-dashboard").classList.remove("sidebar-open-md");
            document.getElementById("admin-dashboard").classList.add("sidebar-close");
            document.getElementById("admin-dashboard").classList.remove("sidebar-open");

            if (window.innerWidth <= 1023) {
                document.querySelector("#header").style.display = "none";
                document.querySelector("#content").style.display = "none";
                document.querySelector("#footer").style.display = "none";
                document.querySelector("#sidebar").style.display = "flex";
            } else {

                document.querySelector("#sidebar .logo-box p").style.display = "block";
                document.querySelector("#sidebar .logo-box img").style.display = "none";
                document.querySelector(".sidebar-title a p").style.display = "none";
                document.querySelectorAll(".sidebar-nav ul li a p").forEach(element => {
                    element.style.display = "none";
                });

            }
        } else {

            document.querySelector("#admin-dashboard").classList.add("sidebar-open-md");
            document.querySelector("#admin-dashboard").classList.remove("sidebar-close-md");
            document.getElementById("admin-dashboard").classList.add("sidebar-open");
            document.getElementById("admin-dashboard").classList.remove("sidebar-close");

            if (window.innerWidth <= 1023) {
                document.querySelector("#header").style.display = "flex";
                document.querySelector("#content").style.display = "block";
                document.querySelector("#footer").style.display = "flex";
                document.querySelector("#sidebar").style.display = "none";
            } else {

                document.querySelector("#sidebar .logo-box p").style.display = "none";
                document.querySelector("#sidebar .logo-box img").style.display = "block";
                document.querySelector(".sidebar-title a p").style.display = "block";
                document.querySelectorAll(".sidebar-nav ul li a p").forEach(element => {
                    element.style.display = "block";
                });

            }
        }

    });

    document.querySelector("#close-btn").addEventListener("click", function () {
        document.querySelector("#admin-dashboard").classList.add("sidebar-open-md");
        document.querySelector("#admin-dashboard").classList.remove("sidebar-close-md");
        document.getElementById("admin-dashboard").classList.add("sidebar-open");
        document.getElementById("admin-dashboard").classList.remove("sidebar-close");

        if (window.innerWidth <= 1023) {
            document.querySelector("#header").style.display = "flex";
            document.querySelector("#content").style.display = "block";
            document.querySelector("#footer").style.display = "flex";
            document.querySelector("#sidebar").style.display = "none";
        } else {

            document.querySelector("#sidebar .logo-box p").style.display = "none";
            document.querySelector("#sidebar .logo-box img").style.display = "block";
            document.querySelector(".sidebar-title a p").style.display = "block";
            document.querySelectorAll(".sidebar-nav ul li a p").forEach(element => {
                element.style.display = "block";
            });

        }
    });

});
