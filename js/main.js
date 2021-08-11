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




    Slider.create($('.tabs-content'), {
        draggable: false,
        dots: false,
        margin: 10,
        adaptiveHeight: true,
        speed: 250,
    });



    $('.content-tabs .content-tab').on('click', function(e) {
        e.preventDefault();
        let $tabs = $(this).closest('.content-tabs');
        $tabs.find('.content-tab').removeClass('active');

        let target = $(this).attr('href');

        let slider = $($tabs.data('target')).find('.' + Slider.config.sliderClass);
        Slider.get(slider).goTo($(this).data('index'));

        $(this).addClass('active');
    });

    if (typeof $.fn.niceSelect !== "undefined") {
        $('.select').niceSelect();
    }


    Slider.get($('.recommended-products-list.mobile-slider')).setArgs({"slidesToShow": 2, "slidesToScroll": 2});

    Slider.createMobile($('.mobile-slider'), {
        dots: true,
    }, 576, function() {
        $('.mobile-slider').removeClass('row');
    }, function() {
        $('.mobile-slider').addClass('row');
    });

    $('.drag-scroll, .breadcrumbs-wrap').overlayScrollbars({
        overflowBehavior : {
            x: 'scroll',
            y: 'hidden',
        }
    });



    $('.nice-select .sort-price-up').append('<span class="icon icon-arrow-up">');
    $('.nice-select .sort-price-down').append('<span class="icon icon-arrow-down">');

    $('.filter-cancel').hover(function() {
        $(this).parent().addClass('hover');
    }, function() {
        $(this).parent().removeClass('hover');
    });



    $('.footer-menu-header').on('click', function() {
        if ($(window).width() < 768) {
            let $parent = $(this).parent();
            $parent.toggleClass('menu-open');
            $parent.find('.sub-menu').slideToggle();
        }
    });

    Slider.create($('.product-card-main-images'), {
        dots: true,
        fade: true,
        asNavFor: '.product-card-images-list',
        speed: 300,
    });

    Slider.create($('.product-card-images-list'), {
        vertical: true,
        verticalSwiping: true,
        slidesPerRow: 4,
        slidesToShow: 4,
        prevArrow: '<button class="btn-secondary btn-up"><span class="icon icon-up"></span></button>',
        nextArrow: '<button class="btn-secondary btn-down"><span class="icon icon-down"></span></button>',
        arrows: true,
        asNavFor: '.product-card-main-images',
        focusOnSelect: true,
    }).beforeSlide(function(e, slick, currentSlide, nextSlide) {
        let $variants = $('.product-card-variant-list .product-card-img-overview')
        $variants.removeClass('active');
        $variants.eq(nextSlide).addClass('active');
    });

    $('.product-card-variant-list .product-card-img-overview').on('click', function() {
        Slider.get($('.product-card-images-list')).goTo($(this).index());
    }).eq(0).addClass('active');

    Slider.create($('.side-slider'), {
        dots: true,
        arrows: true,
        adaptiveHeight: false,
        prevArrow: Slider.config.prev,
        nextArrow: Slider.config.next,
    })

    Slider.create($('.slider-unlimited'), {
        dots: false,
        arrows: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        swipeToSlide: true,
        adaptiveHeight: false,
        infinite: true,
        prevArrow: Slider.config.prev,
        nextArrow: Slider.config.next,
    });

});