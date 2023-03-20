const defaultLocation = [35.722, 51.328];
const defaultZoom = 15;
var map = L.map('map').setView(defaultLocation, defaultZoom);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: '7Learn.ac <a href="https://7learn.ac/course-php-expert">7Map Project</a> ',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
}).addTo(map);
document.getElementById('map').style.setProperty('height', window.innerHeight + 'px');

// set view in map
// map.setView([29.592, 52.573], defaultZoom);


// show and pin markers
// L.marker(defaultLocation).addTo(map).bindPopup("7Learn Office 1").openPopup();
// L.marker([35.712, 51.338]).addTo(map).bindPopup("7Learn Office 2");
// map.on('popupopen', function() {
//     alert('PopUp Opened!');
// });

// get view Bound information
// var northLine = map.getBounds().getNorth(); // khat shomali
// var westLine = map.getBounds().getWest(); // khat Gharbi
// var southLine = map.getBounds().getSouth(); // khat Jonoobi
// var eastLine = map.getBounds().getEast(); // khat Sharghi


// Use Map Events
map.on('zoomend', function() {
    // alert(map.getBounds().getCenter());
    // 1 : get bound lines
    // 2 : send bound lines to server
    // 3 : search locations in map windows
    // 4 : display location markers in map
});

// Use Map Events
map.on('dblclick', function(event) {
    // alert(event.latlng.lat + " , " + event.latlng.lng);
    // 1: add marker in clicked position
    L.marker(event.latlng).addTo(map);
    // 2: open modal (form) for save the clicked location
    $('.modal-overlay').fadeIn(500);
    $('#lat-display').val(event.latlng.lat);
    $('#lng-display').val(event.latlng.lng);
    $('#l-type').val(0);
    $('#l-title').val('');
    // 3: fill the form and submit location data to server

    // 4: save location in database (status : pending review)
    // 5: review locations and verify if OK
});





// find Current Location (at first, Use Shekan.ir)
var current_position, current_accuracy;
map.on('locationfound', function(e) {
    // if position defined, then remove the existing position marker and accuracy circle from the map
    if (current_position) {
        map.removeLayer(current_position);
        map.removeLayer(current_accuracy);
    }
    var radius = e.accuracy;
    current_position = L.marker(e.latlng).addTo(map)
        .bindPopup("دقت تقریبی: " + radius + " متر").openPopup();
    current_accuracy = L.circle(e.latlng, radius).addTo(map);
});
map.on('locationerror', function(e) {
    alert(e.message);
});
// wrap map.locate in a function    
function locate() {
    map.locate({ setView: true, maxZoom: defaultZoom });
}
// call locate every 5 seconds... forever
// setInterval(locate, 5000);



$(document).ready(function() {
    $('form#addLocationForm').submit(function(e) {
        e.preventDefault(); // prevent form submiting
        var form = $(this);
        var resultTag = form.find('.ajax-result');
        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: form.serialize(),
            success: function(response) {
                resultTag.html(response);
            }
        });
    });


    $('.modal-overlay .close').click(function() {
        $('.modal-overlay').fadeOut();
    });
});