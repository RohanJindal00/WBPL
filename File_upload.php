<!DOCTYPE html>
<html lang="en">

<head>
    <title>File Upload</title>
</head>

<body bgcolor="white">
    <!-- Rohan Jindal -->
    <form action=" " Method="post" enctype="multipart/form-data">
        <input type="file" name="file_upload"><br><br>
        <input type="submit" name="submit" value="upload button"><br><br>
    </form>
</body>

</html>

<?php
if (isset($_FILES['file_upload'])) {
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $file_name = $_FILES['file_upload']['name'];
    $file_size = $_FILES['file_upload']['size'];
    $file_tmp = $_FILES['file_upload']['tmp_name'];
    $file_type = $_FILES['file_upload']['type'];
    move_uploaded_file($file_tmp, "Uploaded_File" . $file_name);
}