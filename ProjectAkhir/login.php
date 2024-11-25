<?php
// Konfigurasi database
$host = 'localhost';
$dbname = 'polinema';
$dbuser = 'root';
$dbpass = ''; // Sesuaikan dengan password database Anda

try {
    // Koneksi ke database
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Ambil data dari form login
        $inputUsername = $_POST['username'];
        $inputPassword = $_POST['password'];

        // Query untuk memeriksa user
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $inputUsername);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && hash('sha256', $inputPassword) === $user['password']) {
            // Login berhasil
            echo "<h1>Login Berhasil. Selamat datang, $inputUsername!</h1>";
        } else {
            // Login gagal
            echo "<h1>Username atau Password Salah</h1>";
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
