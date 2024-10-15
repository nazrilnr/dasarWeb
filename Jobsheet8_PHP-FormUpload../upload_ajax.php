<?php
// Set the target directory for uploaded images
$targetDirectory = "images/";

// Create the target directory if it doesn't exist
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// Allowed image file extensions
$allowedExtensions = array("jpg", "jpeg", "png", "gif");

// Initialize an array to hold responses
$response = array();

// Check if files were uploaded
if (isset($_FILES['files']['name'][0])) {
    $totalFiles = count($_FILES['files']['name']);

    // Loop through each uploaded file
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . basename($fileName);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Validate file type
        if (in_array($fileType, $allowedExtensions)) {
            if ($_FILES['files']['size'][$i] <= 5 * 1024 * 1024) {
                if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                    $response[] = "<div style='margin:10px; display:inline-block;'>
                                    <img src='{$targetFile}' width='200' alt='{$fileName}' />
                                  </div>";
                } else {
                    $response[] = "<p>Gagal mengunggah file <strong>{$fileName}</strong>.</p>";
                }
            } else {
                $response[] = "<p>File <strong>{$fileName}</strong> melebihi ukuran maksimum yang diizinkan (5MB).</p>";
            }
        } else {
            $response[] = "<p>File <strong>{$fileName}</strong> bukan gambar yang valid.</p>";
        }
    }

    echo implode("", $response);
} else {
    echo "<p>Tidak ada file yang diunggah.</p>";
}
?>
