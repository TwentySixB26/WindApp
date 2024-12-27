// remove alert
let btnError = document.querySelector('#btn-Error') ;
let alertGagal = document.querySelector('#alertGagal') ;

btnError.addEventListener("click", () => {
        alertGagal.classList.add("invisible");
});
// akhir remove alert




// show password
let showPassword = document.querySelectorAll('.showPassword')
let inputsPassword = document.querySelectorAll('.inputPassword')


showPassword.forEach(function(button, index) {
    button.addEventListener('click', function() {
        let inputPassword = inputsPassword[index]; // Ambil input terkait berdasarkan indeks

        if (inputPassword.type === 'password') {
            button.classList.toggle('fa-lock');
            button.classList.toggle('fa-lock-open');
            inputPassword.type = 'text'; // Ubah menjadi teks
        } else {
            button.classList.toggle('fa-lock');
            button.classList.toggle('fa-lock-open');
            inputPassword.type = 'password'; // Kembalikan ke password
        }
    });
});
// akhir show password
