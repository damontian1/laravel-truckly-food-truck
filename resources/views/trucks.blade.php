@extends('layouts.app')

@section('content')
<div class="container py-3">

  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center" style="font-size: 3em;">Our Food Truck Locations</h1>
    </div>
  </div>
	<div class="row" style="display: flex;justify-content: center;">
		<div class="col-md-12" id="map">
      <h2 class="text-center" style="line-height: 500px; color: white" >Map Loading...</h2>
		</div>
	</div>

  <section id="truck-options">
      <div class="row">
        <div class="col-md-12 text-center">
          <h4 style="color: white;padding: 1em;">Get Directions from your current location to:</h4>
          <div>
              <a href="https://www.google.com/maps/dir/40.725540,-73.983865/40.711308,-74.005056" class="btn btn-primary" style="width: auto; margin: 0.3em 0em" target="_blank">
                <i class="fa fa-truck" aria-hidden="true"></i>
                Truck 1
              </a>
              <a href="https://www.google.com/maps/dir/40.725540,-73.983865/40.741788,-73.816785" class="btn btn-primary" style="width: auto; margin: 0.3em 0em" target="_blank">
                <i class="fa fa-truck" aria-hidden="true"></i>
                Truck 2
              </a>
              <a href="https://www.google.com/maps/dir/40.725540,-73.983865/40.682194,-73.973683" class="btn btn-primary" style="width: auto; margin: 0.3em 0em" target="_blank">
                <i class="fa fa-truck" aria-hidden="true"></i>
                Truck 3
              </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
            <h4 style="color: white;padding: 1em;">Congratulations, You qualify for drone delivery from Truck 1</h4>
            <a href="/foods" class="btn btn-primary">
                <i class="fa fa-credit-card" aria-hidden="true"></i> Place Drone Delivery!
            </a>
        </div>
      </div>
  </section>

</div>


<script>
    function success(lat = 40.725540, lng = -73.983865){

        var truckLoc = [
            ['Fidi',40.711308, -74.005056],
            ['Flushing',40.741788, -73.816785],
            ['Barclays Center', 40.682194, -73.973683]
        ];
        var user_lat = document.getElementById("user_latitude");
        var user_lng = document.getElementById("user_longitude");
        var myLatLng = new google.maps.LatLng(lat,lng);
        mapContainer = document.getElementById('map');
        var mapOptions = {
            zoom: 11,
            center: myLatLng,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(mapContainer,mapOptions);

        var userMarker = new google.maps.Marker({
            position: myLatLng
        });
        userMarker.setVisible(false);
        userMarker.setMap(map);
        var inRange = new google.maps.InfoWindow({
            content:"Congratulations, your location qualifies for delivery.",
            pixelOffset: new google.maps.Size(0,-10)
        });
        var notInRange = new google.maps.InfoWindow({
            content:"Sorry, your location doesn't qualify for delivery.",
            pixelOffset: new google.maps.Size(0,0)
            });
        userMarker.setMap(map);
        var icon = [
            {
                url: '/assets/gmaps_icon1.png',
                scaledSize: new google.maps.Size(35,30),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(20, 15)
            },
            {
                url: '/assets/gmaps_icon2.png',
                scaledSize: new google.maps.Size(35,30),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(20, 15)
            },
            {
                url: '/assets/gmaps_icon3.png',
                scaledSize: new google.maps.Size(35,30),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(20, 15)
            }
        ];

        // this sets markers for each truck
        for (i = 0; i < truckLoc.length; i++){
            for(i = 0; i < truckLoc.length; i++){
                var truckOneMarker = new google.maps.Marker({
                    position: ({lat:truckLoc[i][1],lng:truckLoc[i][2]}),
                    icon: icon[i],
                    circle: new google.maps.Circle({
                    center: ({lat: truckLoc[i][1],lng: truckLoc[i][2]}),
                    radius: 2000,
                    strokeColor: "#5533FF",
                    strokeOpacity: 0.6,
                    strokeWeight: 1,
                    fillColor: "#3ecf8e",
                    fillOpacity: 0.5,
                    map: map
                    })
                });
                truckOneMarker.setMap(map);
            }
        }
    }
    success();
</script>
@endsection

