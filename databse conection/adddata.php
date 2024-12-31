<?php
include 'createdb.php';

// Sanitize user inputs
$name = mysqli_real_escape_string($conn, $_POST['name']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);

// Insert data into table
$sql = "INSERT INTO information (name, phone) VALUES ('$name', '$phone')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Data inserted successfully.";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}
?>
