<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $allowed_extensions = array("jpg", "jpeg", "png", "gif"); // Allowed image types

    // Loop through all uploaded files
    for ($i = 0; $i < count($_FILES['files']['name']); $i++) {
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_ext = strtolower(end(explode('.', $_FILES['files']['name'][$i])));
        
        // Check if the file extension is allowed
        if (in_array($file_ext, $allowed_extensions) === false) {
            $errors[] = "$file_name memiliki ekstensi yang tidak diizinkan. Hanya JPG, JPEG, PNG, atau GIF yang diperbolehkan.";
        }

        // Check if the file size exceeds the limit
        if ($file_size > 2097152) { // 2MB size limit
            $errors[] = "$file_name melebihi ukuran maksimum 2MB.";
        }

        // If no errors, move the uploaded file
        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "images/" . $file_name);
            echo "File $file_name berhasil diunggah.<br>";
        }
    }

    // Display any errors
    if (!empty($errors)) {
        echo implode("<br>", $errors);
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
