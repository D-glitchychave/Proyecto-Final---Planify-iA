<?php include 'includes/header.php'; ?>

<?php include 'includes/navbar.php'; ?>

<section class="location-section">
    <div class="container">
        <div class="row g-4 align-items-center">

            <!-- MAPA -->
            <div class="col-lg-7">
                <div class="map-card">
                    <div id="map"></div>
                </div>
            </div>

            <!-- INFO -->
            <div class="col-lg-5">
                <div class="info-card">
                    <h1>📍 Nuestra Ubicación</h1>
                    <p>Planify iA se encuentra en Ciudad Juárez, Chihuahua, México.</p>
                    <div class="location-info">
                        <p>
                            <i class="fas fa-map-marker-alt"></i>
                            Jose Maria Arteaga #1028 Norte,
                            Ciudad Juárez, Chihuahua, MX
                        </p>
                        <p>
                            <i class="fas fa-phone"></i>
                            +52 (656) 381-5069
                        </p>
                        <p>
                            <i class="fas fa-clock"></i>
                            Lunes a Viernes · 9:00 A.M. - 6:00 P.M.
                        </p>
                    </div>
                    <a href="https://maps.google.com/?q=31.6904,-106.4245" target="_blank" class="btn-location">
                        Abrir en Google Maps
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- LEAFLET -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>
    // Coordenadas
    const lat = 31.74160;
    const lng = -106.49063;

    // Crear mapa
    const map = L.map('map').setView([lat, lng], 15);

    // Mapa base
    L.tileLayer(
        'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
        {
            attribution: '&copy; OpenStreetMap'
        }
    ).addTo(map);

    // Marcador
    L.marker([lat, lng])
        .addTo(map)
        .bindPopup('📍 Planify iA')
        .openPopup();
</script>
</body>

<?php include 'includes/footer.php'; ?>

<?php include 'includes/floating.php'; ?>

</html>
