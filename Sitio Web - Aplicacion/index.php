<?php include 'includes/header.php'; ?>

<?php include 'includes/navbar.php'; ?>

<!-- HERO -->
<section class="hero-slider">
    <!-- CARRUSEL -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="https://images.pexels.com/photos/8566526/pexels-photo-8566526.jpeg">
                <div class="overlay">
                    <h1>- Planify iA -</h1>
                    <p>Organiza tu vida académica y personal con ayuda de inteligencia artificial.</p>
                    <a href="login.php" class="btn btn-light px-4 py-2">Iniciar Sesión</a>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="https://images.pexels.com/photos/19915766/pexels-photo-19915766.jpeg">
                <div class="overlay">
                    <h1>Rutinas Inteligentes</h1>
                    <p>Genera planes personalizados de estudio, gym y productividad.</p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="https://images.pexels.com/photos/7668396/pexels-photo-7668396.jpeg">
                <div class="overlay">
                    <h1>Tu Asistente iA</h1>
                    <p>La inteligencia artificial se adapta a tus horarios y metas.</p>
                </div>
            </div>
        </div>

        <!-- BOTONES -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- PAGINACIÓN -->
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- SERVICIOS -->
<section class="container mt-5 mb-5">
    <h2 class="text-center text mb-4">¿Qué puedes hacer?</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="home-card shadow text-center p-3">
                <h5>📚</h5>
                <h5>Rutina de Estudio</h5>
                <p>Crea planes personalizados para mejorar tu rendimiento académico.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="home-card shadow text-center p-3">
                <h5>🏋️</h5>
                <h5>Rutina de Ejercicio</h5>
                <p>Organiza tu entrenamiento de acuerdo a tu tiempo y objetivos.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="home-card shadow text-center p-3">
                <h5>🤖</h5>
                <h5>iA Inteligente</h5>
                <p>Obtén recomendaciones automáticas adaptadas a tu estilo de vida diaria por parte de la iA.</p>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="assets/js/carrusel.js"></script>
</body>

<?php include 'includes/footer.php'; ?>

<?php include 'includes/floating.php'; ?>

</html>
