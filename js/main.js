// This closure function makes the $-sign an alias for jQuery (noConflict)
(function($) {

    /**
 * Function which should help doing AJAX calls
 * @param url
 * @param data
 * @param callback
 * @param method
 */
function do_ajax(url, data, callback, method) {

    var ajax_method = 'post';

    if(typeof method != 'undefined') {
        ajax_method = method;
    }

    window.doingAjax   = true;

    $('body').addClass('loading');

    $.ajax({
        url: url,
        type: ajax_method,
        dataType: 'json',
        timeout: 240000,
        data: data,

        success: function(response_data) {

            console.log(['Ajax Success:',response_data]);
            $('body').removeClass('loading');
            window.doingAjax = false;
            callback(response_data, data);

        },

        error: function(response_data, status, error) {

            console.error(['Ajax Error:', response_data, status, error]);
            $('body').removeClass('loading');
            window.doingAjax = false;

            if(status == "timeout") {
                alert("Error: Your request could not be completed because it timed out. Try again later");
                document.location.href="/";
            } else {
                callback(response_data, data);
            }

        }

    });
}

// Will run when DOM is loaded
$(document).ready(function() {

    init_hero_slider();

    init_search_form();

});

// Will run when the page is fully loaded - including graphics.
$(window).load(function() {

    init_map();
    
});
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

var init_map = function(){

    var map_canvas = document.getElementById('map');

    var map = new google.maps.Map(map_canvas, {
        center: {lat: 55.6679901, lng: 12.613472},
        zoom: 18
    });

};

var init_search_form = function(){
    
    var search_form_button = $('.search-form button');

    search_form_button.on('click', function(){

        if($(this).hasClass('search-open') == false){

            var input_wrap = $(this).siblings('.search-input-container');

            input_wrap.animate({
                'max-width' : '199px'
            }, 100, function(){
                input_wrap.children('input').focus();
            });

            $(this).addClass('search-open');

            return false;

        }

        return true;

    });
    
};


})(jQuery);