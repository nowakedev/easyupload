document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('uploadForm');
    var uploadBtn = document.getElementById('uploadBtn');
    var uploadStatus = document.getElementById('uploadStatus');

    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent default form submission

        var fileURL = document.getElementById('file_url').value;

        // Show uploading message
        uploadStatus.textContent = 'Uploading file...';

        // Send AJAX request to upload.php
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "upload.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    uploadStatus.textContent = xhr.responseText; // Display upload status message
                } else {
                    uploadStatus.textContent = 'Error uploading file.';
                }
            }
        };

        xhr.send("file_url=" + encodeURIComponent(fileURL));
    });
});
