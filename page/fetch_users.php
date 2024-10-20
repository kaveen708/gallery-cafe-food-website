<?php
header('Content-Type: application/json');

// Database configuration
$servername = "localhost";
$username = "root";  // Change if different
$password = "";      // Change if different
$dbname = "gallerycafe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo json_encode(array('success' => false, 'error' => 'Connection failed: ' . $conn->connect_error));
    exit();
}

$sql = "SELECT username, role FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $users = array();
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
    echo json_encode(array('success' => true, 'users' => $users));
} else {
    echo json_encode(array('success' => false, 'error' => 'No users found'));
}

$conn->close();
?>
