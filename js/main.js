jQuery(function($) {

    $('.header .menu-open').on('click', function() {
        $('.header .menu-closed').hide(300);
        $('.header .menu-opened').show(300);
    });

    $('.header .menu-close').on('click', function() {
        $('.header .menu-opened').hide(300);
        $('.header .menu-closed').show(300);
    });

});