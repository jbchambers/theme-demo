jQuery(document).ready(function () {

    // DROPDOWN MENUS
    jQuery(".menu-toggle").click(function ($) {
        jQuery(this).toggleClass("open");
        jQuery('header nav').toggleClass("open");
    });
    jQuery("header .menu-item-has-children").click(function ($) {
        jQuery(this).addClass('open').children('.sub-menu').slideToggle("slow");
    });
    jQuery(".sidebar .menu-item-has-children").click(function ($) {
        jQuery(this).children('.sub-menu').slideToggle("slow");
        jQuery(this).siblings('').children('.sub-menu').slideUp("fast");
    });


    // MATCH HEIGHT
    jQuery('.column').matchHeight();
    jQuery('.item').matchHeight();
    jQuery('.info').matchHeight();
    jQuery('.info .info-wrap').matchHeight();
    jQuery('.item .content').matchHeight();
    jQuery('.item .quote').matchHeight();
    jQuery('.item .intro').matchHeight();
    jQuery('.item .excerpt').matchHeight();
    jQuery('.articles article').matchHeight();

    // SLICK CAROUSELS
    jQuery('.testimonials-carousel').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true
                }
            }
        ]
    });

    jQuery('.news-carousel').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 768,
                settings: "unslick"
            }
        ]
    });

    jQuery('.team-carousel').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 768,
                settings: "unslick"
            }
        ]
    });


    // SMOOTH SCROLL
    jQuery(function ($) {
        jQuery('a[href*="#more"]:not([href="#"])').click(function ($) {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = jQuery(this.hash);
                target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    jQuery('html, body').animate({scrollTop: target.offset().top}, 1000);
                    return false;
                }
            }
        });
    });
    jQuery(function ($) {
        jQuery('a[href*="#form"]:not([href="#"])').click(function ($) {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = jQuery(this.hash);
                target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    jQuery('html, body').animate({scrollTop: target.offset().top}, 1000);
                    return false;
                }
            }
        });
    });
    jQuery(function ($) {
        jQuery('a[href*="#contact"]:not([href="#"])').click(function ($) {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = jQuery(this.hash);
                target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    jQuery('html, body').animate({scrollTop: target.offset().top}, 1000);
                    return false;
                }
            }
        });
    });
    jQuery(function ($) {
        jQuery('a[href*="#team"]:not([href="#"])').click(function ($) {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = jQuery(this.hash);
                target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    jQuery('html, body').animate({scrollTop: target.offset().top}, 1000);
                    return false;
                }
            }
        });
    });
    jQuery(function ($) {
        jQuery('a[href*="#awards"]:not([href="#"])').click(function ($) {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = jQuery(this.hash);
                target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    jQuery('html, body').animate({scrollTop: target.offset().top}, 1000);
                    return false;
                }
            }
        });
    });

    jQuery('select').niceSelect();
});