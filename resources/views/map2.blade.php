@extends('layout.app')
@section('content')
<script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />


<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.2/mapbox-gl-directions.js"></script>
<link
rel="stylesheet"
href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.2/mapbox-gl-directions.css"
type="text/css"
/>
<style>
    
	body { margin: 0; padding: 0; }
	#map {  top: 0; bottom: 0; width: 100%; min-height: 90vh;}

</style>
<div id="map"></div>
 
<script>
    $(document).ready(function(){
        $.each(document.querySelectorAll('input'), function(index, value){
            $(this).addClass('browser-default');
            
        } )
        getUrlVars();

    })

    function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    console.log("yeah",  vars);
}
    
mapboxgl.accessToken = 'pk.eyJ1IjoiYWxpc2hhcHVudyIsImEiOiJjazdlYzN6eTMwN3E1M2Rtcmhhd3ljM2pyIn0.FwneuZTJwLwr_d7jvyz9aA';
        var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [72.877, 19.07],
        zoom: 13
        });
        
        map.addControl(
        new MapboxDirections({
        accessToken: mapboxgl.accessToken
        }),
        'top-left'
        );
</script>

<!-- 



<div> Map is below</div>

<div id='map' style='width: 80vw; height: 90vh;'></div>


<div> Tracking is below</div>

<div id='track' style='width: 80vw; height: 90vh;'></div>


   
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoiYWxpc2hhcHVudyIsImEiOiJjazdlYzN6eTMwN3E1M2Rtcmhhd3ljM2pyIn0.FwneuZTJwLwr_d7jvyz9aA';
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11',
center: [-122.486052, 37.830348],
zoom: 15
});
 
map.on('load', function() {
map.addSource('route', {
'type': 'geojson',
'data': {
'type': 'Feature',
'properties': {},
'geometry': {
'type': 'LineString',
'coordinates': [
[-122.48369693756104, 37.83381888486939],
[-122.48348236083984, 37.83317489144141],
[-122.48339653015138, 37.83270036637107],
[-122.48356819152832, 37.832056363179625],
[-122.48404026031496, 37.83114119107971],
[-122.48404026031496, 37.83049717427869],
[-122.48348236083984, 37.829920943955045],
[-122.48356819152832, 37.82954808664175],
[-122.48507022857666, 37.82944639795659],
[-122.48610019683838, 37.82880236636284],
[-122.48695850372314, 37.82931081282506],
[-122.48700141906738, 37.83080223556934],
[-122.48751640319824, 37.83168351665737],
[-122.48803138732912, 37.832158048267786],
[-122.48888969421387, 37.83297152392784],
[-122.48987674713133, 37.83263257682617],
[-122.49043464660643, 37.832937629287755],
[-122.49125003814696, 37.832429207817725],
[-122.49163627624512, 37.832564787218985],
[-122.49223709106445, 37.83337825839438],
[-122.49378204345702, 37.83368330777276]
]
}
}
});
map.addLayer({
'id': 'route',
'type': 'line',
'source': 'route',
'layout': {
'line-join': 'round',
'line-cap': 'round'
},
'paint': {
'line-color': '#888',
'line-width': 8
}
});
});
</script>

 
<script src="//d3js.org/d3.v3.min.js" charset="utf-8"></script>
<script>
var map2 = new mapboxgl.Map({
container: 'track',
style: 'mapbox://styles/mapbox/satellite-v9',
zoom: 0
});
 
map2.on('load', function() {
// We use D3 to fetch the JSON here so that we can parse and use it separately
// from GL JS's use in the added source. You can use any request method (library
// or otherwise) that you want.
d3.json(
'https://docs.mapbox.com/mapbox-gl-js/assets/hike.geojson',
function(err, data) {
if (err) throw err;
 
// save full coordinate list for later
var coordinates = data.features[0].geometry.coordinates;
 
// start by showing just the first coordinate
data.features[0].geometry.coordinates = [coordinates[0]];
 
// add it to the map
map2.addSource('trace', { type: 'geojson', data: data });
map2.addLayer({
'id': 'trace',
'type': 'line',
'source': 'trace',
'paint': {
'line-color': 'yellow',
'line-opacity': 0.75,
'line-width': 5
}
});
 
// setup the viewport
map2.jumpTo({ 'center': coordinates[0], 'zoom': 14 });
map2.setPitch(30);
 
// on a regular basis, add more coordinates from the saved list and update the map
var i = 0;
var timer = window.setInterval(function() {
if (i < coordinates.length) {
data.features[0].geometry.coordinates.push(
coordinates[i]
);
map2.getSource('trace').setData(data);
map2.panTo(coordinates[i]);
i++;
} else {
window.clearInterval(timer);
}
}, 10);
}
);
});
</script> -->
 

@endsection