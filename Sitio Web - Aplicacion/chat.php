<?php require_once 'includes/session.php'; ?>

<?php include 'includes/header.php'; ?>

<?php include 'includes/navbar.php'; ?>

<body class="chat-page">

<!-- SUGERENCIAS -->

<div class="chat-suggestions">

    <button class="suggestion-btn"
        onclick="usarSugerencia('Crea una rutina de estudio para ingeniería')">
        📚 Rutina de estudio
    </button>

    <button class="suggestion-btn"
        onclick="usarSugerencia('Crea una rutina de gimnasio para principiantes')">
        🏋️ Rutina gym
    </button>

    <button class="suggestion-btn"
        onclick="usarSugerencia('Ayúdame a organizar mi día')">
        ⏰ Organización diaria
    </button>

    <button class="suggestion-btn"
        onclick="usarSugerencia('Consejos para dormir mejor')">
        😴 Mejorar sueño
    </button>
</div>

<!-- CHAT -->

<div class="chat-container" id="chat">

    <div class="chat-message chat-bot">
        👋 Hola, soy Planify IA. 
        Puedo ayudarte a crear rutinas personalizadas de estudio, ejercicio y productividad.
    </div>

</div>

<!-- INPUT -->

<div class="chat-input-area">

    <div class="chat-form">

        <input
            class="chat-input"
            type="text"
            id="input"
            placeholder="Escribe tu mensaje..."
        >

        <button class="chat-button" onclick="enviar()">
            Enviar
        </button>

    </div>

</div>

<script>

const chat = document.getElementById("chat");

/* =========================
   LOCAL STORAGE
========================= */

window.onload = () => {

    const historial = localStorage.getItem("chat_planify");

    if(historial){

        chat.innerHTML = historial;

        chat.scrollTop = chat.scrollHeight;
    }
};

/* =========================
   GUARDAR CHAT
========================= */

function guardarChat(){

    localStorage.setItem(
        "chat_planify",
        chat.innerHTML
    );
}

/* =========================
   SUGERENCIAS
========================= */

function usarSugerencia(texto){

    document.getElementById("input").value = texto;
}

/* =========================
   ENVIAR MENSAJE
========================= */

async function enviar(){

    const input = document.getElementById("input");

    const mensaje = input.value.trim();

    if(!mensaje) return;

    /* USER */

    chat.innerHTML += `
    
        <div class="chat-message chat-user">
            ${mensaje}
        </div>
    
    `;

    input.value = "";

    chat.scrollTop = chat.scrollHeight;

    guardarChat();

    /* LOADING */

    const loading = document.createElement("div");

    loading.className =
        "chat-message chat-bot";

    loading.innerHTML =
        "⏳ Pensando...";

    chat.appendChild(loading);

    chat.scrollTop = chat.scrollHeight;

    try{

        const res = await fetch("https://planify-api-0f9z.onrender.com/api.php", {

            method: "POST",

            headers: {
                "Content-Type": "application/json"
            },

            body: JSON.stringify({
                mensaje
            })

        });

        const data = await res.json();

        loading.remove();

        chat.innerHTML += `
        
            <div class="chat-message chat-bot">
                ${data.respuesta}
            </div>
        
        `;

        guardarChat();

        chat.scrollTop = chat.scrollHeight;

    }catch(error){

        loading.remove();

        chat.innerHTML += `
        
            <div class="chat-message chat-bot">
                ❌ Error al conectar con la IA.
            </div>
        
        `;

        guardarChat();
    }
}

/* =========================
   ENTER
========================= */

document.getElementById("input")
.addEventListener("keypress", function(e){

    if(e.key === "Enter"){

        enviar();
    }
});

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php include 'includes/footer.php'; ?>

<?php include 'includes/floating.php'; ?>

</html>
