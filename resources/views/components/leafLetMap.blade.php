<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<!-- Create Leaflet Map Component -->
<!-- resources/views/components/leaflet-map.blade.php -->
<div class="w-full h-[400px] rounded-lg overflow-hidden">
    <div id="map" class="w-full h-full"></div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const map = L.map('map').setView([5.6037, -0.1870], 15); // East Legon coordinates

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    const marker = L.marker([5.6037, -0.1870]).addTo(map);
    marker.bindPopup("<b>Our Location</b><br>East Legon, Accra").openPopup();
});
</script>