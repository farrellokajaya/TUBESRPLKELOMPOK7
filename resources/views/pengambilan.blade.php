<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengambilan SIM</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style type="text/css">
        #map {
          height: 400px;
        }
    </style>
</head>
    
<body>
    <div class="container mt-5">
        <h2>Pengambilan SIM</h2>
        <div id="map"></div>
    </div>
  
    <script type="text/javascript">
        function initMap() {
          const myLatLng = { lat: -6.913849, lng: 107.610779 };
          const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 19,
            center: myLatLng,
          });

          new google.maps.Marker({
            position: myLatLng,
            map,
            title: "Pengambilan SIM",
          });
        }
  
        window.initMap = initMap;
    </script>

    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>
  
</body>
</html>