<!-- Write PHP script to upload CV with following details:
a. File type: PDF & DOCS
b. File size less than 1 MB -->

<?php

define('MAX_FILE_SIZE', 1 * 1024 * 1024); 

$allowedFileTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_FILES['cv']) && $_FILES['cv']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['cv']['tmp_name'];
        $fileName = $_FILES['cv']['name'];
        $fileSize = $_FILES['cv']['size'];
        $fileType = $_FILES['cv']['type'];

        // Check file size
        if ($fileSize > MAX_FILE_SIZE) {
            echo "Error: File size exceeds 1 MB limit.";
        } elseif (!in_array($fileType, $allowedFileTypes)) {
            echo "Error: Only PDF and DOCX files are allowed.";
        } else {
            $uploadDir = 'uploads/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            $destination = $uploadDir . basename($fileName);
            if (move_uploaded_file($fileTmpPath, $destination)) {
                echo "File uploaded successfully!";
            } else {
                echo "Error: There was an issue with the file upload.";
            }
        }
    } else {
        echo "Error: No file uploaded or there was an issue with the upload.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload CV</title>
</head>
<body>
    <h1>Upload Your CV</h1>
    <form action="upload_cv.php" method="post" enctype="multipart/form-data">
        <label for="cv">Choose a CV (PDF or DOCX, Max 1MB):</label>
        <input type="file" name="cv" id="cv" required>
        <button type="submit">Upload CV</button>
    </form>
</body>
</html>
