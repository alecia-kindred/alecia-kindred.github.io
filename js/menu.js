$(document).ready(function () {
    'use strict';

    /* ========================================================================
    Mobile menu
    ========================================================================== */
    $(".menu-trigger, .nav").click(function () {
        if($(window).width() <= 700) {
            $(".nav").fadeToggle(200);
        }
    });

    $(".menu-trigger, .nav").click(function () {
        if($(window).width() <= 700) {
            $(".top-menu").toggleClass("top-animate");
            $(".mid-menu").toggleClass("mid-animate");
            $(".bottom-menu").toggleClass("bottom-animate");
            $("body").toggleClass("mobile-nav");
        }
    });

    $(".nav li").on('click', function() {
        var target = $(this).data('rel');
        var $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing');
    });
});