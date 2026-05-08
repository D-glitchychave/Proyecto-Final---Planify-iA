<?php include 'includes/header.php'; ?>

<?php include 'includes/navbar.php'; ?>

<div class="container">
    <form id="contact-form">
        <h1>- Planify -</h1>
        <h2>¿Problemas a sugerencias?</h2><br>
        <p>Envia un correo por si tienes alguna duda, problema o sugerencia.</p>
        <input type="text" id="user_name" name="name" placeholder="Nombre..." required>
        <input type="email" id="user_email" name="email" placeholder="Correo..." required>
        <select name="asunto">
            <option value="web">Problemas con el sitio web...</option>
            <option value="ia">Problema con la IA...</option>
            <option value="sugerencia">Dudas o sugerencias...</option>
        </select>
        <textarea name="message" placeholder="Mensaje..." required></textarea>
        <button type="submit" id="button">Enviar</button>
    </form>
</div>

<script src="assets/js/script.js"></script>
</body>

<?php include 'includes/footer.php'; ?>

<?php include 'includes/floating.php'; ?>

</html>
