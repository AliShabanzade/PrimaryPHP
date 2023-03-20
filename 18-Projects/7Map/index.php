<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7Map</title>
    <link href="favicon.png" rel="shortcut icon" type="image/png">

    <link rel="stylesheet" href="assets/css/leaflet.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />

    <script src="assets/js/leaflet.js">
         
    </script>

</head>

<body>
    <div class="main">
        <div class="head">
            <input type="text" id="search" placeholder="دنبال کجا می گردی؟">
        </div>
        <div class="mapContainer">
            <div id="map"></div>
        </div>
    </div>

    <script>
    
    //set location by default L is a object of leaflet
	const mymap = L.map('map').setView([36.312875, 59.527160], 15);
    //loading tilelayer 
	const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: 'Map Project by Ali Shabanzade <a href="https://7learn.com/course/php-expert">7Learn.com-php-expert</a>'
	}).addTo(mymap);

    //set dynamic height full screen by js
    document.getElementById('map').style.setProperty('height', window.innerHeight + 'px');

	// const marker = L.marker([51.5, -0.09]).addTo(map)
	// 	.bindPopup('<b>Hello world!</b><br />I am a popup.').openPopup();

	// const circle = L.circle([51.508, -0.11], {
	// 	color: 'red',
	// 	fillColor: '#f03',
	// 	fillOpacity: 0.5,
	// 	radius: 500
	// }).addTo(map).bindPopup('I am a circle.');

	// const polygon = L.polygon([
	// 	[51.509, -0.08],
	// 	[51.503, -0.06],
	// 	[51.51, -0.047]
	// ]).addTo(map).bindPopup('I am a polygon.');


	// const popup = L.popup()
	// 	.setLatLng([51.513, -0.09])
	// 	.setContent('I am a standalone popup.')
	// 	.openOn(map);

	// function onMapClick(e) {
	// 	popup
	// 		.setLatLng(e.latlng)
	// 		.setContent(`You clicked the map at ${e.latlng.toString()}`)
	// 		.openOn(map);
	// }

	// map.on('click', onMapClick);

</script>

</body>

</html>
       
