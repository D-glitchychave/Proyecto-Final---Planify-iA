<?php require_once 'includes/session.php'; ?>

<?php include 'includes/header.php'; ?>

<?php include 'includes/navbar.php'; ?>

<h1>Bienvenido <?php echo $_SESSION['usuario']; ?></h1>

<!-- SIDEBAR -->
<div class="dashboard-sidebar">
    <h2>🤖 Planify</h2>
    <a class="sidebar-item" href="#">🏠 Inicio</a>
    <a class="sidebar-item" href="chat.html">💬 Chat IA</a>
    <a class="sidebar-item" href="#">📅 Mis rutinas</a>
    <a class="sidebar-item" href="#">⚙ Configuración</a>
    <a class="sidebar-item" href="auth/logout.php">🚪 Cerrar sesión</a>
</div>

<!-- CONTENIDO -->
<div class="dashboard-main">
    <h1>Bienvenido 👋</h1>
    <p>Organiza tu día con inteligencia artificial</p>
    <div class="row">
        <div class="col-md-4">
            <div class="dashboard-card-custom">
                <h5>💬 Chat IA</h5>
                <p>Genera rutinas personalizadas</p>
                <a href="chat.html" class="btn btn-custom">Ir</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="dashboard-card-custom">
                <h5>📅 Rutinas</h5>
                <p>Consulta tus rutinas guardadas</p>
                <button class="btn btn-custom">Ver</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="dashboard-card-custom">
                <h5>⚡ Progreso</h5>
                <p>Visualiza tu avance</p>
                <button class="btn btn-custom">Ver</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php include 'includes/footer.php'; ?>

<?php include 'includes/floating.php'; ?>

</html>
