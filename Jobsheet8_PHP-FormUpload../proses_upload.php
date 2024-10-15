<?php
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "images/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if (isset($_FILES['files']['name'][0])) {
    $totalFiles = count($_FILES['files']['name']);
    $allowedTypes = array('jpg', 'jpeg', 'png', 'gif'); // Ekstensi file yang diizinkan

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); // Dapatkan ekstensi file
        $targetFile = $targetDirectory . $fileName;

        // Validasi tipe file
        if (in_array(strtolower($fileType), $allowedTypes)) {
            // Pindahkan file yang diunggah ke direktori penyimpanan
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                echo "File gambar $fileName berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah file gambar $fileName.<br>";
            }
        } else {
            echo "File $fileName bukan tipe gambar yang diizinkan.<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
