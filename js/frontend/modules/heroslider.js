var init_hero_slider = function(){

    var hero_slider = $('.hero-slider');

    hero_slider.bxSlider({
        mode: 'fade',
        speed: 4000,
        pause: 8000,
        pager:false,
        controls: false,
        infiniteLoop:true,
        autoStart: true,
        auto: true
    });

};
