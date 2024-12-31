<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS mydb";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully.<br>";
} else {
    die("Error creating database: " . mysqli_error($conn));
}

// Selecting the database
if (mysqli_select_db($conn, 'mydb')) {
    echo "Database selected successfully.<br>";
} else {
    die("Error selecting database: " . mysqli_error($conn));
}
?>
