$ = jQuery.noConflict();
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


