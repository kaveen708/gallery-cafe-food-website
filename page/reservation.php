<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gallerycafe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $table_size = $_POST['table_size'];

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO reservation (name, email, phone, table_size) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $name, $email, $phone, $table_size);

    if ($stmt->execute()) {
        echo "<p>Reservation made successfully!</p>";
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
}

// Close connection
$conn->close();
?>
