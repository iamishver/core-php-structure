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
    $("#npdfs.iframe").fancybox({
        'width': 1200, // or whatever you want
        'height': 500, // or whatever you want
        'type': 'iframe'
    });
    $('#myCarousel').owlCarousel({
        items: 1
    });

    $(".marketing_material .iframe").fancybox({
        'width': 1200, // or whatever you want
        'height': 700, // or whatever you want
        'type': 'iframe'
    });

    $(".btn-marketing").click(function () {
        $(".fancybox-wrap").addClass("magi");
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
    if ($(this).scrollTop() >= 20) {
        $('.site-navi').addClass("fix-header");
    } else {
        $('.site-navi').removeClass("fix-header");
    }
});

function opens() {
    $('html, body').animate({
        scrollTop: $('body').offset().top
    }, 100);
}

function validNumber(value) {
    var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
    if (numberRegex.test(value)) {
        return true;
    } else {
        return false;
    }
}
function validateEmail(email) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(email)) {
        return true;
    } else {
        return false;
    }
}