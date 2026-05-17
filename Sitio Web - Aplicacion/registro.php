<?php include 'includes/header.php'; ?>

<?php include 'includes/navbar.php'; ?>

<!-- FORM -->
<section class="register-section">
    <div class="register-box text-center">
        <h1>- Planify iA -</h1>
        <h2><u>Crear Cuenta</u></h2>
        <form action="auth/registro_process.php" method="POST">
            <input class="register-input" type="text" name="nombre" placeholder="Nombre..." required>
            <input class="register-input" type="text" name="usuario" placeholder="Usuario..." required>
            <input class="register-input" type="text" name="correo" placeholder="Correo..." required>
            <input class="register-input" type="password" name="password" placeholder="Contraseña..." required>
            <button class="register-button" type="submit">Registrarse</button>
        </form>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php include 'includes/footer.php'; ?>

<?php include 'includes/floating.php'; ?>

</html>
