jQuery(function($) {

    /* Mobile menu */

    let mobileMenu = {
        menu: '.mobile-menu',
        opened: '.header .menu-opened',
        closed: '.header .menu-closed',
        container: '.header-mobile',

        open: function(speed) {
            $(this.container).addClass('menu-active');
            this.changeState($(this.closed), $(this.opened), $(this.menu), speed);
        },

        close: function(speed) {
            $(this.container).removeClass('menu-active');
            this.changeState($(this.opened), $(this.closed), $(this.menu), speed);
        },

        changeState: function($hide, $show, $menu, speed) {
            $menu.fadeToggle(500);
            $('body').toggleClass('no-scroll');
            $hide.fadeOut(speed);
            $show.fadeIn(speed);
        }
    }

    $('.header .menu-open').on('click', function() {
        mobileMenu.open(400);
    });

    $('.header .menu-close').on('click', function() {
        mobileMenu.close(400);
    });




    $('.content-tabs .content-tab').on('click', function() {
        let $tabs = $(this).closest('.content-tabs');
        $tabs.find('.content-tab').removeClass('active');
        $($tabs.data('target')).find('.js-tab-content').slideUp(400);
        let target = $(this).attr('href');
        $(target).slideDown(400);
        $(this).addClass('active');
    });




});