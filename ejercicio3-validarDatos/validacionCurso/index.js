const form = document.querySelector('.form');
const nombre = document.querySelector('.form__input--nombre');
const password = document.querySelector('.form__input--password');
const btn = document.querySelector('.form__input--btn');

btn.addEventListener('click', () => {
    let verificar = true;
    if (nombre.value.length < 8) {
        alert("El nombre debe contener mínimo 8 letras");
        nombre.focus();
        verificar = false;
    } else if (nombre.value.length >= 8) verificar = true

    if (password.value.length < 8) {
        alert("La contraseña debe contener mínimo 8 letras");
        password.focus();
        verificar = false;
    } else if (nombre.value.length >= 8) verificar = true

    if (verificar) {
        form.submit();
    }
})




