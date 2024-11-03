<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Tambah Data Anggota</h2>
    <form action="proses.php?aksi=tambah" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <div class="radio-group">
            <input type="radio" name="jenis_kelamin" value="L" id="laki" required>
            <label for="laki">Laki-Laki</label>
            <input type="radio" name="jenis_kelamin" value="P" id="perempuan" required>
            <label for="perempuan">Perempuan</label>
        </div>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" required>

        <label for="no_telp">No. Telp:</label>
        <input type="text" name="no_telp" required>

        <button type="submit">Simpan Data</button>
        <a href="index.php" class="btn-kembali">Kembali</a>
    </form>
</div>
</body>
</html>
