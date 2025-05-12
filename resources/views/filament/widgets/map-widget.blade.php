<x-filament::widget>
    <x-filament::card class="p-0space-y-0">
        {{-- Import Leaflet CSS --}}
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

        {{-- Container untuk maps --}}
        <div id="map" style="height: 400px;" class="rounded-lg"></div>

        {{-- Import Leaflet JS --}}
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

        <script>
            // Inisialisasi map
            var map = L.map('map').setView([{{ $latitude }}, {{ $longitude }}], {{ $zoom }});
            
            // Tambahkan layer OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);
            
            // Tambahkan marker
            L.marker([{{ $latitude }}, {{ $longitude }}]).addTo(map);
        </script>
    </x-filament::card>
</x-filament::widget>