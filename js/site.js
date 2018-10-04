jQuery(document).ready(function () {

    // DROPDOWN MENUS
    jQuery(".menu-toggle").click(function ($) {
        jQuery(this).toggleClass("open");
        jQuery('#menu-header').slideToggle("slow");
    });
    jQuery(".menu-item-has-children").click(function ($) {
        jQuery(this).children('.sub-menu').slideToggle("slow").siblings('').children('.sub-menu').slideToggle("slow");
    });
    jQuery("#menu-header .menu-item-has-children").hover(function ($) {
        jQuery(this).children('.sub-menu').slideToggle();
    });
    jQuery(".sidebar .menu-item-has-children").click(function ($) {
        jQuery(this).toggleClass('open');
        jQuery('.menu-item-has-children.open').removeClass('open');
    });

    // MATCH HEIGHT
    jQuery('.column').matchHeight();
    jQuery('.sub-column').matchHeight();
    jQuery('.employee').matchHeight();
    jQuery('#menu-practice-areas li').matchHeight();
    jQuery('.item').matchHeight();
    jQuery('.item').matchHeight();
    jQuery('.practice-areas .item').matchHeight();

    // SLICK CAROUSELS
    jQuery(".success-stories-carousel").slick({infinite: true, dots: true, arrows: false, slidesToShow: 3, slidesToScroll: 1, responsive: [
        {breakpoint: 1199, settings: {slidesToShow: 1, infinite: true}}
    ]});
    jQuery(".awards-carousel").slick({infinite: true, dots: true, arrows: false, slidesToShow: 4, slidesToScroll: 1, responsive: [
        {breakpoint: 1199, settings: {slidesToShow: 1, infinite: true}}
    ]});
    jQuery(".testimonials-carousel").slick({infinite: true, dots: true, arrows: false, slidesToShow: 1, slidesToScroll: 1});


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
});