<?php
header('Content-Type: application/json');

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gallerycafe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(array('success' => false, 'error' => 'Connection failed: ' . $conn->connect_error)));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $cuisinetype = $_POST['cuisinetype'];

    // Handle file upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);

    // Check if the upload directory exists
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        // Insert into database
        $sql = "INSERT INTO food (name, price, cuisinetype, photo) VALUES ('$name', '$price', '$cuisinetype', '$target_file')";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(array('success' => true));
        } else {
            echo json_encode(array('success' => false, 'error' => $conn->error));
        }
    } else {
        echo json_encode(array('success' => false, 'error' => 'File upload failed'));
    }
}

$conn->close();
?>
