<html>
<head>
    <title>Halaman Home</title>
</head>
<body>
    <?php
    session_start();
    if($_SESSION['status'] == 'login') {
        echo "Selamat datang " . $_SESSION['username'];
    ?>
        <br><a href="sessionLogout.php">Logout</a>
    <?php
    } else {
        echo "Anda belum login, silahkan";
    ?>
        <a href="sessionLoginForm.html">Login</a>
    <?php
    }
    ?>
</body>
</html>
