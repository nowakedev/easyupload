<?php
// Define script version
$scriptVersion = "1.0";
// Check if HTTPS is enabled, redirect to HTTPS if not
if ($_SERVER["HTTPS"] != "on") {
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}

// Define default upload directory
$uploadDirectory = __DIR__ . "/storage/";

// Define function to handle file upload
function handleFileUpload($fileURL, $uploadDirectory) {
    // Validate file URL
    if (!filter_var($fileURL, FILTER_VALIDATE_URL)) {
        return "Invalid file URL.";
    }

    // Define buffer size
    define('BUFSIZ', 4095);

    // Open remote file for reading
    $rfile = fopen($fileURL, 'r');
    if ($rfile === false) {
        return "Failed to open remote file for reading.";
    }

    // Open local file for writing
    $localFilePath = $uploadDirectory . basename($fileURL);
    $lfile = fopen($localFilePath, 'w');
    if ($lfile === false) {
        fclose($rfile);
        return "Failed to open local file for writing.";
    }

    // Download file from URL and save locally
    while (!feof($rfile)) {
        fwrite($lfile, fread($rfile, BUFSIZ), BUFSIZ);
    }

    // Close file handles
    fclose($rfile);
    fclose($lfile);

    return "File uploaded successfully.";
}

// Check if file URL is provided via POST request
if (isset($_POST['file_url'])) {
    $fileURL = $_POST['file_url'];
    $uploadStatus = handleFileUpload($fileURL, $uploadDirectory);
} else {
    $uploadStatus = "File URL not provided.";
}

echo $uploadStatus;
?>
