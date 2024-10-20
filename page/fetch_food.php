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

$sql = "SELECT name, price, cuisinetype, photo FROM food";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $foodItems = array();
    while($row = $result->fetch_assoc()) {
        $foodItems[] = $row;
    }
    echo json_encode(array('success' => true, 'foodItems' => $foodItems));
} else {
    echo json_encode(array('success' => false, 'error' => 'No food items found'));
}

$conn->close();
?>
