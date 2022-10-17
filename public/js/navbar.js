if (document.body.contains(document.querySelector(".main-section"))) {
    document.querySelector(".main-section").style.paddingTop = document.querySelector("header").offsetHeight + "px";
}

// if (window.innerWidth > 1023) {

//     if (window.pageYOffset > document.querySelector("header").offsetHeight) {

//         document.querySelector("header").style.background = "white";
//     } else {


//         document.querySelector("header").style.background = "transparent";
//     }
// }

window.onload = function () {


    if (document.body.contains(document.querySelector(".main-section"))) {

        if (window.innerWidth > 1023) {
            document.querySelector(".main-section").style.paddingTop = "93px";
        } else {
            document.querySelector(".main-section").style.paddingTop = "64px";
        }
    }

    window.onresize = function () {


        if (document.body.contains(document.querySelector(".main-section"))) {
            if (window.innerWidth > 1023) {
                document.querySelector(".main-section").style.paddingTop = "93px";
            } else {
                document.querySelector(".main-section").style.paddingTop = "64px";
            }
        }

        document.querySelector(".btn-toogler i").classList.add("fa-bars");
        document.querySelector(".btn-toogler i").classList.remove("fa-times");

        if (screen.width <= 1023) {

            document.querySelector("nav").style.height = "64px";
        } else {
            document.querySelector("nav").style.height = "auto";
        }

    }

    document.querySelector(".nav-toogler").addEventListener("click", function () {

        console.log(document.querySelector("nav").offsetHeight);
        if (document.querySelector("nav").offsetHeight == "64") {

            document.querySelector("nav").style.height = "460px";
            document.querySelector(".btn-toogler i").classList.remove("fa-bars");
            document.querySelector(".btn-toogler i").classList.add("fa-times");

        } else {

            document.querySelector(".btn-toogler i").classList.add("fa-bars");
            document.querySelector(".btn-toogler i").classList.remove("fa-times");
            document.querySelector("nav").style.height = "64px";

        }

    });

    // window.onscroll = () => {

    //     if (window.innerWidth > 1023) {

    //         if (window.pageYOffset > document.querySelector("header").offsetHeight) {

    //             document.querySelector("header").style.background = "white";
    //             document.querySelector("header").style.boxShadow = "0px 2px 8px rgb(219 219 219)";
    //             document.querySelector("header").classList.add('change-color');

    //         } else {

    //             document.querySelector("header").classList.remove('change-color');
    //             document.querySelector("header").style.background = "transparent";
    //             document.querySelector("header").style.boxShadow = "none";
    //         }
    //     }

    // }
}

