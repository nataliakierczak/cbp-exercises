window.addEventListener('load', function() {
    var uluru = {
        lat: -25.345,
        lng: 131.037
    };

    function initMap(point) {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
             mapTypeId: 'satellite',
            center: point
        });
        var marker = new google.maps.Marker({
            position: point,
            map: map
        });
    }

    initMap(uluru);
});