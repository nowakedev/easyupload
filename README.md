# easyupload
Remote Upload For Servers, Cpanel, Direct Admin and More.
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyUpload Documentation</title>
    <style>
        /* Add your custom documentation styles here */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 15px;
        }

        code {
            font-family: Consolas, monospace;
            font-size: 14px;
            background-color: #f4f4f4;
            padding: 5px 10px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <h1>EasyUpload Script Documentation</h1>

    <h2>Introduction</h2>
    <p>The EasyUpload script allows you to upload files from URLs directly to your server. It simplifies the process of
        file uploading by eliminating the need to download the file to your local system before uploading it.</p>

    <h2>Usage</h2>
    <p>To use the EasyUpload script, follow these steps:</p>
    <ol>
        <li>Download the script files from the provided source.</li>
        <li>Place the script files in your website's directory.</li>
        <li>Include the following HTML code in your webpage where you want to allow file uploads:</li>
    </ol>
    <code>&lt;form action="upload.php" method="post"&gt;<br>
    &nbsp;&nbsp;&lt;input type="text" name="file_url" required&gt;<br>
    &nbsp;&nbsp;&lt;button type="submit"&gt;Upload&lt;/button&gt;<br>
    &lt;/form&gt;</code>

    <h2>Customization</h2>
    <p>The EasyUpload script can be customized to fit your website's design and requirements:</p>
    <ul>
        <li><strong>Styling:</strong> Update the <code>styles/style.css</code> file to change the appearance of the
            upload form, progress bar, footer, etc.</li>
        <li><strong>Functionality:</strong> Update the <code>scripts/script.js</code> file to add or modify client-side
            functionality, such as form validation or progress bar animation.</li>
        <li><strong>Server-side Logic:</strong> Update the <code>upload.php</code> file to modify the server-side logic,
            such as file handling, validation, etc.</li>
    </ul>

    <h2>Supported File Types</h2>
    <p>The EasyUpload script supports the following file types for upload:</p>
    <ul>
        <li>JPG</li>
        <li>PNG</li>
        <li>GIF</li>
        <li>PDF</li>
        <li>DOC</li>
        <li>ZIP</li>
        <li>MP3</li>
        <li>MP4</li>
        <li>MKV</li>
        <li>Torrents via seedr.cc</li>
    </ul>

    <h2>Notes</h2>
    <ul>
        <li>Please ensure that your server environment supports PHP for the script to function correctly.</li>
        <li>The script uses client-side JavaScript for form submission and progress bar animation.</li>
        <li>Make sure to adjust file permissions and directory settings to allow file uploads to your server.</li>
    </ul>

    <h2>License</h2>
    <p>The EasyUpload script is licensed under Fortune Nowake.</p>
</body>

</html>
