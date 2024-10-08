<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<h1>Form Input dengan Validasi</h1>
<form id="myForm" method="post" action="proses_validasi.php">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">
    <span id="nama-error" style="color: red;"></span><br>
    
    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <span id="email-error" style="color: red;"></span><br>
    
    <input type="submit" value="Submit">
</form>
<script>
$(document).ready(function() {
    $("#myForm").submit(function(event) {
        var nama = $("#nama").val();
        var email = $("#email").val();
        var valid = true;

        // Reset error messages
        $("#nama-error").text("");
        $("#email-error").text("");

        // Validasi Nama
        if (nama === "") {
            $("#nama-error").text("Nama harus diisi.");
            valid = false;
        }

        // Validasi Email
        if (email === "") {
            $("#email-error").text("Email harus diisi.");
            valid = false;
        } else {
            // Optional: You can add email format validation here
            if (!filter_var(email, FILTER_VALIDATE_EMAIL)) {
                $("#email-error").text("Format email tidak valid.");
                valid = false;
            }
        }
        
        // Menghentikan pengiriman form jika validasi gagal
        if (!valid) {
            event.preventDefault();
        }
    });
});
</script>
</body>
</html>
