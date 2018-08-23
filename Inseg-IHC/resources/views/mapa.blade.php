@extends('layouts.app')

@section('content')
<div class="container">
  <div id="floating-panel">
    <button onclick="toggleHeatmap()">Activar Heatmap</button>
    <button onclick="changeGradient()">Cambiar gradiente</button>
    <button onclick="changeRadius()">Cambiar radio</button>
    <button onclick="changeOpacity()">Cambiar opacidad</button>
  </div>

  <div id="map" style="  height: 800px; width: 100%;"></div>


  <div id="infowindow-content">
    <span id="place-name"  class="title"></span><br>
    <span id="place-id"></span><br>
    <span id="place-address"></span>
  </div>

</div>
<script>
  var latitud = -16.4063615;
  var longitud = -71.5246413;

  var LatLng = {lat: latitud, lng: longitud};


  var map, heatmap;

  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: LatLng,
      zoom: 19
    });
    var secretMessages = "secret message";
    var infowindow = new google.maps.InfoWindow();

    var marker = new google.maps.Marker({
      position: LatLng,
      map: map
    });

    heatmap = new google.maps.visualization.HeatmapLayer({
      data: getPoints(),
      map: map,
      radius: 25
    });
  }

    function toggleHeatmap() {
      heatmap.setMap(heatmap.getMap() ? null : map);
    }

    function changeGradient() {
      var gradient = [
        'rgba(0, 255, 255, 0)',
        'rgba(0, 255, 255, 1)',
        'rgba(0, 191, 255, 1)',
        'rgba(0, 127, 255, 1)',
        'rgba(0, 63, 255, 1)',
        'rgba(0, 0, 255, 1)',
        'rgba(0, 0, 223, 1)',
        'rgba(0, 0, 191, 1)',
        'rgba(0, 0, 159, 1)',
        'rgba(0, 0, 127, 1)',
        'rgba(63, 0, 91, 1)',
        'rgba(127, 0, 63, 1)',
        'rgba(191, 0, 31, 1)',
        'rgba(255, 0, 0, 1)'
      ]
      heatmap.set('gradient', heatmap.get('gradient') ? null : gradient);
    }

    function changeRadius() {
      heatmap.set('radius', heatmap.get('radius') ? null : 25);
    }

    function changeOpacity() {
      heatmap.set('opacity', heatmap.get('opacity') ? null : 0.2);
    }

    // Heatmap data: 500 Points
    function getPoints() {
      return [
        new google.maps.LatLng(-16.40562, -71.52612),
        new google.maps.LatLng(-16.4059, -71.5258),
        new google.maps.LatLng(-16.40563, -71.5261),
        new google.maps.LatLng(-16.40563, -71.52607),
        new google.maps.LatLng(-16.40564, -71.52607),
        new google.maps.LatLng(-16.40564, -71.52607),
        new google.maps.LatLng(-16.40565, -71.52606),
        new google.maps.LatLng(-16.40565, -71.52606),
        new google.maps.LatLng(-16.40565, -71.52605),
        new google.maps.LatLng(-16.40566, -71.52605),
        new google.maps.LatLng(-16.40566, -71.52604),
        new google.maps.LatLng(-16.40567, -71.52604),
        new google.maps.LatLng(-16.40567, -71.52603),
        new google.maps.LatLng(-16.40568, -71.52603),

        new google.maps.LatLng( -16.40593, -71.52579),
        new google.maps.LatLng( -16.40592, -71.52581),
        // new google.maps.LatLng( -16.40593, -71.5258),
        new google.maps.LatLng( -16.40595, -71.52578),
        // new google.maps.LatLng( -16.40595, -71.52577),
        new google.maps.LatLng( -16.40596, -71.52577),
        // new google.maps.LatLng( -16.40597, -71.52576),

        new google.maps.LatLng(-16.40572, -71.52599),
        new google.maps.LatLng(-16.40571, -71.52599),
        new google.maps.LatLng(-16.4057, -71.526),
        new google.maps.LatLng(-16.4057, -71.52601),
        new google.maps.LatLng(-16.40567, -71.52603),

        new google.maps.LatLng(-16.4064950, -71.5246103),
        new google.maps.LatLng(-16.4064955, -71.5246293),
        new google.maps.LatLng(-16.4065060, -71.5246388),
        new google.maps.LatLng(-16.4065065, -71.5246483),
        new google.maps.LatLng(-16.406507, -71.5246578)
      ];
    }











</script>

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEUDWClhcBHlakaF_9bQIzvEP5XwI-OcE&libraries=places,visualization&callback=initMap">
</script>














@endsection
