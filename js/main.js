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
        /*$(target).slideDown(400);*/
        $(target).animate({width:'toggle'},350);
        $(this).addClass('active');
    });

    if (typeof $.fn.niceSelect !== "undefined") {
        $('.select').niceSelect();
    }

    if (typeof $.fn.slick !== "undefined") {
        function mobileSliderSlick() {
            $('.mobile-slider:not(.slick-initialized)').slick({
                nextArrow: '',
                prevArrow: '',
                dots: true
            });
        }
        if(window.innerWidth < 576) {
            mobileSliderSlick();
        }
        
        $(window).resize(function(e){
            if(window.innerWidth < 576) {
                mobileSliderSlick();
            } else {
                $('.mobile-slider.slick-initialized').slick('unslick');
            }
        });
    }

    $('.nice-select .sort-price-up').append('<span class="icon icon-arrow-up">');
    $('.nice-select .sort-price-down').append('<span class="icon icon-arrow-down">');

    $('.filter-cancel').hover(function() {
        $(this).parent().addClass('hover');
    }, function() {
        $(this).parent().removeClass('hover');
    });



    $('.footer-menu-header').on('click', function() {
        if ($(window).width() < 768) {
            $parent = $(this).parent();
            $parent.toggleClass('menu-open');
            $parent.find('.footer-menu-list').slideToggle();
        }
    });

});