function Slider($container) {
    this.$container = $container;
}

Slider.config = {
    sliderClass : 'slick-slider',
    initedClass : 'slick-initialized',
    prev        : '<button type="button" class="slick-prev"><span class="icon icon-arrow-left"></span></button>',
    next        : '<button type="button" class="slick-next"><span class="icon icon-arrow-right"></span></button>',
}

Slider.create = function($container, options) {
    // options = {
    //     items: options.items || 1,
    //     dots: options.dots || false,
    //     mouseDrag: options.drag || true,
    //     touchDrag: options.drag || true,
    //     pullDrag: options.drag || true,
    //     margin: options.margin || 0,
    //     arrows: false,
    //     autoHeight: options.autoHeight || false,
    //     dotClass: 'slider-dot',
    //     dotsClass: 'slider-dots',
    // };

    let defaults = {
        arrows: false,
        dotClass: 'slider-dot',
        dotsClass: 'slider-dots',
        infinite: false,
    };

    options = Object.assign(defaults, options);

    // $container.addClass('owl-carousel').owlCarousel(options);
    $container.slick(options);
    return new Slider($container);
}

Slider.createMobile = function($container, options, breakpoint, oncreate, ondestroy) {
    function createSlider() {
        oncreate();
        Slider.create($container.filter(':not(.' + Slider.config.initedClass + ')'), options);
    }

    if(window.innerWidth < breakpoint) {
        createSlider();
    }

    $(window).resize(function(e){
        if(window.innerWidth < breakpoint) {
            createSlider();
        } else {
            ondestroy();
            Slider.get($container.filter('.' + Slider.config.initedClass )).delete();
        }
    });
}

Slider.get = function($container) {
    return new Slider($container);
}

Slider.prototype.goTo = function(slide) {
    // this.$container.trigger('to.owl.carousel', slide);
    if (this.$container.slick('slickCurrentSlide') !== slide) {
        this.$container.slick('slickGoTo', slide);
    }
}

Slider.prototype.delete = function() {
    // this.$container.removeClass('owl-carousel');
    // this.$container.trigger('destroy.owl.carousel');

    this.$container.slick('unslick');
}

Slider.prototype.setArgs = function(args) {
    this.$container.data('slick', args);
}

Slider.prototype.afterSlide = function(handler) {
    this.$container.on('afterChange', handler);
}

Slider.prototype.beforeSlide = function(handler) {
    this.$container.on('beforeChange', handler);
}