

const defaultLocation = [36.312875, 59.527160];
const defaultZoom = 15;
//set location by default L is a object of leaflet
//map is variable and - ('map') is div tag from index
var map = L.map('map').setView(defaultLocation, defaultZoom);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 18,
    attribution: 'Map Project by Ali Shabanzade <a href="https://7learn.com/course/php-expert">7Learn.com-php-expert</a>',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
}).addTo(map);

//set dynamic height full screen by js
document.getElementById('map').style.setProperty('height', window.innerHeight + 'px');

//set a new location
//     map.setView([35.7048585,51.3617731],defaultZoom);

//??
// set marker and popup information
// L.marker(defaultLocation).addTo(map).bindPopup("Ferdowsi University of Mashhad").openPopup();


//??set second marker location
//     L.marker([36.3214213,59.5354162]).addTo(map).bindPopup("Mellat Amusement Park");

//     map.on('popupopen' , function(){
//         alert('this is a popup opened');
//    });


//??get view Bound information
// var northLine = map.getBounds().getNorth(); // north Line
// var westhLine = map.getBounds().getWest();  //west Line
// var soutLine = map.getBounds().getSouth();  //sout Line
// var eastLine = map.getBounds().getEast(); // east Line

// map.setView([northLine,westhLine],defaultZoom);

// ?? use Map Events
// map.on('zoomend',function(){
//     alert(map.getBounds().getCenter());
/*
1 : get bound lines (north,south,west,east)
2 : send bound lines to server
3 : search locations in map windows(active window)
4 : diplay loction markers in map
*/
// });



//   setTimeout(function(){


//   }, 2000);


map.on('dblclick' , function(event){
// The log() method writes (logs) a message to the console.
//    console.log(event);
//   add a marker where duble click happened
//   L.marker([event.latlng.lat , event.latlng.lng]).addTo(map); 
//   alert(event.latlng.lat + " , " + event.latlng.lng);

// 1 : add marker in clicked position Base on latlng parameter
L.marker(event.latlng).addTo(map);
// 2 : open modal (form) for save the clicked location
$('.modal-overlay').fadeIn(250);
$('#lat-display').val(event.latlng.lat);
$('#lng-display').val(event.latlng.lng);
$('#location-title').val('');
$('#location-type').val(0);

// 3 : fill the form and submit location data to server = done
// 4 : save location in database (status : pending review) = done
// 5 : review locations and verify if OK

});


var current_position, current_accuracy;
map.on('locationfound', function(e){
    // if position defined, then remove the existing position marker and accuracy circle from the map 
    if (current_position) {
        map.removeLayer(current_position);
        map.removeLayer(current_accuracy);
    }

    var radius = e.accuracy;
    current_position = L.marker(e.latlng).addTo(map)
    .bindPopup("دقت تقریبی: " + radius + " متر").openPopup();
    current_accuracy = L.circle(e.latlng , radius).addTo(map);



    
});

map.on('locationerror', function(e){
    alert(e.message);
});


function locate() {
    map.locate({ setView: true, maxZoom: defaultZoom });
}

// setInterval(locate, 5000);



$(document).ready(function() {

    $('form#addLocationForm').submit(function(e){
        //prevent form submiting
       e.preventDefault();
    //  this return current page informations  
       var form = $(this);
    //    The find() method returns descendant elements of the selected element
       var resultTag = form.find('.ajax-result');
       $.ajax({
        // form.attr means form attribute
         url: form.attr('action'),
         method: form.attr('method'),
        //  Output the result of serialized form values
         data: form.serialize(),
         success: function(response){
            resultTag.html(response);
         }
       });

    });


    $('.modal-overlay .close').click(function() {
        $('.modal-overlay').fadeOut();

    });

});











