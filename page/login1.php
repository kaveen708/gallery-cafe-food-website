<?php
// Start session
session_start();

// Database configuration
$servername = "localhost";
$username = "root"; // replace with your database username
$password = ""; // replace with your database password
$dbname = "gallerycafe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['name'];
    $password = $_POST['password'];

    // Secure the input against SQL injection
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    // SQL query to select user from the database
    $sql = "SELECT * FROM registration WHERE name='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch user data
        $row = $result->fetch_assoc();
        
        // Verify password
        if (password_verify($password, $row['password'])) {
            // Set session variables
            $_SESSION['username'] = $row['name'];
            $_SESSION['email'] = $row['email'];

            // Redirect to login page with success message
            header("Location: login.php?success=Login successful. Redirecting to reservation1.php...");
            exit();
        } else {
            // Redirect to login page with an error message
            header("Location: login.php?error=Invalid password");
            exit();
        }
    } else {
        // Redirect to login page with an error message
        header("Location: login.php?error=No user found with the given username");
        exit();
    }
}

$conn->close();
?>
