<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB1', 'prakwebdbajax');

// Buat Koneksinya
$db1 = new mysqli(HOST, USER, PASS , DB1);

// Periksa Koneksi
if ($db1->connect_error) {
    die("Koneksi gagal: " . $db1->connect_error);
}
?>
