<?php include 'includes/header.php'; ?>

<?php include 'includes/navbar.php'; ?>

<div class="chat-container" id="chat"></div>

<div class="input-area text-center">
    <input type="text" id="input" placeholder="Escribe tu rutina...">
    <button onclick="enviar()">Enviar</button>
</div>

<script>
    async function enviar() {
        const input = document.getElementById("input");
        const chat = document.getElementById("chat");

        const mensaje = input.value;

        if (!mensaje) return;

        chat.innerHTML += `<div class="message user">${mensaje}</div>`;
        input.value = "";

        const res = await fetch("api.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({ mensaje })
        });

        const data = await res.json();

        chat.innerHTML += `<div class="message bot">${data.respuesta}</div>`;
        chat.scrollTop = chat.scrollHeight;
    }
</script>
</body>

<?php include 'includes/footer.php'; ?>

<?php include 'includes/floating.php'; ?>

</html>
