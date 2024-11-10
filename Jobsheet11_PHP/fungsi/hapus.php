<?php
session_start();
if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';

    // Logika untuk menghapus data jabatan
    if (!empty($_GET['jabatan'])) {
        $id = antiinjection($koneksi, $_GET['id']);
        $query = "DELETE FROM jabatan WHERE id = '$id'";
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Terhapus.");
        } else {
            pesan('danger', "Jabatan Tidak Terhapus Karena: " . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=jabatan");
        exit(); // Menghentikan eksekusi setelah redirect
    }

    // Logika untuk menghapus data anggota
    elseif (!empty($_GET['anggota'])) {
        $id = antiinjection($koneksi, $_GET['id']);

        $query1 = "DELETE FROM anggota WHERE user_id = '$id'";
        if (mysqli_query($koneksi, $query1)) {
            $query2 = "DELETE FROM user WHERE id = '$id'";
            if (mysqli_query($koneksi, $query2)) {
                pesan('success', "Anggota dan data login telah terhapus.");
            } else {
                pesan('danger', "Gagal menghapus data user: " . mysqli_error($koneksi));
            }
        } else {
            pesan('danger', "Gagal menghapus data anggota: " . mysqli_error($koneksi));
        }
        
        header("Location: ../index.php?page=anggota");
        exit(); // Menghentikan eksekusi setelah redirect
    }
}
?>
