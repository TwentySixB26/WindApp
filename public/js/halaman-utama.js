document.getElementById('img').addEventListener('change', function(event) {
    // Ambil file yang dipilih
    const file = event.target.files[0];

    // Ambil elemen dengan id 'nameFoto'
    const nameFotoElement = document.getElementById('nameFoto');

    // Jika ada file yang dipilih, ubah teksnya menjadi nama file
    if (file) {
        nameFotoElement.textContent = file.name;
    } else {
        nameFotoElement.textContent = "Tidak ada file yang dipilih";
    }
});
