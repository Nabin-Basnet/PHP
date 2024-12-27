<?php
// Set a cookie for previously entered dates
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    setcookie("last_date1", $date1, time() + (86400 * 30), "/");
    setcookie("last_date2", $date2, time() + (86400 * 30), "/");
}

// Display current date and time
echo "<h1>Welcome! Today's date is " . date('Y-m-d H:i:s') . "</h1>";

// Fetch dates from the form
if (isset($date1) && isset($date2)) {
    echo "<p>First Date: $date1</p>";
    echo "<p>Second Date: $date2</p>";

    // Calculate date difference
    $diff = abs(strtotime($date2) - strtotime($date1));
    $days = floor($diff / (60 * 60 * 24));
    echo "<p>The difference between the dates is $days days.</p>";
}

// Display last 5 date calculations if cookies are available
if (isset($_COOKIE['last_date1']) && isset($_COOKIE['last_date2'])) {
    echo "<p>Last Entered Dates: {$_COOKIE['last_date1']} and {$_COOKIE['last_date2']}</p>";
}
?>
