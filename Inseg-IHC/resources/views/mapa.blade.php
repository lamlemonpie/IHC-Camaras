@extends('layouts.app')

@section('content')

<div id="map" style="  height: 250px; width: 100%;"></div>


<div id="infowindow-content">
  <span id="place-name"  class="title"></span><br>
  <span id="place-id"></span><br>
  <span id="place-address"></span>
</div>


      <script>
        var latitud = -16.4063615;
        var longitud = -71.5246413;

        var LatLng = {lat: latitud, lng: longitud};


        var map;
        function initMap() {
          map = new google.maps.Map(document.getElementById('map'), {
            center: LatLng,
            zoom: 14
          });
          var secretMessages = "secret message";
          var infowindow = new google.maps.InfoWindow();

          var marker = new google.maps.Marker({
            position: LatLng,
            map: map


          });












        }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEUDWClhcBHlakaF_9bQIzvEP5XwI-OcE&libraries=places&callback=initMap">
      </script>














@endsection
