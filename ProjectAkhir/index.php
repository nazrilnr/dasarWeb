<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestasi Polinema</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            height: 100%;
        }

        .left-section {
            background-color: #323484; /* Warna biru */
            color: white;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .left-section img {
            max-width: 70%;
            height: auto;
            margin-bottom: 20px;
        }

        .left-section h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .left-section p {
            font-size: 16px;
            text-align: center;
            line-height: 1.5;
        }

        .right-section {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .right-section img {
            max-width: 300px;
            height: auto;
            margin-bottom: 20px; 
        }

        .right-section h1 {
            font-size: 28px;
            color: #3A4DAE;
            margin-bottom: 10px;
        }

        .right-section p {
            font-size: 16px;
            text-align: center;
            margin-bottom: 20px;
            color: #555;
        }

        .form-group {
            width: 100%;
            max-width: 400px;
            margin-bottom: 15px;
        }

        .form-group label {
            font-size: 14px;
            margin-bottom: 5px;
            display: block;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-options {
            width: 100%;
            max-width: 400px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .form-options label {
            font-size: 14px;
        }

        .form-options a {
            font-size: 14px;
            color: #3A4DAE;
            text-decoration: none;
        }

        .form-options a:hover {
            text-decoration: underline;
        }

        button {
            background-color: #3A4DAE;
            color: white;
            border: none;
            width: 100%;
            max-width: 400px;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2A3B88;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-section">
            <img src="./image/woman.png" alt="Woman Illustration">
            <h1>Informasi Perlombaan</h1>
            <p>Jelajahi kreativitasmu sebagai mahasiswa dengan berbagai ajang perlombaan yang menarik.</p>
        </div>
        <div class="right-section">
            <h1>Selamat Datang!</h1>
            <img src="./image/polinema.png" alt="POLINEMA Logo">
            <p>Anda akan memasuki website resmi POLINEMA untuk pencatatan prestasi mahasiswa.</p>
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="username">Username (NIM)</label>
                    <input type="text" id="username" name="username" placeholder="Masukkan NIM Anda" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan password Anda" required>
                </div>
                <div class="form-options">
                    <label>
                        <input type="checkbox"> Remember me
                    </label>
                    <a href="#">Lupa password?</a>
                </div>
                <button type="submit">Sign In</button>
            </form>
        </div>
    </div>
</body>
</html>
