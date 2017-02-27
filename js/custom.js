$ = jQuery.noConflict();
$(document).ready(function () {
    $('.client-carousel').owlCarousel({
        items: 5,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: false,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 5,
                nav: true,
                loop: false
            }
        }
    });
    $('#myCarousel').owlCarousel({
        items: 1
    });
});
$(document).on('click', "div.bhoechie-tab-menu>div.list-group>a", function (e) {
    e.preventDefault();
    $(this).siblings('a.active').removeClass("active");
    $(this).addClass("active");
    var index = $(this).index();
    $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
    $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
});



$(window).scroll(function () {
    if ($(this).scrollTop() >= 200) {
        $('.site-navi').addClass("fix-header");
    } else {
        $('.site-navi').removeClass("fix-header");
    }
});


