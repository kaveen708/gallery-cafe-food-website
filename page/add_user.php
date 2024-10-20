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

// Get form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = ($_POST['password'] );
$role = $_POST['role'];

// Handle file upload
$profilePicture = $_FILES['profile_picture'];
$profilePicturePath = '';

if ($profilePicture['error'] === UPLOAD_ERR_OK) {
    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($profilePicture['name']);
    
    if (move_uploaded_file($profilePicture['tmp_name'], $uploadFile)) {
        $profilePicturePath = $uploadFile;
    }
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO user (username, email, password, role, profile_picture) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $username, $email, $password, $role, $profilePicturePath);

// Execute the query
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>
