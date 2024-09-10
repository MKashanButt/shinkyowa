<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location Map</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>

<body>
    <h3>Location Map</h3>
    <div id="map"></div>

    <script>
        // Initialize the map using the latitude and longitude from the backend
        var map = L.map('map').setView([{{ $latitude }}, {{ $longitude }}], 13);

        // Load the map tiles from OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Add a marker with a popup
        L.marker([{{ $latitude }}, {{ $longitude }}]).addTo(map)
            .bindPopup('Location: {{ $city }}, {{ $country }}')
            .openPopup();
    </script>
</body>

</html>
