(function () {
    emailjs.init("5JSyn1JR1UovUZZpm");
})();

const btn = document.getElementById('button');

document.getElementById('contact-form')
.addEventListener('submit', function (event) {

    event.preventDefault();

    btn.innerText = 'Enviando...';

    emailjs.sendForm('service_5uhmgc7', 'template_a9gfgda', this)
    .then(() => {
        btn.innerText = 'Enviar';
        alert('✅ Mensaje enviado correctamente');
        this.reset();
    })
    .catch((error) => {
        btn.innerText = 'Enviar';
        console.error(error);
        alert('❌ Error al enviar');
    });

});