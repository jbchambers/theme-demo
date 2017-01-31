jQuery(document).ready(function () {
    jQuery(".menu-toggle").click(function ($) {
        jQuery(this).toggleClass("open");
        jQuery('#menu-header').slideToggle("slow");
    });
    jQuery(".menu-item-has-children").click(function ($) {
        jQuery(this).children('.sub-menu').slideToggle("slow");
    });
    jQuery(".menu-item-has-children").hover(function ($) {
        jQuery(this).children('.sub-menu').slideToggle();
    });
    jQuery(".banner > a").click(function (event) {
        event.preventDefault();
        jQuery.smoothScroll({scrollTarget: (this).hash});
    });
    jQuery('select').niceSelect();
    jQuery('.column').matchHeight();
    jQuery('.sub-column').matchHeight();
    jQuery('.employee').matchHeight();
    jQuery('#menu-practice-areas li').matchHeight();
    jQuery('.item').matchHeight();
    jQuery('.practice-areas .item').matchHeight();
    jQuery(".selling-points-carousel").slick({infinite: false, dots: false, arrows: true, slidesToShow: 3, slidesToScroll: 1, responsive: [
        {breakpoint: 1199, settings: {slidesToShow: 1, infinite: true}}
    ]});
    jQuery(".practice-areas-carousel").slick({infinite: true, dots: false, arrows: true, slidesToShow: 7, slidesToScroll: 1, responsive: [
        {breakpoint: 1550, settings: {slidesToShow: 5, infinite: true}},
        {breakpoint: 1199, settings: {slidesToShow: 3, infinite: true}},
        {breakpoint: 767, settings: {slidesToShow: 1, infinite: true}}
    ]});
    jQuery(".awards-carousel").slick({infinite: true, dots: false, arrows: true, slidesToShow: 4, slidesToScroll: 1, responsive: [
        {breakpoint: 1199, settings: {slidesToShow: 3, infinite: true, dots: true}},
        {breakpoint: 767, settings: {slidesToShow: 1, infinite: true, dots: true}}
    ]});
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