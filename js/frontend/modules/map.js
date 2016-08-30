var init_map = function(){

    var map_canvas = document.getElementById('map');

    var map = new google.maps.Map(map_canvas, {
        center: {lat: 55.6679901, lng: 12.613472},
        zoom: 18
    });

};
