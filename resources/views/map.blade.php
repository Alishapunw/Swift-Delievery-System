@extends('layout.app')
@section('content')
<div> Map is below</div>
<div id="map" style="height: 100vh;">

</div>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 40.8   , lng: -74.00916},
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
    //     if (navigator.geolocation) {
    //       navigator.geolocation.getCurrentPosition(function(position) {
    //         var pos = {
    //           lat: position.coords.latitude,
    //           lng: position.coords.longitude
    //         };

    //         infoWindow.setPosition(pos);
    //         infoWindow.setContent('Location found.');
    //         infoWindow.open(map);
    //         map.setCenter(pos);
    //       }, function() {
    //         handleLocationError(true, infoWindow, map.getCenter());
    //       });
    //     } else {
    //       // Browser doesn't support Geolocation
    //       handleLocationError(false, infoWindow, map.getCenter());
    //     }
    //   }

    //   function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    //     infoWindow.setPosition(pos);
    //     infoWindow.setContent(browserHasGeolocation ?
    //                           'Error: The Geolocation service failed.' :
    //                           'Error: Your browser doesn\'t support geolocation.');
    //     infoWindow.open(map);
    //   }






            //     {
            // origin: 'Chicago, IL',
            // destination: 'Los Angeles, CA',
            // waypoints: [
            //     {
            //     location: 'Joplin, MO',
            //     stopover: false
            //     },{
            //     location: 'Oklahoma City, OK',
            //     stopover: true
            //     }],
            // provideRouteAlternatives: false,
            // travelMode: 'DRIVING',
            // drivingOptions: {
            //     departureTime: new Date(/* now, or future date */),
            //     trafficModel: 'pessimistic'
            // },
            // unitSystem: google.maps.UnitSystem.IMPERIAL
            // }




            let autocomplete =  new google.maps.places.Autocomplete(DOM_NODE);
            autocomplete.bindTo('bounds', map);
            autocomplete.addListener('place_changed', () => {
                const place = autocomplete.getPlace();
            })
            const calcAndRender = (origin,destination ) =>{
                let directionsService = new google.maps.DirectionsService();
                let directionsDisplay = new google.maps.DirectionsRenderer();
                request = {
                    origin: 'Chicago, IL',
                    destination: 'Los Angeles, CA',
                    travelMode : 'BICYCLING'
                }
                directionsDisplay.setMap(map);
                directionsService.route(request, (result, status) => {
                    if(status=="OK"){
                        directionsDisplay.setDirections(result);
                    }
                })

            }


      }


    </script>
    <Script>
                    function initMap() {
            var directionsService = new google.maps.DirectionsService();
            var directionsRenderer = new google.maps.DirectionsRenderer();
            var chicago = new google.maps.LatLng(-40.850033, -47.6500523);
            var mapOptions = {
                zoom:7,
                center: chicago
            }
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);
            directionsRenderer.setMap(map);
            }

            function calcRoute() {
            var start = document.getElementById('start').value;
            var end = document.getElementById('end').value;
            start= "Mumbai, India";
            end ="Barstow, Ca"
            var request = {
                origin: start,
                destination: end,
                travelMode: 'DRIVING'
            };
            directionsService.route(request, function(result, status) {
                if (status == 'OK') {
                directionsRenderer.setDirections(result);
                }
            });
            }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJtdyuyI-9adclfF2l7YDtzHeoWBuEkvU&callback=initMap">
    </script>
@endsection