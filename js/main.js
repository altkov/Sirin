jQuery(function($) {

    let mobileMenu = {
        open: function(speed) {
            this.changeState($('.header .menu-closed'), $('.header .menu-opened'), $('.mobile-menu'), speed);
        },

        close: function(speed) {
            this.changeState($('.header .menu-opened'), $('.header .menu-closed'), $('.mobile-menu'), speed);
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

});