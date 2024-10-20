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

// Get total number of user
$userCountResult = $conn->query("SELECT COUNT(*) AS user FROM user");
$userCount = $userCountResult->fetch_assoc()['user'];

// Get total number of food
$foodCountResult = $conn->query("SELECT COUNT(*) AS food FROM food");
$foodCount = $foodCountResult->fetch_assoc()['food'];

// Get total number of reservations
$reservationCountResult = $conn->query("SELECT COUNT(*) AS reservations FROM reservation");
$reservationCount = $reservationCountResult->fetch_assoc()['reservations'];

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dash.css">
</head>
<body>
    <h1>Dashboard</h1>
    <div class="dashboard">
        <div class="dashboard-item">
            <h2>Total user</h2>
            <p><?php echo $userCount; ?></p>
        </div>
        <div class="dashboard-item">
            <h2>Total food</h2>
            <p><?php echo $foodCount; ?></p>
        </div>
        <div class="dashboard-item">
            <h2>Total reservation</h2>
            <p><?php echo $reservationCount; ?></p>
        </div>
    </div>
</body>
</html>
