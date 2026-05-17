<?php include 'includes/header.php'; ?>

<?php include 'includes/navbar.php'; ?>

<!-- LOGIN -->
<section class="login-section">
    <div class="login-box text-center">
        <h1>- Planify iA -</h1>
        <h2 class="mb-3"><u>Bienvenid@</u></h2>
        <form action="auth/login_process.php" method="POST">
            <input class="login-input" type="text" name="usuario" placeholder="Usuario..." required>
            <input class="login-input" type="password" name="password" placeholder="Contraseña..." required>
            <button class="login-button" type="submit">Iniciar Sesión</button>
        </form>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php include 'includes/footer.php'; ?>

<?php include 'includes/floating.php'; ?>

</html>
