<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="adddata.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="phone">Mobile Number:</label>
        <input type="number" name="phone" required><br>

        <button type="submit">Save</button>
    </form>
    <hr><hr>
    <?php
    include 'createdb.php';

    // Check if the table exists and fetch data
    $sql = "SELECT * FROM information";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['s.n']; // Assuming 'id' is the primary key
            $name = $row['name'];
            $phone = $row['phone'];

            echo "<p>ID: $id, Name: $name, Phone: $phone</p>";
        }
    } else {
        echo "No data found or error in query: " . mysqli_error($conn);
    }
    ?>
</body>
</html>
