<!--30. Write PHP script to upload Profile Image with following details:
a. File type: PNG & JPEG
b. File size less than 500 KB -->

<?php

$upload_dir = "uploads/";

$max_file_size = 500 * 1024;


$allowed_types = ['image/png', 'image/jpeg'];

$upload_success = false;
$error_message = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['profile_image'])) {
  $file = $_FILES['profile_image'];


  $file_name = $file['name'];
  $file_tmp = $file['tmp_name'];
  $file_size = $file['size'];
  $file_type = $file['type'];

  if ($file_size > $max_file_size) {
    $error_message = "File size exceeds the 500 KB limit.";
  } elseif (!in_array($file_type, $allowed_types)) {
    $error_message = "Only PNG and JPEG files are allowed.";
  } else {
    $unique_file_name = time() . "_" . basename($file_name);


    if (move_uploaded_file($file_tmp, $upload_dir . $unique_file_name)) {
      $upload_success = true;
      $uploaded_image = $upload_dir . $unique_file_name;
    } else {
      $error_message = "Failed to upload the file.";
    }
  }
}
?>


<h2>Upload Profile Image</h2>


<?php if ($error_message) {
  echo "$error_message";
}

if ($upload_success) {
  echo "Profile image uploaded successfully!";
}
?>

<form method="POST" enctype="multipart/form-data">
  <label for="profile_image">Select Profile Image (PNG/JPEG, Max 500 KB):</label>
  <input type="file" id="profile_image" name="profile_image" accept=".png, .jpeg, .jpg" required><br><br>
  <button type="submit">Upload</button>
</form>