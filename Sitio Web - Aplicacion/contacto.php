<?php include 'includes/header.php'; ?>

<?php include 'includes/navbar.php'; ?>

<div class="contact-page">
    <div class="contact-container">
        <form id="contact-form">
            <h1>- Planify iA -</h1>
            <h2><u>¿Problemas o Sugerencias?</u></h2><br>
            <p>Envia un correo si es que tienes alguna duda, problema o sugerencia.</p>
            <input class="contact-input" type="text" id="user_name" name="name" placeholder="Nombre..." required>
            <input class="contact-input" type="email" id="user_email" name="email" placeholder="Correo..." required>
            <select class="contact-select" name="asunto">
                <option value="web">Problemas con el sitio web...</option>
                <option value="ia">Problema con la iA...</option>
                <option value="sugerencia">Dudas o sugerencias...</option>
                <option value="otro">Otra cosa...</option>
            </select>
            <textarea class="contact-textarea" name="message" placeholder="Mensaje..." required></textarea>
            <button class="contact-btn" type="submit" id="button">Enviar</button>
        </form>
    </div>
</div>

<script src="assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php include 'includes/footer.php'; ?>

<?php include 'includes/floating.php'; ?>

</html>
