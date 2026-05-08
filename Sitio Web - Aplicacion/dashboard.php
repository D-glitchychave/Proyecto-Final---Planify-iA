<?php include 'includes/header.php'; ?>

<?php include 'includes/navbar.php'; ?>

<!-- SIDEBAR -->
<div class="sidebar">
    <h2>🤖 Planify</h2>
    <a href="#">🏠 Inicio</a>
    <a href="chat.html">💬 Chat IA</a>
    <a href="#">📅 Mis rutinas</a>
    <a href="#">⚙ Configuración</a>
    <a href="logout.php">🚪 Cerrar sesión</a>
</div>

<!-- CONTENIDO -->
<div class="main">
    <h1>Bienvenido 👋</h1>
    <p>Organiza tu día con inteligencia artificial</p>
    <div class="row">
        <div class="col-md-4">
            <div class="card-custom">
                <h5>💬 Chat IA</h5>
                <p>Genera rutinas personalizadas</p>
                <a href="chat.html" class="btn btn-custom">Ir</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-custom">
                <h5>📅 Rutinas</h5>
                <p>Consulta tus rutinas guardadas</p>
                <button class="btn btn-custom">Ver</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-custom">
                <h5>⚡ Progreso</h5>
                <p>Visualiza tu avance</p>
                <button class="btn btn-custom">Ver</button>
            </div>
        </div>
    </div>
</div>
</body>

<?php include 'includes/footer.php'; ?>

<?php include 'includes/floating.php'; ?>

</html>
