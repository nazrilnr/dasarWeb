$(document).ready(function() {
    // Enable or disable the upload button based on file input
    $('#file').change(function() {
        if (this.files.length > 0) {
            $('#upload-button').prop('disabled', false).css('opacity', 1);
        } else {
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);
        }
    });

    // Handle the form submission via AJAX
    $('#upload-form').submit(function(e) {
        e.preventDefault(); // Prevent the default form submission

        var formData = new FormData(this); // Create a FormData object with the form data

        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php', // The server-side script to handle the file upload
            data: formData, // Send the form data
            cache: false, // Disable cache
            contentType: false, // Set contentType to false to let jQuery handle it
            processData: false, // Prevent jQuery from processing the data (so the file can be sent as is)
            success: function(response) {
                $('#status').html(response); // Display the server's response in the status div
            },
            error: function() {
                $('#status').html('Terjadi kesalahan saat mengunggah file.'); // Display an error message in case of failure
            }
        });
    });
});
