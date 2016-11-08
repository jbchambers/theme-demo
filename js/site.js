jQuery(document).ready(function(){
    // MAIN NAV MENU TOGGLE
    jQuery(".menu-toggle").click(function ($) {
        jQuery(this).toggleClass("open");
        jQuery('#menu-header').toggleClass("open");
    });
    // SUB-MENU TOGGLES
    jQuery(".menu-item-has-children").click(function ($) {
        jQuery(this).toggleClass("open");
        jQuery(this).children('.sub-menu').toggleClass("open");
    });
}); 

