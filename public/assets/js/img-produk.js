function setupUploadBox(boxId, inputId) {
    const uploadBox = document.getElementById(boxId);
    const uploadInput = document.getElementById(inputId);

    uploadBox.addEventListener('click', () => {
        uploadInput.click();
    });

    uploadInput.addEventListener('change', (event) => {
        const [file] = event.target.files;
        if (file) {
            const img = document.createElement('img');
            img.src = URL.createObjectURL(file);
            uploadBox.innerHTML = ''; // Hapus tanda plus
            uploadBox.appendChild(img); // Tampilkan gambar
            img.style.display = 'block';
        }
    });
}

// Setup untuk kotak besar dan kotak kecil
setupUploadBox('uploadBox', 'uploadGambar');
setupUploadBox('uploadBox1', 'uploadGambar1');
setupUploadBox('uploadBox2', 'uploadGambar2');
setupUploadBox('uploadBox3', 'uploadGambar3');
setupUploadBox('uploadBox4', 'uploadGambar4');
