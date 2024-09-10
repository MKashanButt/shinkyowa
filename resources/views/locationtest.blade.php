<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaflet Location Map</title>
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
        // Initialize the map
        var map = L.map('map').setView([{{ $location['latitude'] }}, {{ $location['longitude'] }}], 13);

        // Load the map tiles from OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Add a marker at the specified location
        L.marker([{{ $location['latitude'] }}, {{ $location['longitude'] }}]).addTo(map)
            .bindPopup('Location: {{ $location['cityName'] }}, {{ $location['countryName'] }}')
            .openPopup();
    </script>
</body>

</html>
