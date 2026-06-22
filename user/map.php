<!DOCTYPE html>
<html>
<head>
    <title>Live Bus Tracking</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <style>
        #map {
            height: 800px;
            width: 100%;
        }
    </style>
</head>

<body>

<h2>Live Bus Tracking</h2>

<div id="map"></div>

<script>
    // Initialize map
    let map = L.map('map').setView([12.9716, 77.5946], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Bus marker
    let marker = L.marker([12.9716, 77.5946]).addTo(map);

    // Route path storage
    let route = [];
    let polyline = L.polyline(route, { color: 'blue' }).addTo(map);

    let lastLat = null;
    let lastLng = null;

    // Smooth movement function
    function animateMarker(fromLat, fromLng, toLat, toLng, duration = 1000) {
        let start = null;

        function step(timestamp) {
            if (!start) start = timestamp;
            let progress = timestamp - start;
            let ratio = Math.min(progress / duration, 1);

            let lat = fromLat + (toLat - fromLat) * ratio;
            let lng = fromLng + (toLng - fromLng) * ratio;

            marker.setLatLng([lat, lng]);

            if (ratio < 1) {
                requestAnimationFrame(step);
            }
        }

        requestAnimationFrame(step);
    }

    function updateLocation() {
        fetch('get_location.php')
        .then(res => res.json())
        .then(data => {

            let lat = parseFloat(data.latitude);
            let lng = parseFloat(data.longitude);

            // first time load
            if (lastLat === null) {
                lastLat = lat;
                lastLng = lng;
                marker.setLatLng([lat, lng]);
                map.setView([lat, lng]);
                route.push([lat, lng]);
                polyline.setLatLngs(route);
                return;
            }

            // animate movement
            animateMarker(lastLat, lastLng, lat, lng, 1200);

            // update route trail
            route.push([lat, lng]);
            polyline.setLatLngs(route);

            // update last position
            lastLat = lat;
            lastLng = lng;
        });
    }

    // initial load
    updateLocation();

    // refresh every 2 seconds
    setInterval(updateLocation, 2000);

</script>

</body>
</html>