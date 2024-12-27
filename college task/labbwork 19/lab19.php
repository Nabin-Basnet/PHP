<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload with Restrictions</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="">
        <input type="submit">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['image'])) {
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";

        $file_name = $_FILES['image']['name'];
        $file_temp = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = pathinfo($file_name, PATHINFO_EXTENSION);
        
        // Set allowed file extensions and max size
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
        $max_size = 200 * 1024 * 1024; // 200 MB in bytes

        if (in_array(strtolower($file_type), $allowed_extensions) && $file_size <= $max_size) {
            $upload_dir = "uploading-image/";
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0777, true); // Create the directory if it doesn't exist
            }

            if (move_uploaded_file($file_temp, $upload_dir . $file_name)) {
                echo "File uploaded successfully!";
                echo "<img src='uploading-image/$file_name' width='300' height='200'>";
            } else {
                echo "Error moving the uploaded file.";
            }
        } else {
            if (!in_array(strtolower($file_type), $allowed_extensions)) {
                echo "Error: Only JPG, PNG, and GIF files are allowed.";
            }
            if ($file_size > $max_size) {
                echo "Error: File size must be below 200 MB.";
            }
        }
    } else {
        echo "Error: No file uploaded.";
    }
}
?>
