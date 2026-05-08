<?php include 'includes/header.php'; ?>

<?php include 'includes/navbar.php'; ?>

<!-- LOGIN -->
<section class="login-section">
    <div class="login-box text-center">
        <h1>Planify iA</h1>
        <h2 class="mb-3">Bienvenido</h2>
        <form action="guardar.php" method="POST">
            <input type="text" name="usuario" placeholder="Usuario..." required>
            <input type="password" name="password" placeholder="Contraseña..." required>
            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php include 'includes/footer.php'; ?>

<?php include 'includes/floating.php'; ?>

</html>
