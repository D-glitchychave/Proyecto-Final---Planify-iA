<?php include 'includes/header.php'; ?>

<?php include 'includes/navbar.php'; ?>

<!-- FORM -->
<section class="register-section">
    <div class="register-box text-center">
        <h2>Crear cuenta</h2>
        <form action="registro.php" method="POST">
            <input type="text" name="usuario" placeholder="Usuario..." required>
            <input type="text" name="correo" placeholder="Correo..." required>
            <input type="password" name="password" placeholder="Contraseña..." required>
            <button type="submit">Registrarse</button>
        </form>
    </div>
</section>
</body>

<?php include 'includes/footer.php'; ?>

<?php include 'includes/floating.php'; ?>

</html>
