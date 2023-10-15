// show \ hide password
function togglePasswordVisibility(passwordFieldId) {
    const passwordInput = document.getElementById(passwordFieldId);
    const eyeIcon = passwordInput.nextElementSibling.querySelector('i');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        eyeIcon.classList.add('fa-eye');
        eyeIcon.classList.remove('fa-eye-slash');
    }
}

document.addEventListener("DOMContentLoaded", () => {

    // add mask to phone fields
    const phoneInputs = document.querySelectorAll('.phone_field');
    phoneInputs.forEach(function(phoneInput) {
        Inputmask("+7 (999) 999-99-99").mask(phoneInput);
    });


});
