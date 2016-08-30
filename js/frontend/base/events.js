// Will run when DOM is loaded
$(document).ready(function() {

    init_hero_slider();

    init_search_form();

});

// Will run when the page is fully loaded - including graphics.
$(window).load(function() {

    init_map();
    
});