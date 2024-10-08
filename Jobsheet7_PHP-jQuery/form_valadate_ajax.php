<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<h1>Form Input dengan AJAX</h1>
<form id="myForm" method="post" action="proses_validasi1.php">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">
    <span id="nama-error" style="color: red;"></span><br>
    
    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <span id="email-error" style="color: red;"></span><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <span id="password-error" style="color: red;"></span><br>
    
    <input type="submit" value="Submit">
</form>
<div id="hasil"></div>

<script>
$(document).ready(function() {
    $("#myForm").submit(function(event) {
        event.preventDefault(); // Prevent default form submission

        var formData = $(this).serialize(); // Serialize form data
        var valid = true;

        // Reset error messages
        $("#nama-error").text("");
        $("#email-error").text("");
        $("#password-error").text("");

        // Validasi Nama
        if ($("#nama").val() === "") {
            $("#nama-error").text("Nama harus diisi.");
            valid = false;
        }

        // Validasi Email
        if ($("#email").val() === "") {
            $("#email-error").text("Email harus diisi.");
            valid = false;
        } else {
            if (!filter_var($("#email").val(), FILTER_VALIDATE_EMAIL)) {
                $("#email-error").text("Format email tidak valid.");
                valid = false;
            }
        }

        // Validasi Password
        if ($("#password").val().length < 8) {
            $("#password-error").text("Password harus terdiri dari minimal 8 karakter.");
            valid = false;
        }

        // If all validations pass, proceed with AJAX submission
        if (valid) {
            $.ajax({
                type: "POST",
                url: "proses_validasi.php", // PHP file that processes the data
                data: formData,
                success: function(response) {
                    // Display response from the PHP file
                    $("#hasil").html(response);
                },
                error: function() {
                    $("#hasil").html("<p style='color: red;'>Terjadi kesalahan dalam pengiriman data.</p>");
                }
            });
        }
    });
});
</script>
</body>
</html>
