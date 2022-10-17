$(document).ready(function () {


    $("#post-slider").owlCarousel({
        items:3,
        nav: true,
        dots: false,
        margin: 20,
        navContainer: '.owl-post-nav-container',
        loop: false,
        center: false,
        autoplay: false,
        smartSpeed: 500,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1,
            },
            // breakpoint from 480 up
            480: {
                items: 2,
            },
            // breakpoint from 768 up
            768: {
                items: 2,
            },
            // breakpoint from 768 up
            1024: {
                items: 2,
            },
            1280: {
                items: 3,
            }
        }
    });

    $("#jobs-slider").owlCarousel({
        items: 4,
        nav: true,
        dots: false,
        margin: 20,
        navContainer: '.owl-jobs-nav-container',
        loop: false,
        center: false,
        autoplay: false,
        smartSpeed: 500,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1,
            },
            // breakpoint from 480 up
            480: {
                items: 2,
            },
            // breakpoint from 768 up
            768: {
                items: 2,
            },
            // breakpoint from 768 up
            1024: {
                items: 3,
            },
            1280: {
                items: 4,
            }
        }
    });

});
